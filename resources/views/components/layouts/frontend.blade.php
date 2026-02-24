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

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
    <script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-script.js') }}"></script>
    <script src="{{ asset('assets/js/submit-form.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/video_embedded.js') }}"></script>

    @livewireScripts
</body>

</html>