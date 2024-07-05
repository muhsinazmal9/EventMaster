<nav class="navbar navbar-expand-lg border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('index') }}">
            <img height="30" src="{{ asset('assets') }}/images/logo/logo-black.svg" alt="Logo">
        </a>
        @if ($showNavbarItems ?? true)
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Create new event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Calendar view</a>
                    </li>
                    <a href="{{ route('login') }}"
                        class="btn px-4 py-2 bg-black text-white rounded-0 mt-2 mt-md-0 ms-md-3">Sign in
                        <span class="iconify" data-icon="mdi-arrow-right"></span></a>
                </ul>
            </div>
        @endif
    </div>
</nav>
