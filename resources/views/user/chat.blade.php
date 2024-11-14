@extends('layout.master')

@section('title', 'Chat')

{{-- @section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/history.css') }}">
@endsection --}}

@section('content')

    @include('layout.userNavbar')

    <h1>Chat</h1>

    @foreach ($chat_rooms as $chat_room)
        <a href="{{ route('chatDetail', ['id' => $chat_room->id]) }}">{{ $chat_room->company->name }}</a>
    @endforeach

@endsection

@section('extra-js')
    @include('authentication.logout')
@endsection