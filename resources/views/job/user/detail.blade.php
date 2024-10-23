@extends('layout.master')

@section('title', 'Job Detail')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/job/detail.css') }}">
@endsection

@section('content')

    @include('layout.userNavbar')

    
    {{-- {{ $userId }} --}}
    
    <div class="detail-page">
        <div class="company-detail">
            <img src="{{ asset($job->poster) }}" />
            <p>Company Name: {{ $job->company->name }}</p>
            <p>Job Title: {{ $job->title->name }}</p>
            <p>Job Description: {{ $job->description }}</p>
            <p>Job Poster: {{ $job->poster }}</p>
        </div>
    
        <div class="apply-job-form">
            <form id="applyJobForm">
                <div class="inputBoxContainer">
                    <input type="hidden" id="jobId" value="{{ $job->id }}" />
                </div>
                <div class="inputBoxContainer">
                    <input type="text" id="fullName" placeholder="Full Name" required>
                </div>
                <div class="inputBoxContainer">
                    <input type="text" id="phoneNumber" placeholder="Phone Number" required>
                </div>
                <div class="inputBoxContainer">
                    <input type="text" id="salaryExpectation" placeholder="Salary Estimation" required>
                </div>
                <div class="inputBoxContainer">
                    <input type="text" id="cv" placeholder="CV" required>
                </div>
                <button id="button" class="btn">Submit</button>
            </form>
        </div>
    </div>


@endsection

@section('extra-js')

    @include('authentication.logout')

    <script>
        
        $('#applyJobForm').submit(function (e){
            e.preventDefault()

            const data = {
                _token: '{{ csrf_token() }}',
                jobId: parseInt({{ $job->id }}),
                userId: parseInt({{ $userId }}),
                fullName: document.getElementById('fullName').value,
                phoneNumber: document.getElementById('phoneNumber').value,
                salaryExpectation: document.getElementById('salaryExpectation').value,
                cv: document.getElementById('cv').value
            }

            console.log(data)

            $.ajax({
                url: '{{ route("apply_job.add") }}',
                type: 'POST',
                data: data,
                success: function(response, status, xhr) {
                    window.location.reload()
                    // window.location.href = '{{ route('dashboard.home') }}';
                },
                error: function(error){
                    console.log(error)
                }
            })
        })

    </script>

@endsection