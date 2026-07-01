<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Dynamic Title --}}
    <title>
        {{isset($title) ? $title . ' | Business Logo Experts' : 'Business Logo Experts'}}
    </title>

    {{-- Dynamic Meta Description --}}
    <meta name="description" content="{{ $description ?? 'We provide professional digital marketing services including SEO, PPC, and branding.' }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> -->
    <link rel="preload"
        href="{{ asset('assets/css/style.css') }}"
        as="style"
        onload="this.onload=null;this.rel='stylesheet'">

    <noscript>
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    </noscript>

    <!-- Font Awesome CDN -->
    <link rel="preload"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        as="style"
        onload="this.onload=null;this.rel='stylesheet'">

    <noscript>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </noscript>

    <link rel="preload"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        as="style"
        onload="this.onload=null;this.rel='stylesheet'">

    <noscript>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    </noscript>

    <!-- Glide CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css"> -->
    <link rel="preload"
        href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css"
        as="style"
        onload="this.onload=null;this.rel='stylesheet'">

    <noscript>
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    </noscript>

    <link rel="icon" href="{{ asset('favicon.ico') }}">
    @livewireStyles
</head>

<body>
    <!-- Header -->
    <header>
        @include('components.frontend.header')
    </header>

    <!-- Sidebar / Edit -->
    <aside>
        @include('components.frontend.edit-sidebar')
    </aside>

    <!-- Search -->
    <div>
        @include('components.frontend.search-form')
    </div>

    <!-- Sidebar -->
    <aside>
        @include('components.frontend.sidebar')
    </aside>

    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer>
        @include('components.frontend.footer')
    </footer>

    <!-- JS Scripts -->
    <script defer src="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/glide.min.js"></script>
    <script defer src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/vendor/swiper-bundle.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/script.js') }}"></script>
    <script defer src="{{ asset('assets/js/swiper-script.js') }}"></script>
    <script defer src="{{ asset('assets/js/submit-form.js') }}"></script>
    <script defer src="{{ asset('assets/js/vendor/isotope.pkgd.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/video_embedded.js') }}"></script>

    @livewireScripts
</body>

</html>