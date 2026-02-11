@extends('layouts.app')

@section('title', 'Manage Careers')

@section('content')
    <div class="container mt-5">

        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Careers Management</h2>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                + Add Career
            </button>
        </div>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Careers Table --}}
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Job Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Qualification</th>
                            <th>Due Date</th>
                            <th>Position</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($careers as $career)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $career->job_title }}</td>
                                <td>{{ Str::limit($career->description, 50) }}</td>
                                <td>
                                    @if($career->imge)
                                        <img src="{{ asset('storage/' . $career->imge) }}" class="img-thumbnail" width="80">
                                    @endif
                                </td>
                                <td>{{ $career->qualification }}</td>
                                <td>{{ \Carbon\Carbon::parse($career->due_date)->format('Y-m-d') }}</td>

                                <td>{{ $career->position }}</td>
                                <td>
                                    <!-- Edit Button -->
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#editModal{{ $career->id }}">
                                        Edit
                                    </button>

                                    <!-- Delete Button -->
                                    <form action="{{ route('admin.careers.destroy', $career->id) }}" method="POST"
                                        class="d-inline"
                                        onsubmit="return confirm('Are you sure you want to delete this career?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No Careers found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    {{-- Edit Modal --}}
    @foreach($careers as $career)
        <div class="modal fade" id="editModal{{ $career->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <form action="{{ route('admin.careers.update', $career->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Career</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Job Title</label>
                                <input type="text" name="job_title" class="form-control" value="{{ $career->job_title }}"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" rows="4"
                                    required>{{ $career->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Qualification</label>
                                <input type="text" name="qualification" class="form-control"
                                    value="{{ $career->qualification }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Due Date</label>
                                <input type="date" name="due_date" class="form-control"
                                    value="{{ $career->due_date->format('Y-m-d') }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Position</label>
                                <input type="text" name="position" class="form-control" value="{{ $career->position }}"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="imge" class="form-control">
                                @if($career->imge)
                                    <img src="{{ asset('storage/' . $career->imge) }}" class="img-thumbnail mt-2" width="100">
                                @endif
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-warning">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach

    {{-- Create Modal --}}
    <div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('admin.careers.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Career</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Job Title</label>
                            <input type="text" name="job_title" class="form-control" placeholder="Enter job title" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="4" placeholder="Enter description"
                                required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Qualification</label>
                            <input type="text" name="qualification" class="form-control" placeholder="Enter qualification"
                                required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Due Date</label>
                            <input type="date" name="due_date" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Position</label>
                            <input type="text" name="position" class="form-control" placeholder="Enter position" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" name="imge" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection