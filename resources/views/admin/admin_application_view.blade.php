@extends('layouts.app')

@section('title', 'Application Detail')

@section('content')
<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Application Detail</h2>
        <a href="{{ route('admin.applications.index') }}" class="btn btn-secondary">
            <i class="fa-solid fa-arrow-left"></i> Back to Applications
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th width="200">Name</th>
                    <td>{{ $application->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $application->email }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $application->phone }}</td>
                </tr>
                <tr>
                    <th>Applied Job</th>
                    <td>{{ $application->career->job_title ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Position</th>
                    <td>{{ $application->position }}</td>
                </tr>
                <tr>
                    <th>Qualification</th>
                    <td>{{ $application->qualification }}</td>
                </tr>
                <tr>
                    <th>Experience</th>
                    <td>{{ $application->experience }}</td>
                </tr>
                <tr>
                    <th>Resume</th>
                    <td>
                        @if ($application->resume)
                            <a href="{{ asset('storage/' . $application->resume) }}"
                                target="_blank" class="btn btn-sm btn-primary">
                                <i class="fa-solid fa-file-pdf"></i> View Resume
                            </a>
                        @else
                            <span class="text-muted">No Resume</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Cover Letter</th>
                    <td>{{ $application->cover_letter ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <th>Applied Date</th>
                    <td>{{ $application->created_at->format('d M Y') }}</td>
                </tr>
            </table>

            <div class="mt-3">
                <form action="{{ route('admin.applications.destroy', $application->id) }}"
                    method="POST" onsubmit="return confirm('Delete this application?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fa-solid fa-trash"></i> Delete Application
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection