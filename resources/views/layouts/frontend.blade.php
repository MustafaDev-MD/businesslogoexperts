<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Digital Marketing Agency')</title>

    <!-- CSS -->
    @vite('resources/css/style.css')

    @livewireStyles
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
</head>
<body>
    <!-- Header -->
    <header>
        @include('components.header') <!-- header component -->
    </header>

    <!-- Sidebar / Edit -->
    <aside>
        @include('components.edit-sidebar')
    </aside>

    <!-- Search -->
    <div>
        @include('components.search-form')
    </div>

    <!-- Sidebar -->
    <aside>
        @include('components.sidebar')
    </aside>

    <!-- Main Content -->
    <main>
        {{ $slot }}  <!-- Livewire component content will go here -->
    </main>

    <!-- Footer -->
    <footer>
        @include('components.footer')
    </footer>

    <!-- JS Scripts -->
    @vite([
        'resources/js/vendor/jquery.min.js',
        'resources/js/vendor/bootstrap.bundle.min.js',
        'resources/js/vendor/swiper-bundle.min.js',
        'resources/js/script.js',
        'resources/js/swiper-script.js',
        'resources/js/submit-form.js',
        'resources/js/vendor/isotope.pkgd.min.js',
        'resources/js/video_embedded.js'
    ])

    @livewireScripts
</body>
</html>