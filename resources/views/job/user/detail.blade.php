@extends('layout.master')

@section('title', 'Job Detail')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/job/detail.css') }}">
@endsection

@section('content')

    @include('layout.userNavbar')

    <div class="detail-page">
        <div class="detail-form-container">
            <div class="company-info">
                <img src="{{ asset($job->poster) }}" />
                <div class="company-detail">
                    <p><strong>Company Name:</strong> {{ $job->company->name }}</p>
                    <p class="company-description" style="white-space: pre-line;"><strong>Company Description:</strong>{{ $job->company->description }}</p>
                    <p><strong>Job Title:</strong> {{ $job->title->name }}</p>
                    <p><strong>Posted:</strong> {{ $job->created_at->format('d F Y') }}</p>
                    <p class="job-description" style="white-space: pre-line;"><strong>Job Description:</strong>
                        {{ $job->description }}</p>
                </div>
            </div>
            <div class="apply-job-form" style="width: 40rem">
                <h2 class="d-flex justify-content-center">Form Apply Job</h2>
                <form id="applyJobForm" class="d-flex justify-content-center flex-column">
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
                    <button id="button" class="btn btn-primary">Apply</button>
                </form>
            </div>
        </div>
    </div>


@endsection

@section('extra-js')

    @include('authentication.logout')

    <script>
        $('#applyJobForm').submit(function(e) {
            e.preventDefault()

            const data = {
                _token: '{{ csrf_token() }}',
                jobId: parseInt({{ $job->id }}),
                userId: parseInt({{ $userId }}),
                fullName: document.getElementById('fullName').value,
                phoneNumber: document.getElementById('phoneNumber').value,
                salaryExpectation: document.getElementById('salaryExpectation').value,
                cv: document.getElementById('cv').value,
                status: 'Applied'
            }

            console.log(data)

            $.ajax({
                url: '{{ route('apply_job.add') }}',
                type: 'POST',
                data: data,
                success: function(response, status, xhr) {
                    // window.location.reload()
                    // window.location.href = '{{ route('dashboard.home') }}';
                },
                error: function(xhr) {
                    console.log(xhr)
                }
            })


            $.ajax({
                url: '{{ route('api.chat_room.create') }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    user_id: {{ $userId }},
                    company_id: {{ $job->company->id }}
                },
                success: function(response, status, xhr) {
                    window.location.reload()
                    // window.location.href = '{{ route('dashboard.home') }}';
                },
                error: function(xhr) {
                    console.log(xhr.responseJSON.message)
                }
            })
        })
    </script>

@endsection
