@extends('layout.master')

@section('title', 'Chat Detail')

{{-- @section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/history.css') }}">
@endsection --}}

@section('content')

    @include('layout.userNavbar')

    <h1>Chat Detail</h1>

    <div id="chatList">
        @foreach ($chat_room->chats as $chat)
            <li>{{ $chat->is_sender_user ? $chat_room->user->name : $chat_room->company->name }}: {{ $chat->content }}</li>
        @endforeach
    </div>

    <div>
        <input id="chatValue" />
        <button id="submitButton">Submit</button>
    </div>

@endsection

@section('extra-js')

    @include('authentication.logout')

    <script>
        
        $('#submitButton').click(() => {
            const data = {
                _token: '{{ csrf_token() }}',
                chat_room_id: {{ $chat_room->id }},
                is_sender_user: 1,
                content: document.getElementById('chatValue').value
            }

            $.ajax({
                url: '{{ route('api.chat.create') }}',
                type: 'POST',
                data: data,
                success: function(response, status, xhr) {
                    $('#chatList').append(`<li>{{ $chat_room->user->name }}: ${document.getElementById('chatValue').value}</li>`)
                    document.getElementById('chatValue').value = ""
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseJSON.message)
                }
            })
        })

    </script>

@endsection