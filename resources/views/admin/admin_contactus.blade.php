@extends('layouts.app')

@section('title', 'Manage Contact Messages')

@section('content')
    <div class="container mt-5">

        {{-- Header --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Contact Us Messages</h2>
        </div>

        {{-- Success Message --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- Contact Table --}}
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-striped align-middle">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($contacts as $contact)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->subject }}</td>
                                <td>{{ Str::limit($contact->message, 40) }}</td>

                                <td>
                                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#replyModal{{ $contact->id }}">
                                        Reply
                                    </button>

                                    <form action="{{ route('admin.contactus.destroy', $contact->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Delete this message?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">
                                    No contact messages found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Reply Modal --}}
    @foreach($contacts as $contact)
        <div class="modal fade" id="replyModal{{ $contact->id }}" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <form action="{{ route('admin.contactus.reply', $contact->id) }}" method="POST">
                    @csrf


                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Reply to Message</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">
                            <p><strong>Name:</strong> {{ $contact->name }}</p>
                            <p><strong>Email:</strong> {{ $contact->email }}</p>
                            <p><strong>Subject:</strong> {{ $contact->subject }}</p>

                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea class="form-control" rows="3" disabled>{{ $contact->message }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Reply</label>
                                <textarea name="reply" class="form-control" rows="4"
                                    placeholder="Type your reply here...">{{ $contact->reply }}</textarea>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary">Save Reply</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
@endsection