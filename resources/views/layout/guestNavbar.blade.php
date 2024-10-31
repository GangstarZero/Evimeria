<nav class="container-fluid navbar-light p-3" style="background-color: #8B3333;">
    <div class="d-flex justify-content-between align-items-center w-100">
        <div>
            <p class="" style="font-size: 1.3rem; color: white;">Evimería</p>
        </div>

        <div class="d-none d-md-flex justify-content-center position-absolute start-50 translate-middle-x" style="margin-bottom: 3px">
            <a class="nav-link fs-4 mx-4 text-white" href="{{ route('home') }}"
                style="{{ Route::is('home') ? 'text-decoration: underline;' : '' }}">Home</a>
            <a class="nav-link fs-4 mx-4 text-white" href="{{ route('job.guestIndexPage') }}"
                style="{{ Route::is('job.guestIndexPage') ? 'text-decoration: underline;' : '' }}">Jobs</a>
        </div>

        <div>
            <a class="btn btn-primary fs-5" href="{{ route('login') }}">Login</a>
        </div>
    </div>

    <div class="d-flex d-md-none flex-column align-items-center">
        <a class="nav-link fs-4 text-white" href="{{ route('home') }}">Home</a>
        <a class="nav-link fs-4 text-white" href="">Jobs</a>
    </div>
</nav>
