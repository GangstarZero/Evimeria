<nav class="container-fluid navbar-light bg-light p-3">
    <div class="d-flex justify-content-between align-items-center w-100">
        <div>
            <p class="fs-5">Logo</p>
        </div>

        <div class="d-none d-md-flex justify-content-center position-absolute start-50 translate-middle-x">
            <a class="nav-link fs-5 mx-4" href="{{ route('home') }}">Home</a>
            <a class="nav-link fs-5 mx-4" href="">Apply</a>
            <a class="nav-link fs-5 mx-4" href="{{ route('job.indexPage') }}">Jobs</a>
            <a class="nav-link fs-5 mx-4" href="">Contact</a>
        </div>

        <div>
            <a class="btn btn-primary fs-5" href="{{ route('login') }}">Login</a>
        </div>
    </div>

    <div class="d-flex d-md-none flex-column align-items-center">
        <a class="nav-link fs-5" href="{{ route('home') }}">Home</a>
        <a class="nav-link fs-5" href="">Apply</a>
        <a class="nav-link fs-5" href="">Jobs</a>
        <a class="nav-link fs-5" href="">Contact</a>
    </div>
</nav>
