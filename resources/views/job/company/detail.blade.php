@extends('layout.master')

@section('title', 'Job Detail')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/job/detail.css') }}">
@endsection

@section('content')

    @include('layout.companyNavbar')

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

        <div>
            @foreach($applyJobList as $applyJob)
                <div class="apply-job">
                    <div>
                        <p>Name: {{ $applyJob->fullName }}</p>
                        <p>Phone Number: {{ $applyJob->phoneNumber }}</p>
                        <p>Salary Expectation: {{ $applyJob->salaryExpectation }}</p>
                        <p>CV: {{ $applyJob->cv }}</p>
                    </div>
                    <div>
                        <button class="btn btn-primary" onclick="acceptButtonClick({{ $applyJob->id }})">Accept</button>
                        <button class="btn btn-danger" onclick="rejectButtonClick({{ $applyJob->id }})">Reject</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection

@section('extra-js')

    @include('authentication.logout')

    <script>

        const acceptButtonClick = (id) => {

            $.ajax({
                url: '{{ route("apply_job.edit") }}',
                type: 'PUT',
                data:  { _token: '{{ csrf_token() }}', jobId: parseInt({{ $job->id }}), status: "Accepted" },
                success: function(response, status, xhr) {
                    window.location.reload()
                },
                error: function(xhr){
                    console.log(xhr)
                }
            })
        }

        const rejectButtonClick = (id) => {
            $.ajax({
                url: '{{ route("apply_job.edit") }}',
                type: 'PUT',
                data:  { _token: '{{ csrf_token() }}', id: parseInt(id), status: "Rejected" },
                success: function(response, status, xhr) {
                    window.location.reload()
                }
            })
        }

    </script>

@endsection