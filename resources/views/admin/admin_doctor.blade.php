@extends('layouts.app')

@section('title', 'Manage Doctors')

@section('content')
    <div class="container mt-5">

        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Doctors Management</h2>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                + Add Doctor
            </button>
        </div>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- Doctors Table --}}
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Qualification</th>
                            <th>Specialization</th>
                            <th>Department</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($doctors as $doctor)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @if($doctor->image)
                                        <img src="{{ asset('storage/' . $doctor->image) }}" width="80" class="img-thumbnail">
                                    @endif
                                </td>
                                <td>{{ $doctor->name }}</td>
                                <td>{{ $doctor->qualification }}</td>
                                <td>{{ $doctor->specialization }}</td>
                                <td>{{ $doctor->department->title ?? '-' }}</td>
                                <td>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#editModal{{ $doctor->id }}">
                                        Edit
                                    </button>

                                    <!-- Delete Button -->
                                    <form action="{{ route('admin.doctors.destroy', $doctor->id) }}" method="POST"
                                        class="d-inline"
                                        onsubmit="return confirm('Are you sure you want to delete this doctor?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>

                            </tr>

                            {{-- Edit Modal --}}
                            <div class="modal fade" id="editModal{{ $doctor->id }}" tabindex="-1">
                                <div class="modal-dialog">
                                    <form action="{{ route('admin.doctors.update', $doctor->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5>Edit Doctor</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label>Name</label>
                                                    <input type="text" name="name" class="form-control"
                                                        value="{{ $doctor->name }}" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Qualification</label>
                                                    <input type="text" name="qualification" class="form-control"
                                                        value="{{ $doctor->qualification }}" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Specialization</label>
                                                    <input type="text" name="specialization" class="form-control"
                                                        value="{{ $doctor->specialization }}" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Department</label>
                                                    <select name="department_id" class="form-control department-select"
                                                        required>
                                                        <option value="">-- Select Department --</option>
                                                        @foreach($departments as $department)
                                                            <option value="{{ $department->id }}">{{ $department->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Image</label>
                                                    <input type="file" name="image" class="form-control">
                                                    @if($doctor->image)
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

                        @empty
                            <tr>
                                <td colspan="7" class="text-center">No doctors found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Create Modal --}}
    <div class="modal fade" id="createModal" tabindex="-1">
        <div class="modal-dialog">
            <form action="{{ route('admin.doctors.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Add Doctor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Qualification</label>
                            <input type="text" name="qualification" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Specialization</label>
                            <input type="text" name="specialization" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Department</label>
                            <select name="department_id" class="form-control" required>
                                <option value="">-- Select Department --</option>
                                @foreach($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Image</label>
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
@endsection