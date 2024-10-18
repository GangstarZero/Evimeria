@extends('layout.master')

@section('title', 'Dashboard')

@section('content')

    @include('layout.userNavbar')

    Ini Dashboard
    {{ $user->name }}
    {{ $user->email }}
@endsection

@section('extra-js')
    
    @include('authentication.logout')

@endsection