@extends('layout.master')

@section('title', 'Job Detail')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/job/detail.css') }}">
@endsection

@section('content')

    @include('layout.guestNavbar')
    
    
    <div class="detail-page">
        <div class="detail-form-container">
            <div class="company-detail">
                <img src="{{ asset($job->poster) }}" />
                <p>Company Name: {{ $job->company->name }}</p>
                <p>Job Title: {{ $job->title->name }}</p>
                <p>Job Description: {{ $job->description }}</p>
                <p>Date: {{ $job->created_at }}</p>
            </div>
        </div>
    </div>

@endsection