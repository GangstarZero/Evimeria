@extends('layout.master')

@section('title', 'History')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/history.css') }}">
@endsection

@section('content')

    @include('layout.userNavbar')

    <div class="history-page">
        <div>
            @foreach($applyJobList as $applyJob)
                <div class="apply-job">
                    <p>Company: {{ $applyJob->job->company->name }}</p>
                    <p>Job: {{ $applyJob->job->title->name }}</p>
                    <p>Status: {{ $applyJob->status }}</p>
                </div>
            @endforeach
        </div>
    </div>

@endsection