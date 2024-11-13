<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #8B3333;">
    <div class="container-fluid">
        <div class="navbar-brand">
            <p class="mb-0" style="font-size: 1.3rem; color: white;">Evimería</p>
        </div>

        <div class="collapse navbar-collapse justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link fs-4 mx-4 text-white {{ Route::is('dashboard.home') ? 'text-decoration-underline' : '' }}"
                        href="{{ route('dashboard.home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4 mx-4 text-white {{ Route::is('job.userIndexPage') ? 'text-decoration-underline' : '' }}"
                        href="{{ route('job.userIndexPage') }}">Jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4 mx-4 text-white {{ Route::is('apply_job.historyPage') ? 'text-decoration-underline' : '' }}"
                        href="{{ route('apply_job.historyPage') }}">History</a>
                </li>
            </ul>
        </div>

        <div>
            <button type="submit" class="btn btn-danger fs-5" id="logout">Logout</button>
        </div>
    </div>
</nav>
