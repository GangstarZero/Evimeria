<nav class="container-fluid navbar-light p-3" style="background-color: #8B3333;">
    <div class="d-flex justify-content-between align-items-center w-100">
        <div>
            <p class="fs-5">Logo</p>
        </div>

        <div class="d-none d-md-flex justify-content-center position-absolute start-50 translate-middle-x">
            <a class="nav-link fs-4 mx-4 text-white" href="{{ route('dashboard.home') }}">Home</a>
            <a class="nav-link fs-4 mx-4 text-white" href="{{ route('job.userIndexPage') }}">Jobs</a>
            <a class="nav-link fs-4 mx-4 text-white" href="{{ route('apply_job.historyPage') }}">History</a>
        </div>

        <div>
            <button type="submit" class="btn btn-danger" id="logout">Logout</button>
        </div>
    </div>

    <div class="d-flex d-md-none flex-column align-items-center">
        <a class="nav-link fs-4 text-white" href="">Home</a>
        <a class="nav-link fs-4 text-white" href="">Jobs</a>
        <a class="nav-link fs-4 text-white" href="">History</a>
    </div>
</nav>