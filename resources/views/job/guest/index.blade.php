@extends('layout.master')

@section('title', 'Job')

@section('content')

    @include('layout.guestNavbar')

    <h3>Job List</h3>

    <div>
        @foreach($jobList as $job)
            <div>
                <a href="{{ route('job.guestDetailPage', ['id' => $job->id]) }}">
                    <p>{{ $job->title->name }}</p>
                    <p>{{ $job->description }}</p>
                    <p>{{ $job->created_at }}</p>
                </a>
            </div>
        @endforeach
    </div>

@endsection