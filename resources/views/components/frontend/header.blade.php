<div class="navbar-wrapper">
    <nav class="navbar navbar-expand-xl">
        <div class="navbar-container">
            
            <!-- Logo -->
            <div class="logo-container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/image/marko-logo.png') }}" class="site-logo img-fluid" width="150" height="50" alt="Marko Logo">
                </a>
            </div>

            <!-- Mobile Toggler -->
            <button class="navbar-toggler nav-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <!-- Home -->
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>

                    <!-- About -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>

                    <!-- Services Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Services <i class="fa-solid fa-angle-down accent-color"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('service') }}">Service</a></li>
                            <li><a class="dropdown-item" href="{{ route('single-service') }}">Single Services</a></li>
                        </ul>
                    </li>

                    <!-- Pages Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Pages <i class="fa-solid fa-angle-down accent-color"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('case-studies') }}">Case Studies</a></li>
                            <li><a class="dropdown-item" href="{{ route('team') }}">Our Team</a></li>
                            <li><a class="dropdown-item" href="{{ route('partnership') }}">Partnership</a></li>
                            <li><a class="dropdown-item" href="{{ route('pricing') }}">Pricing Plan</a></li>
                            <li><a class="dropdown-item" href="{{ route('testimonial') }}">Testimonial</a></li>
                            <li><a class="dropdown-item" href="{{ route('faq') }}">FAQs</a></li>
                        </ul>
                    </li>

                    <!-- Archive Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Archive <i class="fa-solid fa-angle-down accent-color"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('blog') }}">Blog</a></li>
                            <li><a class="dropdown-item" href="{{ route('single-post') }}">Single Post</a></li>
                        </ul>
                    </li>

                    <!-- Contact -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>

            <!-- Navbar Actions -->
            <div class="navbar-action-container">
                <!-- Theme Switch -->
                <div class="navbar-action-button">
                    <button id="themeSwitch" class="themeswitch" aria-label="Toggle Theme">
                        <i id="themeIcon" class="fas fa-moon"></i>
                    </button>                      
                </div>

                <!-- Contact Icon -->
                <div class="navbar-icon-wrapper">
                    <div class="icon-circle">
                        <i class="fa-solid fa-phone-volume"></i>
                    </div>
                    <h6>+1 (62) 987 7543</h6>
                </div>
            </div>
        </div>
    </nav>
</div>