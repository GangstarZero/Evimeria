@extends('layout.master')

@section('title', 'Chat')

{{-- @section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/history.css') }}">
@endsection --}}

@section('content')

    @include('layout.companyNavbar')

    <div class="p-5 d-flex justify-content-center">
        <div class="p-3 d-flex flex-column gap-3 rounded" style="box-shadow: 0px 0px 5px grey">
            @foreach ($chat_rooms as $chat_room)
                <div class="p-3 rounded d-flex gap-5 justify-content-between align-items-center" style="border: 1px solid #ddd;">
                    <div>Name: {{ $chat_room->user->name }}</div>
                    <div>Email: {{ $chat_room->user->email }}</div>
                    <a href="{{ route('company.chatDetail', ['id' => $chat_room->id]) }}" class="btn btn-primary">Detail</a>
                </div>
            @endforeach
        </div>
    </div>

@endsection

@section('extra-js')
    @include('authentication.logout')
@endsection