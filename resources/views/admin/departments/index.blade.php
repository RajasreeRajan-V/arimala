@extends('layouts.app')

@section('title', 'Manage Departments')

@section('content')
    <div class="container mt-5">

        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Departments Management</h2>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                + Add Department
            </button>
        </div>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- Departments Table --}}
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle text-nowrap">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Head of Department</th>
                                <th>Sub Taglines</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($departments as $department)
                                <tr>
                                    <td>{{ $departments->firstItem() + $loop->index }}</td>
                                    <td>{{ $department->title }}</td>
                                    <td style="max-width: 200px; white-space: normal;">
                                        {{ Str::limit($department->description, 80) }}
                                    </td>
                                    <td>
                                        <img src="{{ asset('storage/' . $department->image) }}" class="img-thumbnail"
                                            width="80">
                                    </td>
                                    <td>
                                        @if ($department->head_photo)
                                            <img src="{{ asset('storage/' . $department->head_photo) }}"
                                                class="img-thumbnail mb-1 d-block" width="60">
                                        @endif
                                        <span>{{ $department->head_name ?? '—' }}</span>
                                    </td>
                                    <td style="max-width: 180px; white-space: normal;">
                                        <ul class="mb-0 ps-3">
                                            @for ($i = 1; $i <= 4; $i++)
                                                @php $title = 'subtagline' . $i . '_title'; @endphp
                                                @if ($department->$title)
                                                    <li><strong>{{ $department->$title }}</strong></li>
                                                @endif
                                            @endfor
                                        </ul>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-wrap gap-1">
                                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#editModal{{ $department->id }}">
                                                Edit
                                            </button>
                                            <form action="{{ route('admin.departments.destroy', $department->id) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Delete this department?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No departments found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Pagination --}}
                <div class="d-flex justify-content-center mt-3">
                    {{ $departments->links() }}
                </div>
            </div>
        </div>
    </div>

    {{-- Edit Modal --}}
    @foreach ($departments as $department)
        <div class="modal fade" id="editModal{{ $department->id }}" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <form action="{{ route('admin.departments.update', $department->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Department</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

                        </div>

                        <div class="modal-body">
                            @include('admin.departments.partials.form', ['department' => $department])
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Cancel
                            </button>

                            <button type="submit" class="btn btn-warning">
                                Update
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    @endforeach

    {{-- Create Modal --}}
    <div class="modal fade" id="createModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <form action="{{ route('admin.departments.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Department</h5>
                        <button class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="form-label">Title *</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description *</label>
                            <textarea name="description" class="form-control" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Image *</label>
                            <input type="file" name="image" class="form-control" required>
                        </div>

                        <hr>

                        {{-- Department Head --}}
                        <h6 class="fw-bold mb-3">Department Head</h6>

                        <div class="mb-3">
                            <label class="form-label">Head Name</label>
                            <input type="text" name="head_name" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Head Photo</label>
                            <input type="file" name="head_photo" class="form-control">
                        </div>

                        <hr>

                        @for ($i = 1; $i <= 4; $i++)
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Subtagline {{ $i }} Title</label>
                                    <input type="text" name="subtagline{{ $i }}_title" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Subtagline {{ $i }} Description</label>
                                    <textarea name="subtagline{{ $i }}_description" class="form-control" rows="2"></textarea>
                                </div>
                            </div>
                        @endfor

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
