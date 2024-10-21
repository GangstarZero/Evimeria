@extends('layout.master')

@section('title', 'Dashboard')

@section('content')

    @include('layout.userNavbar')

    {{-- Ini Dashboard
    {{ $user->name }}
    {{ $user->email }} --}}

    <div class="row align-items-stretch"> 
        <div class="col-md-7 p-0"> 
            <img src="{{ asset('assets/web/dashboard-pic1.jpg') }}" alt="User Image" class="img-fluid h-100"
                style="width: 100%; height: auto;" />
        </div>
        <div class="col-md-5 d-flex align-items-center justify-content-center" style="background-color: #F5F5F5; padding: 20px; height: auto;">
            <div class="text-center"> 
                <h2>Your Text Here</h2>
                <p>This is the text you want to display beside the image. You can add more content as needed.</p>
            </div>
        </div>
    </div>

@endsection

@section('extra-js')

    @include('authentication.logout')

@endsection
