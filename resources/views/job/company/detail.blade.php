@extends('layout.master')

@section('title', 'Job Detail')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/job/detail.css') }}">
@endsection

@section('content')

    @include('layout.companyNavbar')

    <div class="detail-page">
        <div class="detail-form-container">
            <div class="company-info">
                <img src="{{ asset($job->poster) }}" />
                <div class="company-detail">
                    <p><strong>Company Name:</strong> {{ $job->company->name }}</p>
                    <p class="company-description" style="white-space: pre-line;"><strong>Company Description:</strong>{{ $job->company->description }}</p>
                    <p><strong>Job Title:</strong> {{ $job->title->name }}</p>
                    <p><strong>Posted:</strong> {{ $job->created_at->format('d F Y') }}</p>
                    <p class="job-description" style="white-space: pre-line;"><strong>Job Description:</strong>{{ $job->description }}</p>
                </div>
            </div>
            <div class="apply-job">
                @foreach ($applyJobList as $applyJob)
                    <div class="apply-job">
                        <div>
                            <p>Name: {{ $applyJob->fullName }}</p>
                            <p>Phone Number: {{ $applyJob->phoneNumber }}</p>
                            <p>Salary Expectation: {{ $applyJob->salaryExpectation }}</p>
                            <p>CV: {{ $applyJob->cv }}</p>
                        </div>
                        <div>
                            <button class="btn btn-primary"
                                onclick="acceptButtonClick({{ $applyJob->id }})">Accept</button>
                            <button class="btn btn-danger" onclick="rejectButtonClick({{ $applyJob->id }})">Reject</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

@section('extra-js')
    <script>
        const acceptButtonClick = (id) => {

            $.ajax({
                url: '{{ route('apply_job.edit') }}',
                type: 'PUT',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: parseInt(id),
                    status: "Accepted"
                },
                success: function(response, status, xhr) {
                    window.location.reload()
                },
                error: function(xhr) {
                    console.log(xhr)
                }
            })
        }

        const rejectButtonClick = (id) => {
            $.ajax({
                url: '{{ route('apply_job.edit') }}',
                type: 'PUT',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: parseInt(id),
                    status: "Rejected"
                },
                success: function(response, status, xhr) {
                    window.location.reload()
                }
            })
        }
    </script>
    @include('authentication.logout')
@endsection
