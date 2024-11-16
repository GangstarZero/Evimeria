@extends('layout.master')

@section('title', 'Job Detail')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/job/detail.css') }}">
@endsection

@section('content')

    @include('layout.companyNavbar')

    <form id="addJobForm">
        <div class="detail-page">
            <div class="detail-form-container">
                <div class="company-info">
                    <img src="{{ asset($job->poster) }}" alt="Job Poster" class="job-image" />
                    <div class="company-detail">
                        <p><strong>Company Name:</strong> {{ $job->company->name }}</p>
                        <p class="company-description" style="white-space: pre-line;"><strong>Company Description:</strong>{{ $job->company->description }}</p>
                        <p><strong>Job Title:</strong> {{ $job->title->name }}</p>
                        <p><strong>Posted:</strong> {{ $job->created_at->format('d F Y') }}</p>
                        <div class="job-description-box-edit">
                            <strong>Job Description:</strong>
                            <textarea class="job-description-textarea" id="description" name="job_description" style="white-space: pre-line;">{{ $job->description }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="inputBoxContainer">
                    <p><strong>Change Recruitment Poster:</strong></p>
                    <label for="poster" class="uploadPoster">
                        <label id="chooseFileText">Choose a File</label>
                        <img src="#" id="file-preview">
                    </label>
                    <input type="file" id="poster" />
                </div>
                <div class="inputBoxContainer">
                    <button type="submit" id="saveButton" class="btn btn-success" data-job-id="{{ $job->id }}">Save
                        Changes</button>
                </div>
            </div>
        </div>
    </form>

@endsection

@section('extra-js')
    <script>
        // preview image
        const input = document.getElementById('poster');
        const previewPhoto = () => {
            const file = input.files;
            if (file) {
                const fileReader = new FileReader();
                const preview = document.getElementById('file-preview');
                fileReader.onload = function(event) {
                    preview.setAttribute('src', event.target.result);
                }
                fileReader.readAsDataURL(file[0]);

                document.getElementById('chooseFileText').style.display = "none"
                document.getElementById('file-preview').style.display = "block"
            }
        }

        input.addEventListener("change", previewPhoto);

        $('#addJobForm').submit(function(e) {
            e.preventDefault();

            let formData = new FormData();
            console.log('hi');
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('jobId', $('#saveButton').data('job-id'));
            formData.append('description', document.getElementById('description').value);
            formData.append('poster', document.getElementById('poster').files[0]);

            $.ajax({
                url: '{{ route('company.job.api.update') }}',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    Swal.fire({
                        title: 'Success',
                        text: 'The data has been updated successfully!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = '{{ route('company.job.indexPage') }}';
                        }
                    });
                },
                error: function(xhr) {
                    Swal.fire({
                        title: 'Error',
                        text: 'An error occurred while updating the data. Please try again.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        window.location.reload();
                    });
                }
            })
        })
    </script>
    @include('authentication.logout')
@endsection
