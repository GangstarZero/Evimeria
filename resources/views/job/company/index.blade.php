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
                    <a href="{{ route('job.guestDetailPage', ['id' => $job->id]) }}" class="job">
                        <img src="{{ asset($job->poster) }}" />
                    </a>
                    {{-- {{ $job->company->name }} --}}
                    <button class="btn btn-danger" onclick="deleteButtonClick({{ $job->id }})">Delete</button>
                </div>
            @endforeach
        </div>
    </div>

@endsection

@section('extra-js')

    @include('authentication.logout')

    @include('job.company.searchJob')

    <script>
        const deleteButtonClick = (id) => {
            Swal.fire({
                title: 'Are you sure?',
                text: "Do you really want to delete this job? This action can't be undone.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(`/api/job/${id}`, {
                            method: 'DELETE',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            }
                        })
                        .then(response => {
                            if (response.ok) {
                                Swal.fire('Deleted!', 'The job has been deleted.', 'success')
                                    .then(() => window.location.reload());
                            } else {
                                Swal.fire('Error', 'Failed to delete the job. Please try again.', 'error');
                            }
                        })
                        .catch(error => {
                            Swal.fire('Error', 'An error occurred: ' + error.message, 'error');
                        });
                }
            });
        };
    </script>
    @include('authentication.logout')

@endsection
