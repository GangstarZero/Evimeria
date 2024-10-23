@extends('layout.master')

@section('title', 'Job Detail')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/job/detail.css') }}">
@endsection

@section('content')

    @include('layout.companyNavbar')

    <div class="detail-page">
        <div class="company-detail">
            <img src="{{ asset($job->poster) }}" />
            <p>Company Name: {{ $job->company->name }}</p>
            <p>Job Title: {{ $job->title->name }}</p>
            <p>Job Description: {{ $job->description }}</p>
            <p>Job Poster: {{ $job->poster }}</p>
        </div>
    </div>

@endsection

@section('extra-js')

    @include('authentication.logout')

@endsection