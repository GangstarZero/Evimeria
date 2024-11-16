<nav class="navbar navbar-expand-md navbar-light position-fixed top-0 start-0 end-0" style="background-color: #8B3333; z-index: 3;">
    <div class="container-fluid">
        <div class="navbar-brand">
            <p class="mb-0" style="font-size: 1.3rem; color: white;">Evimería</p>
        </div>

        <div class="collapse navbar-collapse justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link fs-4 mx-4 text-white {{ Route::is('company.job.addPage') ? 'text-decoration-underline' : 'animated-link' }}"
                        href="{{ route('company.job.addPage') }}">Apply</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4 mx-4 text-white {{ Route::is('company.job.indexPage') ? 'text-decoration-underline' : 'animated-link' }}"
                        href="{{ route('company.job.indexPage') }}">Jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4 mx-4 text-white {{ Route::is('company.chat') || Route::is('company.chatDetail') ? 'text-decoration-underline' : 'animated-link' }}"
                        href="{{ route('company.chat') }}">Chat</a>
                </li>
            </ul>
        </div>

        <div>
            <button type="submit" class="btn btn-danger" id="logout">Logout</button>
        </div>
    </div>

    <div class="d-flex d-md-none flex-column align-items-center mt-3">
        <a class="nav-link fs-4 text-white {{ Route::is('company.job.addPage') ? 'text-decoration-underline' : '' }}"
            href="{{ route('company.job.addPage') }}">Apply</a>
        <a class="nav-link fs-4 text-white {{ Route::is('company.job.indexPage') ? 'text-decoration-underline' : '' }}"
            href="{{ route('company.job.indexPage') }}">Jobs</a>
        <a class="nav-link fs-4 text-white {{ Route::is('company.chat') || Route::is('company.chatDetail') ? 'text-decoration-underline' : '' }}"
            href="{{ route('company.chat') }}">Chat</a>
    </div>
</nav>
<div style="height: 66.07px"></div>