@extends('layouts.app')

@section('title', 'Manage Doctors')

@section('content')
    <div class="container-fluid px-3 px-md-4 mt-4">

        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0 fw-bold">Doctors Management</h4>
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                + Add Doctor
            </button>
        </div>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- ===== DESKTOP TABLE (hidden on mobile) ===== --}}
        <div class="card d-none d-md-block">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Qualification</th>
                                <th>Specialized</th>
                                <th>Specialization</th>
                                <th>Department</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($doctors as $doctor)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">
                                        @if ($doctor->image)
                                            <img src="{{ asset('storage/' . $doctor->image) }}" width="60" class="img-thumbnail">
                                        @else
                                            <span class="text-muted">—</span>
                                        @endif
                                    </td>
                                    <td class="align-middle">{{ $doctor->name }}</td>
                                    <td class="align-middle">{{ $doctor->qualification }}</td>
                                    <td class="align-middle">
                                        @if ($doctor->is_specialized)
                                            <span class="badge bg-success">Yes</span>
                                        @else
                                            <span class="badge bg-secondary">No</span>
                                        @endif
                                    </td>
                                    <td class="align-middle">{{ $doctor->sub_specialization ?? '—' }}</td>
                                    <td class="align-middle">{{ $doctor->department->title ?? '—' }}</td>
                                    <td class="align-middle">
                                        <div class="d-flex gap-1">
                                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#editModal{{ $doctor->id }}">
                                                Edit
                                            </button>
                                            <form action="{{ route('admin.doctors.destroy', $doctor->id) }}"
                                                method="POST" class="d-inline"
                                                onsubmit="return confirm('Delete this doctor?');">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center py-4 text-muted">No doctors found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- ===== MOBILE CARDS (hidden on desktop) ===== --}}
        <div class="d-md-none">
            @forelse($doctors as $doctor)
                <div class="card mb-3 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            {{-- Image --}}
                            @if ($doctor->image)
                                <img src="{{ asset('storage/' . $doctor->image) }}"
                                    width="60" height="60"
                                    class="img-thumbnail rounded-circle object-fit-cover flex-shrink-0">
                            @else
                                <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                                    style="width:60px;height:60px;">
                                    <i class="bi bi-person-fill text-white fs-4"></i>
                                </div>
                            @endif

                            {{-- Name & Department --}}
                            <div>
                                <h6 class="mb-0 fw-bold">{{ $doctor->name }}</h6>
                                <small class="text-muted">{{ $doctor->department->title ?? '—' }}</small>
                            </div>
                        </div>

                        <div class="row g-2 mb-3">
                            <div class="col-6">
                                <small class="text-muted d-block">Qualification</small>
                                <span class="fw-medium" style="font-size:0.85rem;">{{ $doctor->qualification }}</span>
                            </div>
                            <div class="col-6">
                                <small class="text-muted d-block">Specialized</small>
                                @if ($doctor->is_specialized)
                                    <span class="badge bg-success">Yes</span>
                                @else
                                    <span class="badge bg-secondary">No</span>
                                @endif
                            </div>
                            @if ($doctor->is_specialized && $doctor->sub_specialization)
                                <div class="col-12">
                                    <small class="text-muted d-block">Specialization</small>
                                    <span style="font-size:0.85rem;">{{ $doctor->sub_specialization }}</span>
                                </div>
                            @endif
                        </div>

                        {{-- Actions --}}
                        <div class="d-flex gap-2">
                            <button class="btn btn-sm btn-warning flex-fill" data-bs-toggle="modal"
                                data-bs-target="#editModal{{ $doctor->id }}">
                                <i class="bi bi-pencil-fill me-1"></i> Edit
                            </button>
                            <form action="{{ route('admin.doctors.destroy', $doctor->id) }}"
                                method="POST" class="flex-fill"
                                onsubmit="return confirm('Delete this doctor?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger w-100">
                                    <i class="bi bi-trash-fill me-1"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center text-muted py-5">No doctors found.</div>
            @endforelse
        </div>

        {{-- Pagination --}}
        <div class="d-flex justify-content-center mt-3">
            {{ $doctors->links() }}
        </div>

        {{-- EDIT MODALS --}}
        @foreach($doctors as $doctor)
            <div class="modal fade" id="editModal{{ $doctor->id }}" tabindex="-1">
                <div class="modal-dialog modal-dialog-scrollable">
                    <form action="{{ route('admin.doctors.update', $doctor->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Doctor</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">

                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ $doctor->name }}" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Qualification</label>
                                    <input type="text" name="qualification" class="form-control"
                                        value="{{ $doctor->qualification }}" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Is Specialized?</label>
                                    <select name="is_specialized" class="form-control edit_is_specialized">
                                        <option value="0" {{ !$doctor->is_specialized ? 'selected' : '' }}>No</option>
                                        <option value="1" {{ $doctor->is_specialized ? 'selected' : '' }}>Yes</option>
                                    </select>
                                </div>

                                <div class="mb-3 edit_sub_specialization_box"
                                    style="{{ $doctor->is_specialized ? '' : 'display:none;' }}">
                                    <label class="form-label">Specialization</label>
                                    <input type="text" name="sub_specialization" class="form-control"
                                        value="{{ $doctor->sub_specialization }}">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Department</label>
                                    <select name="department_id" class="form-control" required>
                                        <option value="">-- Select Department --</option>
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->id }}"
                                                {{ $doctor->department_id == $department->id ? 'selected' : '' }}>
                                                {{ $department->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Image</label>
                                    <input type="file" name="image" class="form-control">
                                    @if ($doctor->image)
                                        <img src="{{ asset('storage/' . $doctor->image) }}"
                                            class="img-thumbnail mt-2" width="100">
                                    @endif
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button class="btn btn-warning">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach

    </div>

    {{-- CREATE MODAL --}}
    <div class="modal fade" id="createModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable">
            <form action="{{ route('admin.doctors.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Doctor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Qualification</label>
                            <input type="text" name="qualification" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Is Specialized?</label>
                            <select name="is_specialized" class="form-control" id="create_is_specialized">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>

                        <div class="mb-3" id="create_sub_specialization_box" style="display:none;">
                            <label class="form-label">Specialization</label>
                            <input type="text" name="sub_specialization" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Department</label>
                            <select name="department_id" class="form-control" required>
                                <option value="">-- Select Department --</option>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- JS --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            // CREATE
            const createSelect = document.getElementById('create_is_specialized');
            const createBox = document.getElementById('create_sub_specialization_box');
            createSelect.addEventListener('change', function () {
                createBox.style.display = this.value == '1' ? 'block' : 'none';
            });

            // EDIT
            document.querySelectorAll('.edit_is_specialized').forEach(function (select) {
                select.addEventListener('change', function () {
                    const box = this.closest('.modal-body').querySelector('.edit_sub_specialization_box');
                    box.style.display = this.value == '1' ? 'block' : 'none';
                });
            });

        });
    </script>

@endsection