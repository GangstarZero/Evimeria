@extends('layout.master')

@section('title', 'Job')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/job/index.css') }}">
@endsection

@section('content')

    @include('layout.userNavbar')

    <div class="index-page">
        <div class="search-bar-container">
            <form class="input-group mb-3" id="searchBar">
                <input type="search" class="form-control" id="searchBox" placeholder="Search" name="query">
                <button class="btn btn-outline-secondary" type="submit" id="searchButton">Search</button>
            </form>
        </div>
    
        <div class="job-list-container">
            @foreach($jobList as $job)
                <div class="job">
                    <a href="{{ route('job.userDetailPage', ['id' => $job->id]) }}">
                        <img src="{{ asset($job->poster) }}" />
                        <p>{{ $job->title->name }}</p>
                        <p>{{ $job->description }}</p>
                        <p>{{ $job->created_at }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection

@section('extra-js')

    @include('authentication.logout')

    @include('job.company.searchJob')

@endsection