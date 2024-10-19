@extends('layout.master')

@section('content')
    {{-- @include('layout.guestNavbar') --}}

    <div>
        @foreach($jobList as $job)
            <a href="{{ route('job.detailPage', ['id' => $job->id]) }}">
                <p>{{ $job->title->name }}</p>
                <p>{{ $job->description }}</p>
                <p>{{ $job->created_at }}</p>
            </a>
        @endforeach
    </div>
@endsection
