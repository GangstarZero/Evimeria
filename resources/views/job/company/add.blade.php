@extends('layout.master')

@section('title', 'Add Job')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/job/add.css') }}">
@endsection

@section('content')

    @include('layout.companyNavbar')

    <div class="addPage">
        <form id="addJobForm">
            <h3>Insert Job</h3>
            <div class="inputBoxContainer">
                <select id="titleDdl" required>
                    <option hidden></option>
                    @foreach ($titleList as $title)
                        <option value={{ $title->id }}>{{ $title->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="inputBoxContainer">
                <input type="text" id="description" placeholder="Description" required />
            </div>
            <div class="inputBoxContainer">
                <label for="poster" class="uploadPoster">
                    <label id="chooseFileText">Choose a File</label>
                    <img src="#" id="file-preview">
                </label>
                <input type="file" id="poster" required />
                {{-- <img src="#" alt="Preview Uploaded Image" id="file-preview"> --}}
            </div>
            <button type="submit" id="insertButton" class="btn btn-primary">Insert</button>
        </form>
    </div>


    {{-- <input type="file" id="fileInput">
    <button id="downloadBtn">Download File</button> --}}

@endsection

@section('extra-js')

    @include('authentication.logout')

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

            $("#titleDdl").select2({
                placeholder: 'Job Title',
                width: '100%',
                selectionCssClass: 'inputBox'
            })
        })

        $('#addJobForm').submit(function(e) {
            e.preventDefault()

            let formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('companyId', parseInt({{ $userId }}));
            formData.append('titleId', parseInt(document.getElementById('titleDdl').value));
            formData.append('description', document.getElementById('description').value);
            formData.append('poster', document.getElementById('poster').files[0]);

            $.ajax({
                url: '{{ route('company.job.api.insert') }}',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response, status, xhr) {
                    window.location.reload()
                }
            })
        })
    </script>

@endsection
