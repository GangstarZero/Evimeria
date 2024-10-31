@extends('layout.master')

@section('title', 'Company Dashboard')

@section('content')
    @include('layout.companyNavbar')
    Ini company page
    {{ $user->name }}
    {{ $user->email }}
@endsection

@section('extra-js')

    @include('authentication.logout')

@endsection
