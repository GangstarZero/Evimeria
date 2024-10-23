@extends('layout.master')

@section('title', 'Job')

@section('content')

    @include('layout.userNavbar')

    <h3>Job List</h3>

    <div>
        @foreach($jobList as $job)
            <div>
                <a href="{{ route('job.userDetailPage', ['id' => $job->id]) }}">
                    <img src="{{ asset($job->poster) }}" />
                    <p>{{ $job->title->name }}</p>
                    <p>{{ $job->description }}</p>
                    <p>{{ $job->created_at }}</p>
                </a>
            </div>
        @endforeach
    </div>

@endsection

@section('extra-js')

    @include('authentication.logout')

@endsection