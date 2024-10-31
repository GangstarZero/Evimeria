<nav class="container-fluid navbar-light p-3" style="background-color: #8B3333;">
    <div class="d-flex justify-content-between align-items-center w-100">
        <div>
            <p class="" style="font-size: 1.3rem; color: white;">Evimería</p>
        </div>

        <div class="d-none d-md-flex justify-content-center position-absolute start-50 translate-middle-x">
            <a class="nav-link fs-4 mx-4 text-white" href="{{ route('company.job.addPage') }}"
                style="{{ Route::is('company.job.addPage') ? 'text-decoration: underline;' : '' }}">Apply</a>
            <a class="nav-link fs-4 mx-4 text-white" href="{{ route('company.job.indexPage') }}"
                style="{{ Route::is('company.job.indexPage') ? 'text-decoration: underline;' : '' }}">Jobs</a>
        </div>

        <div>
            <button type="submit" class="btn btn-danger" id="logout">Logout</button>
        </div>
    </div>

    <div class="d-flex d-md-none flex-column align-items-center">
        <a class="nav-link fs-4 text-white" href="">Home</a>
        <a class="nav-link fs-4 text-white" href="">Apply</a>
        <a class="nav-link fs-4 text-white" href="">Jobs</a>
    </div>
</nav>
