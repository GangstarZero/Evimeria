@extends('layout.master')

@section('content')
    {{-- @include('layout.guestNavbar') --}}

    <div>
        <h3>Job List</h3>

        <form>
            <input type="search" id="searchBox" placeholder="Search" name="query" value="{{ $query }}">
            <button type="submit">Search</button>
        </form>

        @foreach($jobList as $job)
            <div>
                <a href="{{ route('job.detailPage', ['id' => $job->id]) }}" style="display: block; border: solid black">
                    <p>{{ $job->title->name }}</p>
                    <p>{{ $job->description }}</p>
                    <p>{{ $job->created_at }}</p>
                </a>
                <button onclick="deleteButtonClick({{ $job->id }})">Delete</button>
            </div>
        @endforeach
    </div>
@endsection

@section('extra-js')
    <script>

        const deleteButtonClick = (id) => {
            $.ajax({
                url: `api/job/${id}`,
                type: 'DELETE',
                data:  { _token: '{{ csrf_token() }}' },
                success: function(response, status, xhr) {
                    window.location.reload()
                }
            })   
        }

        $('#searchBar').submit(function (e){
            const query = document.getElementById('searchBox').value
            console.log(query)
            window.location.href = 'job?query=' + escape(query)
        })

    </script>
@endsection
