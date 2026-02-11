@extends('layouts.app')

@section('title', 'Manage Reviews')

@section('content')
    <div class="container mt-5">

        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Reviews Management</h2>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                + Add Review
            </button>
        </div>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- Reviews Table --}}
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Rating</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($reviews as $review)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $review->name }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($review->description, 50) }}</td>
                                <td>
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $review->rating)
                                            <i class="bi bi-star-fill text-warning"></i>
                                        @else
                                            <i class="bi bi-star text-warning"></i>
                                        @endif
                                    @endfor
                                </td>

                                <td>{{ $review->created_at->format('Y-m-d') }}</td>
                                <td>
                                    {{-- Edit Button --}}
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#editModal{{ $review->id }}">
                                        Edit
                                    </button>

                                    {{-- Delete Button --}}
                                    <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST"
                                        class="d-inline"
                                        onsubmit="return confirm('Are you sure you want to delete this review?');">
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
                                <td colspan="6" class="text-center">No Reviews found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    {{-- Edit Modal --}}
    @foreach($reviews as $review)
        <div class="modal fade" id="editModal{{ $review->id }}" tabindex="-1">
            <div class="modal-dialog">
                <form action="{{ route('admin.reviews.update', $review->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Review</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">

                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $review->name }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" rows="4"
                                    required>{{ $review->description }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Rating</label>
                                <select name="rating" class="form-control" required>
                                    @for($i = 1; $i <= 5; $i++)
                                        <option value="{{ $i }}" {{ $review->rating == $i ? 'selected' : '' }}>
                                            {{ $i }} Star
                                        </option>
                                    @endfor
                                </select>
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
    <div class="modal fade" id="createModal" tabindex="-1">
        <div class="modal-dialog">
            <form action="{{ route('admin.reviews.store') }}" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Review</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="4" placeholder="Enter review"
                                required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Rating</label>
                            <select name="rating" class="form-control" required>
                                <option value="">Select Rating</option>
                                @for($i = 1; $i <= 5; $i++)
                                    <option value="{{ $i }}">{{ $i }} Star</option>
                                @endfor
                            </select>
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