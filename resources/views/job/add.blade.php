@extends('layout.master')

@section('content')
    {{-- @include('layout.guestNavbar') --}}

    <div>
        <h3>Insert Job</h3>
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
            <input type="text" id="poster" placeholder="Poster" />
        </div>
        <button type="submit" class="btn" id="button">Insert</button>
    </div>
@endsection

@section('extra-js')
    <script>
        
        $(document).ready(function() {

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
                url: '{{ route("job.api.insert") }}',
                type: 'POST',
                data: data,
                success: function(response, status, xhr) {
                    window.location.reload()
                }
            })
        })

    </script>
@endsection
