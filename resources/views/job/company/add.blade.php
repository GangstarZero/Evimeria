@extends('layout.master')

@section('title', 'Add Job')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/addJob.css') }}">
@endsection

@section('content')

    @include('layout.companyNavbar')

    <h3>Insert Job</h3>

    <div>
        <div>
            <select id="titleDdl">
                <option hidden></option>
                @foreach($titleList as $title)
                    <option value={{ $title->id }}>{{ $title->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <input type="text" id="description" placeholder="Description" />
        </div>
        <div>
            <label for="poster" class="uploadPoster">Choose a File</label>
            <input type="file" id="poster" />
            <img src="#" alt="Preview Uploaded Image" id="file-preview">
        </div>
        <button type="submit" class="btn" id="button">Insert</button>
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
                fileReader.onload = function (event) {
                    preview.setAttribute('src', event.target.result);
                }
                fileReader.readAsDataURL(file[0]);
            }
        }
        input.addEventListener("change", previewPhoto);
        




        const download = () => {
            const input = document.getElementById('poster');
            const file = input.files[0];

            if (file) {
                const url = URL.createObjectURL(file);
                const link = document.createElement('a');
                link.href = url;
                link.download = file.name;
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
                URL.revokeObjectURL(url);
            }
        }

        $(document).ready(function() {

            $("#titleDdl").select2({
                placeholder: 'Job Title',
                width: '10rem'
            })

        })

        $('#button').click(function (){

            download()

            const data = {
                _token: '{{ csrf_token() }}',
                companyId: parseInt({{ $userId }}),
                titleId: parseInt(document.getElementById('titleDdl').value),
                description: document.getElementById('description').value,
                poster: `assets/poster/${document.getElementById('poster').files[0].name}`
            }

            $.ajax({
                url: '{{ route("company.job.api.insert") }}',
                type: 'POST',
                data: data,
                success: function(response, status, xhr) {
                    window.location.reload()
                }
            })
        })

    </script>

@endsection
