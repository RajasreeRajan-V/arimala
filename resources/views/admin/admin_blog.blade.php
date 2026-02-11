@extends('layouts.app')

@section('title', 'Manage Blogs')

@section('content')
<div class="container mt-5">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Blogs Management</h2>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
            + Add Blog
        </button>
    </div>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    {{-- Blogs Table --}}
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Heading</th>
                        <th>Content</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($blogs as $blog)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->heading }}</td>
                            <td>{{ Str::limit($blog->content, 50) }}</td>
                            <td>
                                @if($blog->image)
                                    <img src="{{ asset('storage/' . $blog->image) }}" 
                                         class="img-thumbnail" width="80">
                                @endif
                            </td>
                            <td>
                                {{-- Edit Button --}}
                                <button class="btn btn-sm btn-warning"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editModal{{ $blog->id }}">
                                    Edit
                                </button>

                                {{-- Delete Button --}}
                                <form action="{{ route('admin.blogs.destroy', $blog->id) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Are you sure?');">
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
                            <td colspan="6" class="text-center">No Blogs found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>

{{-- Edit Modals --}}
@foreach($blogs as $blog)
<div class="modal fade" id="editModal{{ $blog->id }}" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('admin.blogs.update', $blog->id) }}"
              method="POST"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Blog</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title"
                               class="form-control"
                               value="{{ $blog->title }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Heading</label>
                        <input type="text" name="heading"
                               class="form-control"
                               value="{{ $blog->heading }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Content</label>
                        <textarea name="content"
                                  class="form-control"
                                  rows="4"
                                  required>{{ $blog->content }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="image" class="form-control">
                        @if($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}"
                                 class="img-thumbnail mt-2"
                                 width="100">
                        @endif
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal">Cancel</button>
                    <button type="submit"
                            class="btn btn-warning">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endforeach


{{-- Create Modal --}}
<div class="modal fade" id="createModal" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('admin.blogs.store') }}"
              method="POST"
              enctype="multipart/form-data">
            @csrf

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Blog</h5>
                    <button type="button" class="btn-close"
                            data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title"
                               class="form-control"
                               placeholder="Enter title" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Heading</label>
                        <input type="text" name="heading"
                               class="form-control"
                               placeholder="Enter heading">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Content</label>
                        <textarea name="content"
                                  class="form-control"
                                  rows="4"
                                  placeholder="Enter content"
                                  required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal">Cancel</button>
                    <button type="submit"
                            class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
 