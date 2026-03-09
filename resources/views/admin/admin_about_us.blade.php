@extends('layouts.app')

@section('title', 'Manage About Us')

@section('content')
    <div class="container mt-5">

        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>About Us Management</h2>
            <div>
                <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#chairpersonModal">
                    + Add Chairperson
                </button>

                {{-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
            + Add About Us
        </button> --}}
            </div>
        </div>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        {{-- About Us Table --}}
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($aboutUs)
                            <tr>
                                <td>1</td>
                                <td>{{ $aboutUs->title }}</td>
                                <td>{{ Str::limit($aboutUs->description, 50) }}</td>
                                <td>
                                    @if ($aboutUs->image)
                                        <img src="{{ asset('storage/' . $aboutUs->image) }}" class="img-thumbnail"
                                            width="80">
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#editModal{{ $aboutUs->id }}">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                        @else
                            <tr>
                                <td colspan="5" class="text-center">No About Us entry found.</td>
                            </tr>
                        @endif
                    </tbody>

                </table>
            </div>
        </div>
        {{-- Chairperson Table --}}
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="mb-3">Chairperson Details</h5>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>About</th>
                            <th>Photo</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($chairperson)
                            <tr>
                                <td>1</td>
                                <td>{{ $chairperson->name }}</td>
                                <td>{{ $chairperson->designation }}</td>
                                <td>{{ $chairperson->about }}</td>
                                <td>
                                    @if ($chairperson->photo)
                                        <img src="{{ asset('storage/' . $chairperson->photo) }}" class="img-thumbnail"
                                            width="80">
                                    @endif
                                </td>
                                <td>
                                    <!-- Edit Button -->
                                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#editChairpersonModal{{ $chairperson->id }}">
                                        Edit
                                    </button>

                                    <!-- Delete Button -->
                                    <form action="{{ route('admin.chairperson.destroy', $chairperson->id) }}"
                                        method="POST" class="d-inline"
                                        onsubmit="return confirm('Are you sure you want to delete this chairperson?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @else
                            <tr>
                                <td colspan="6" class="text-center">
                                    No Chairperson details found.
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @if ($aboutUs)
        <div class="modal fade" id="editModal{{ $aboutUs->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <form action="{{ route('admin.about-us.update', $aboutUs->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit About Us</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $aboutUs->title }}"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" rows="4" required>{{ $aboutUs->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" class="form-control">
                                @if ($aboutUs->image)
                                    <img src="{{ asset('storage/' . $aboutUs->image) }}" class="img-thumbnail mt-2"
                                        width="100">
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
    @endif

    {{-- Create Modal --}}
    <div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('admin.about-us.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add About Us</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter title" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="4" placeholder="Enter description" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control">
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
    {{-- Chairperson Modal --}}
    <div class="modal fade" id="chairpersonModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('admin.chairperson.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Chairperson Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Designation</label>
                            <input type="text" name="designation" class="form-control"
                                placeholder="Enter designation" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">About</label>
                            <textarea name="about" class="form-control" rows="4" placeholder="Enter Chairperson details" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Photo</label>
                            <input type="file" name="photo" class="form-control">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@if($chairperson)
<!-- Edit Chairperson Modal -->
<div class="modal fade" id="editChairpersonModal{{ $chairperson->id }}" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('admin.chairperson.update', $chairperson->id) }}" 
              method="POST" 
              enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Chairperson Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" 
                               name="name" 
                               class="form-control" 
                               value="{{ $chairperson->name }}" 
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Designation</label>
                        <input type="text" 
                               name="designation" 
                               class="form-control" 
                               value="{{ $chairperson->designation }}" 
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">About</label>
                        <textarea name="about" 
                                  class="form-control" 
                                  rows="4" 
                                  required>{{ $chairperson->about }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Current Photo</label><br>
                        @if($chairperson->photo)
                            <img src="{{ asset('storage/' . $chairperson->photo) }}" 
                                 width="100" 
                                 class="mb-2 img-thumbnail">
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Change Photo</label>
                        <input type="file" name="photo" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-success">
                        Update
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endif    
@endsection
