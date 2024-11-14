@extends('layout.master')

@section('title', 'Job')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/job/index.css') }}">
@endsection

@section('content')

    @include('layout.companyNavbar')

    <div class="index-page">
        <div class="search-bar-container">
            <form class="input-group mb-3" id="searchBar">
                <input type="search" class="form-control" id="searchBox" placeholder="Search" name="query">
                <button class="btn btn-outline-secondary" type="submit" id="searchButton">Search</button>
            </form>
        </div>

        <div class="job-list-container">
            @foreach ($jobList as $job)
                <div class="job-box">
                    <a href="{{ route('company.job.detailPage', ['id' => $job->id]) }}" class="job">
                        <img src="{{ asset($job->poster) }}" />
                    </a>
                    <a href="{{ route('company.job.editPage', ['id' => $job->id]) }}" class="editButton"><button
                            class="btn btn-primary edit-btn">Edit</button></a>
                </div>
            @endforeach
        </div>
    </div>

@endsection

@section('extra-js')

    @include('authentication.logout')

    @include('job.searchJob')

@endsection
