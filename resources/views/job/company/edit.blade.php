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
                <img src="{{ asset($job->poster) }}" alt="Job Poster" class="job-image" />
                <div class="company-detail">
                    <p><strong>Company Name:</strong> {{ $job->company->name }}</p>
                    <p class="company-description" style="white-space: pre-line;"><strong>Company
                            Description:</strong>{{ $job->company->description }}</p>
                    <p><strong>Job Title:</strong> {{ $job->title->name }}</p>
                    <p><strong>Posted:</strong> {{ $job->created_at->format('d F Y') }}</p>
                    <div class="job-description">
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
                <input type="file" id="poster" required />
            </div>
            <div class="inputBoxContainer">
                <button id="saveButton" class="btn btn-success" data-job-id="{{ $job->id }}">Save Changes</button>
            </div>
        </div>
    </div>

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

        $(document).ready(function() {
            $('#saveButton').click(function(e) {
                e.preventDefault();

                let formData = new FormData();
                formData.append('_token', '{{ csrf_token() }}');
                formData.append('jobId', $(this).data('job-id'));
                formData.append('description', document.getElementById('description').value);
                formData.append('poster', document.getElementById('poster').files[0]);

                $.ajax({
                    url: '{{ route('company.job.api.update') }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response, status, xhr) {
                        window.location.reload()
                    }
                    error: function(xhr, status, error) {
                        Swal.fire('Error', 'An error occurred: ' + error, 'error');
                    }
                })
            })
        })

    </script>
    @include('authentication.logout')
@endsection
