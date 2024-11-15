<nav class="navbar navbar-expand-md navbar-light" style="background-color: #8B3333;">
    <div class="container-fluid">
        <div class="navbar-brand">
            <p class="mb-0" style="font-size: 1.3rem; color: white;">Evimería</p>
        </div>

        <div class="collapse navbar-collapse justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link fs-4 mx-4 text-white {{ Route::is('home') ? 'text-decoration-underline' : 'animated-link' }}"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4 mx-4 text-white {{ Route::is('job.guestIndexPage') ? 'text-decoration-underline' : 'animated-link' }}"
                        href="{{ route('job.guestIndexPage') }}">Jobs</a>
                </li>
            </ul>
        </div>

        <div>
            <a class="custom-login-btn" href="{{ route('login') }}">Login</a>
        </div>
    </div>

    <div class="d-flex d-md-none flex-column align-items-center mt-3">
        <a class="nav-link fs-4 text-white {{ Route::is('home') ? 'text-decoration-underline' : '' }}"
            href="{{ route('home') }}">Home</a>
        <a class="nav-link fs-4 text-white {{ Route::is('job.guestIndexPage') ? 'text-decoration-underline' : '' }}"
            href="{{ route('job.guestIndexPage') }}">Jobs</a>
    </div>
</nav>
