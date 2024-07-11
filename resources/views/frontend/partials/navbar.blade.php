<nav class="navbar navbar-expand-lg border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('index') }}">
            <img height="30" src="{{ asset('assets') }}/images/logo/logo-black.svg" alt="Logo">
        </a>
        @if ($showNavbarItems ?? true)
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('events.create') || Route::is('events.index') ? 'active' : '' }}"
                            {{ Route::is('events.create') || Route::is('events.index') ? 'aria-current="page"' : '' }}
                            href="{{ route('events.index') }}">Create new event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Calendar view</a>
                    </li>
                    @guest
                        <x-links.primary class="px-4 py-2 mt-2 mt-md-0 ms-md-3" href="{{ route('login') }}"
                            icon="mdi-arrow-right" iconPosition="right">Sign in</x-links.primary>
                    @endguest
                </ul>
            </div>
        @endif
    </div>
</nav>
