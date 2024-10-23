@extends('layout.master')

@section('title', 'Job')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/job/index.css') }}">
@endsection

@section('content')

    @include('layout.guestNavbar')

    <h3>Job List</h3>

    <div class="job-list-container">
        @foreach($jobList as $job)
            <div class="job">
                <a href="{{ route('job.guestDetailPage', ['id' => $job->id]) }}">
                    <img src="{{ asset($job->poster) }}" />
                    <p>{{ $job->title->name }}</p>
                    <p>{{ $job->description }}</p>
                    <p>{{ $job->created_at }}</p>
                </a>
            </div>
        @endforeach
    </div>

@endsection