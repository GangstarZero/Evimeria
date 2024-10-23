@extends('layout.master')

@section('title', 'Job Detail')

@section('content')

    @include('layout.guestNavbar')
    
    <h3>Job Detail</h3>

    <div>
        <img src="{{ asset($job->poster) }}" />
        <p>Company Name: {{ $job->company->name }}</p>
        <p>Job Title: {{ $job->title->name }}</p>
        <p>Job Description: {{ $job->description }}</p>
        <p>Job Poster: {{ $job->poster }}</p>
    </div>

@endsection