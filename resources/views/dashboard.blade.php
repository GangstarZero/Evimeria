@extends('layout.master')

@section('content')

    @include('layout.userNavbar')
    
    Ini Dashboard
    {{ $user->name }}
    {{ $user->email }}
@endsection
