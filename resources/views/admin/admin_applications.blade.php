@extends('layouts.app')

@section('title', 'Job Applications')

@section('content')
    <div class="container mt-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Job Applications</h2>
        </div>

        {{-- Success Message --}}
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

                                {{-- Career Job Title --}}
                                <td>
                                    {{ $application->career->job_title ?? 'N/A' }}
                                </td>

                                <td>{{ $application->position }}</td>

                                <td>{{ $application->qualification }}</td>

                                <td>{{ $application->experience }}</td>

                                {{-- Resume Download --}}
                                <td>
                                    @if ($application->resume)
                                        <a href="{{ asset('storage/' . $application->resume) }}"
                                            class="btn btn-sm btn-success" target="_blank">
                                            View
                                        </a>
                                    @else
                                        <span class="text-muted">No Resume</span>
                                    @endif
                                </td>

                                <td>
                                    {{ $application->created_at->format('d M Y') }}
                                </td>

                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('admin.applications.show', $application->id) }}"
                                            class="btn btn-sm btn-info">
                                            <i class="fa-solid fa-street-view"></i>
                                        </a>

                                        <a href="" class="btn btn-sm btn-danger">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </div>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="text-center">
                                    No Applications Found
                                </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>

            </div>
        </div>

    </div>
@endsection
