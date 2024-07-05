<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EventMaster</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('assets') }}/images/logo/favicon.png">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:wght@100..900&display=swap"
        rel="stylesheet">

    {{-- Icons --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">

    @stack('styles')
</head>

<body>

    <header>
        @include('frontend.partials.navbar')
    </header>

    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="position-fixed bottom-0 w-100 py-4 text-center text-sm bg-white">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </footer>

    {{-- Icons --}}
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    {{-- Scripts --}}
    <script src="{{ asset('assets') }}/js/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/js/script.js"></script>

    @stack('scripts')
</body>

</html>
