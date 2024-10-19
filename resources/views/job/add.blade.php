@extends('layout.master')

@section('content')
    {{-- @include('layout.guestNavbar') --}}

    <div>
        <select id="titleDdl">
            <option hidden></option>
        </select>
        <input type="text" id="description" placeholder="description" />
        <input type="text" id="poster" placeholder="poster" />
        <button type="submit" class="btn" id="button">Insert</button>
    </div>
@endsection

@section('extra-js')
    <script>
        
        $(document).ready(function() {

            $.ajax({
                url: '{{ route("title.getAll") }}',
                type: 'GET',
                success: function(response) {
                    response.forEach(title => {
                        $("#titleDdl").append(`<option value=${title.id}>${title.name}</option>`)    
                    });
                }
            })

            $("#titleDdl").select2({
                placeholder: 'Job Title',
                width: '10rem'
            })

        })

        $('#button').click(function (){

            const data = {
                _token: '{{ csrf_token() }}',
                companyId: 1,
                titleId: parseInt(document.getElementById('titleDdl').value),
                description: document.getElementById('description').value,
                poster: document.getElementById('poster').value
            }

            $.ajax({
                url: '{{ route("job.api.add") }}',
                type: 'POST',
                data: data,
                success: function(response, status, xhr) {
                    window.location.reload()
                }
            })
        })

    </script>
@endsection
