@extends('layout.master')

@section('title', 'Job Detail')

@section('content')

    @include('layout.userNavbar')

    <h3>Job Detail</h3>
    
    {{-- {{ $userId }} --}}

    <div>
        <img src="{{ asset($job->poster) }}" />
        <p>Company Name: {{ $job->company->name }}</p>
        <p>Job Title: {{ $job->title->name }}</p>
        <p>Job Description: {{ $job->description }}</p>
        <p>Job Poster: {{ $job->poster }}</p>
    </div>

    <div style="border: solid">
        <div>
            <input type="hidden" id="jobId" value="{{ $job->id }}" />
        </div>
        <div>
            <input type="text" id="fullName" placeholder="Fullname">
        </div>
        <div>
            <input type="text" id="phoneNumber" placeholder="Phone Number">
        </div>
        <div>
            <input type="text" id="salaryExpectation" placeholder="Salary Estimation">
        </div>
        <div>
            <input type="text" id="cv" placeholder="CV">
        </div>
        <button id="button">Submit</button>
    </div>

@endsection

@section('extra-js')

    @include('authentication.logout')

    <script>
        
        $('#button').click(function (){

            const data = {
                _token: '{{ csrf_token() }}',
                jobId: parseInt(document.getElementById('jobId').value),
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