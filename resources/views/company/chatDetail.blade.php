@extends('layout.master')

@section('title', 'Chat Detail')

{{-- @section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/history.css') }}">
@endsection --}}

@section('content')

    @include('layout.companyNavbar')

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

        const pusher  = new Pusher('{{ config('broadcasting.connections.pusher.key') }}', {cluster: 'ap1'});
        const channel = pusher.subscribe('public');
        
        //Receive messages
        channel.bind('chat', function (data) {
            console.log(1)
            console.log(data)
            $('#chatList').append(`<li>{{ $chat_room->user->name }}: ${data.chat.content}</li>`)
        });
        
        $('#submitButton').click(() => {
            const data = {
                _token: '{{ csrf_token() }}',
                chat_room_id: {{ $chat_room->id }},
                is_sender_user: 0,
                content: document.getElementById('chatValue').value
            }

            $.ajax({
                url: '{{ route('api.chat.create') }}',
                type: 'POST',
                headers: {
                    'X-Socket-Id': pusher.connection.socket_id
                },
                data: data,
                success: function(response, status, xhr) {
                    $('#chatList').append(`<li>{{ $chat_room->company->name }}: ${document.getElementById('chatValue').value}</li>`)
                    document.getElementById('chatValue').value = ""
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseJSON.message)
                }
            })
        })

        // -----
    
        // $('#form').submit((e) => {
        //     e.preventDefault()
    
        //     $.ajax({
        //         url: '/api/food',
        //         type: 'POST',
        //         headers: {
        //             'X-Socket-Id': pusher.connection.socket_id
        //         },
        //         data: {
        //             _token: '{{ csrf_token() }}',
        //             name: document.getElementById('foodName').value
        //         },
        //         success: function(response, status, xhr) {
        //             $('#list').append(`<li>${document.getElementById('foodName').value}</li>`)
        //             document.getElementById('foodName').value = ""
        //         },
        //         error: function(xhr) {
        //             console.log(xhr)
        //         }
        //     })
        // })

    </script>

@endsection