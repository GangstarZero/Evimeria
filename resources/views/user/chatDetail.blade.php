@extends('layout.master')

@section('title', 'Chat Detail')

{{-- @section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/history.css') }}">
@endsection --}}

@section('content')

    @include('layout.userNavbar')

    <div id="chatList" class="d-flex flex-column gap-3 p-3">
        @foreach ($chat_room->chats as $chat)
            @if ($chat->is_sender_user)
                <div class="d-flex justify-content-end">
                    <div class="px-2 py-1 rounded" style="max-width: 35%; background-color: silver;">
                        {{ $chat->content }}
                    </div>
                </div>
            @else
                <div class="d-flex justify-content-start">
                    <div class="px-2 py-1 rounded" style="max-width: 35%; background-color: silver;">
                        {{ $chat->content }}
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <div style="height: 53.33px"></div>
    <div class="input-group px-3 py-2 position-fixed bottom-0 start-0 end-0 bg-light" style="box-shadow: 0 0 5px grey;">
        <input type="text" class="form-control" id="chatInput">
        <button class="btn btn-primary" id="submitButton">Send</button>
    </div>

@endsection

@section('extra-js')

    @include('authentication.logout')

    <script>

        const pusher  = new Pusher('{{ config('broadcasting.connections.pusher.key') }}', {cluster: 'ap1'});
        const channel = pusher.subscribe('public');
        
        //Receive messages
        channel.bind('chat', function (data) {
            $('#chatList').append(`
                <div class="d-flex justify-content-start">
                    <div class="px-2 py-1 rounded" style="max-width: 35%; background-color: silver;">
                        ${ data.chat.content }
                    </div>
                </div>
            `)
        });

        $('#chatInput').keydown((e) => {
            if(e.key == 'Enter' && document.getElementById('chatInput').value != '') {
                createChat()
            }
        })
        
        $('#submitButton').click(() => {
            if(document.getElementById('chatInput').value != '') {
                createChat()
            }
        })

        const createChat = () => {
            const data = {
                _token: '{{ csrf_token() }}',
                chat_room_id: {{ $chat_room->id }},
                is_sender_user: 1,
                content: document.getElementById('chatInput').value
            }

            $.ajax({
                url: '{{ route('api.chat.create') }}',
                type: 'POST',
                headers: {
                    'X-Socket-Id': pusher.connection.socket_id
                },
                data: data,
                success: function(response, status, xhr) {
                    $('#chatList').append(`
                        <div class="d-flex justify-content-end">
                            <div class="px-2 py-1 rounded" style="max-width: 35%; background-color: silver;">
                                ${ data.content }
                            </div>
                        </div>
                    `)
                    document.getElementById('chatInput').value = ""
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseJSON.message)
                }
            })
        }

    </script>

@endsection