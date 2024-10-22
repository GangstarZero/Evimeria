<nav class="container-fluid navbar-light p-3" style="background-color: #8B3333;">
    <div class="d-flex justify-content-between align-items-center w-100">
        <div>
            <p class="fs-5">Logo</p>
        </div>

        <div class="d-none d-md-flex justify-content-center position-absolute start-50 translate-middle-x">
            <a class="nav-link fs-5 mx-4 text-white" href="">Home</a>
            <a class="nav-link fs-5 mx-4 text-white" href="{{ route('company.job.addPage') }}">Apply</a>
            <a class="nav-link fs-5 mx-4 text-white" href="{{ route('company.job.indexPage') }}">Jobs</a>
            <a class="nav-link fs-5 mx-4 text-white" href="">Contact</a>
        </div>

        <div>
            <button type="submit" class="btn btn-danger" id="logout">Logout</button>
        </div>
    </div>

    <div class="d-flex d-md-none flex-column align-items-center">
        <a class="nav-link fs-5 text-white" href="">Home</a>
        <a class="nav-link fs-5 text-white" href="">Apply</a>
        <a class="nav-link fs-5 text-white" href="">Jobs</a>
        <a class="nav-link fs-5 text-white" href="">Contact</a>
    </div>
</nav>
