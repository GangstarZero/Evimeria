@extends('layout.master')

@section('title', 'Job Detail')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/job/detail.css') }}">
@endsection

@section('content')

    @include('layout.guestNavbar')

    <div class="detail-page">
        <div class="detail-form-container">
            <div class="company-info">
                <img src="{{ asset($job->poster) }}" />
                <div class="company-detail">
                    <p><strong>Company Name:</strong> {{ $job->company->name }}</p>
                    <p><strong>Job Title:</strong> {{ $job->title->name }}</p>
                    <p><strong>Posted:</strong> {{ $job->created_at }}</p>
                    <p class="job-description" style="white-space: pre-line;"><strong>Job Description:</strong> {{ $job->description }}</p>
                </div>
            </div>
        </div>
    </div>

@endsection
