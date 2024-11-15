@extends('layout.master')

@section('title', 'Home')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')

    @include('layout.guestNavbar')

    <div class="my-5 px-5" style="padding-left: 80px; padding-right: 80px;"> 
        <div class="row align-items-stretch">
            <div class="col-md-7 p-0">
                <img src="{{ asset('assets/web/dashboard-pic1.jpg') }}" alt="User Image" class="img-fluid h-100"
                    style="width: 100%; height: auto; border-radius: 20px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);" />
            </div>
            <div class="col-md-5 d-flex align-items-center justify-content-center">
                <div class="text-center box-container">
                    <h1>Evimeria</h1>
                    <p class="box-text">
                        Made in 2024, Evimeria was made in order to improve the condition of the workfield and give more
                        chance to people who have troubles to find a job. At Evimeria, we specialize in connecting top-tier
                        talent with the world's leading organizations. With a passion for finding the perfect match, we
                        bring together exceptional professionals and businesses in need of their expertise. Our mission is
                        to simplify the talent acquisition process by identifying and recruiting the best candidates for
                        executive and specialized roles.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="subTitle-box">
        Pick Your Jobs Now
    </div>

    <div class="job-list-container" style="margin-top: 20px;">
        <div class="job-box">
            <div class="job">
                <img src="{{ asset('assets/web/IT_Logo.png') }}" />
            </div>
            IT
        </div>
        <div class="job-box">
            <div class="job">
                <img src="{{ asset('assets/web/sales_Logo.png') }}" />
            </div>
            Admin
        </div>
        <div class="job-box">
            <div class="job">
                <img src="{{ asset('assets/web/marketing_Logo.png') }}" />
            </div>
            Marketing
        </div>
        <div class="job-box">
            <div class="job">
                <img src="{{ asset('assets/web/finance_Logo.png') }}" />
            </div>
            Finance
        </div>
        <div class="job-box">
            <div class="job">
                <img src="{{ asset('assets/web/translator_Logo.png') }}" />
            </div>
            Translator
        </div>
        <div class="job-box">
            <div class="job">
                <img src="{{ asset('assets/web/dataAnalyst_Logo.png') }}" />
            </div>
            Data Analyst
        </div>
        <div class="job-box">
            <div class="job">
                <img src="{{ asset('assets/web/teacher_Logo.png') }}" />
            </div>
            Teacher
        </div>
        <div class="job-box">
            <div class="job">
                <img src="{{ asset('assets/web/consultant_Logo.png') }}" />
            </div>
            Consultant
        </div>
    </div>

@endsection
