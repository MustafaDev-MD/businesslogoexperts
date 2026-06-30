<div>
    <div class="content-overlay">
        <div class="content-edit-sidebar">
            <div class="sidebar-header">
                <div></div>
                <div class="close-btn-second">
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
            <div class="content">
                <span>Click on the Edit Content button to edit/add the content.</span>
            </div>
        </div>
    </div>
</div>

<div>
    <div class="sidebar-overlay"></div>
    <div class="sidebar">
        <div class="sidebar-header">
            <div class="logo">
                <img src="{{ asset('assets/image/logo.png') }}" class="site-logo img-fluid logo" alt="Logo">
            </div>
            <!-- <button class="close-btn"><span>X</span></button> -->
            <button
                type="button"
                class="close-btn"
                aria-label="Close sidebar">
                <i class="fa-solid fa-xmark" aria-hidden="true"></i>
            </button>
        </div>
        <ul class="menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li class="sidebar-dropdown">
                <div class="dropdown-header">
                    <a href="{{ route('services') }}">Services</a>
                    <!-- <button class="sidebar-dropdown-btn"><i class="fa-solid fa-angle-down"></i></button> -->
                    <button
                        type="button"
                        class="sidebar-dropdown-btn"
                        aria-label="Expand Services menu"
                        aria-expanded="false">
                        <i class="fa-solid fa-angle-down" aria-hidden="true"></i>
                    </button>
                </div>
                <ul class="sidebar-dropdown-menu">
                    @foreach(config('custom_services') as $service)
                    @if(isset($service['slug']) && isset($service['name']))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('single-service', ['slug' => $service['slug']]) }}">
                            {{ $service['name'] }}
                        </a>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </li>
            <li class="sidebar-dropdown">
                <div class="dropdown-header">
                    <a href="{{ route('blog') }}">Blog</a>
                    <!-- <button class="sidebar-dropdown-btn"><i class="fa-solid fa-angle-down"></i></button> -->
                    <button
                        type="button"
                        class="sidebar-dropdown-btn"
                        aria-label="Expand Blog menu"
                        aria-expanded="false">
                        <i class="fa-solid fa-angle-down" aria-hidden="true"></i>
                    </button>
                </div>
                <ul class="sidebar-dropdown-menu">
                    @foreach(config('blog_posts') as $item)
                    <li>
                        <a href="{{ route('single-post', $item['slug']) }}">
                            {{ $item['title'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </li>
            <li class="below-dropdown"><a href="{{ route('contact') }}">Contact Us</a></li>
        </ul>
    </div>
</div>