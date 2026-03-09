@extends('layouts.app')

@section('title', 'Read Applications')

@section('content')
<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Read Applications <span class="badge bg-success">Opened</span></h2>
        <a href="{{ route('admin.applications.index') }}" class="btn btn-secondary">
            <i class="fa-solid fa-arrow-left"></i> Back to Unread
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Applicant Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Applied Job</th>
                        <th>Position</th>
                        <th>Qualification</th>
                        <th>Experience</th>
                        <th>Resume</th>
                        <th>Applied Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($applications as $application)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $application->name }}</td>
                            <td>{{ $application->email }}</td>
                            <td>{{ $application->phone }}</td>
                            <td>{{ $application->career->job_title ?? 'N/A' }}</td>
                            <td>{{ $application->position }}</td>
                            <td>{{ $application->qualification }}</td>
                            <td>{{ $application->experience }}</td>
                            <td>
                                @if ($application->resume)
                                    <a href="{{ asset('storage/' . $application->resume) }}"
                                        class="btn btn-sm btn-success" target="_blank">View</a>
                                @else
                                    <span class="text-muted">No Resume</span>
                                @endif
                            </td>
                            <td>{{ $application->created_at->format('d M Y') }}</td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center gap-2">

                                    <a href="{{ route('admin.applications.show', $application->id) }}"
                                        class="btn btn-sm btn-info">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>

                                    <form action="{{ route('admin.applications.destroy', $application->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Delete this application?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="11" class="text-center">No Read Applications Found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection