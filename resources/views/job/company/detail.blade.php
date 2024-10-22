@extends('layout.master')

@section('title', 'Job Detail')

@section('content')

    @include('layout.companyNavbar')

    <h3>Job Detail</h3>

    <div>
        <p>Company Name: {{ $job->company->name }}</p>
        <p>Job Title: {{ $job->title->name }}</p>
        <p>Job Description: {{ $job->description }}</p>
        <p>Job Poster: {{ $job->poster }}</p>
    </div>

@endsection

@section('extra-js')

    @include('authentication.logout')

@endsection