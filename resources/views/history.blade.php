@extends('layout.master')

@section('title', 'History')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/history.css') }}">
@endsection

@section('content')

    @include('layout.userNavbar')

    <div class="history-page">
        <div>
            @foreach ($applyJobList as $applyJob)
                <div class="apply-job">
                    <p>Company: {{ $applyJob->job->company->name }}</p>
                    <p>Job: {{ $applyJob->job->title->name }}</p>
                    <p
                        style="
    font-weight: bold; 
    color: {{ $applyJob->status === 'Applied' ? 'blue' : ($applyJob->status === 'Rejected' ? 'red' : ($applyJob->status === 'Accepted' ? '#28a745' : 'black')) }}">
                        Status: {{ ucfirst($applyJob->status) }}
                    </p>
                    <a href="{{ route('job.userDetailPage', ['id' => $applyJob->job->id]) }}" class="job-details-btn">
                        View Job Details
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection

@section('extra-js')
    @include('authentication.logout')
@endsection
