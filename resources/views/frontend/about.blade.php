<x-layouts.frontend
    title="About Us"
    description="Learn about Business Logo Experts, our mission, values, and the team behind our innovative digital marketing strategies that help businesses grow.">

    <!-- Section Banner -->
    <x-banner
        title="About Us"
        current="About Us" />

    <!-- Section About Us -->
    <div class="section">
        <div class="hero-container">
            <div class="d-flex flex-column flex-xl-row gspace-5">
                <div class="about-img-layout">
                    <div class="image-container about-img">
                        <img src="{{ asset('assets/image/dummy-img-600x400.jpg') }}" alt="About Us Image" class="img-fluid animate-box animated animate__animated" data-animate="animate__fadeInUp">
                        <div class="about-layout">
                            <div class="d-flex flex-column">
                                <div class="card-about-wrapper">
                                    <div class="card card-about animate-box animated animate__animated" data-animate="animate__fadeInDown">
                                        <div class="d-flex flex-row align-items-center">
                                            <span class="counter" data-target="21"></span>
                                            <span class="counter-detail">+</span>
                                        </div>
                                        <h6>Years of Experience on Digital Marketing Services</h6>
                                    </div>
                                </div>
                                <div class="about-spacer"></div>
                            </div>
                            <div class="about-spacer"></div>
                        </div>
                    </div>
                </div>

                <div class="about-title">
                    <div class="d-flex flex-column gspace-2">
                        <div class="sub-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">
                            <i class="fa-regular fa-circle-dot"></i>
                            <span>About Us</span>
                        </div>
                        <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">Who We Are & What Drives Us</h2>
                        <p>At Marko, we specialize in crafting innovative digital marketing strategies that drive real business growth. Our about ensures your brand stays ahead in the competitive digital landscape.</p>
                        <p>Get to know the passionate team behind the strategies, the values that guide us, and the mission that fuels our growth.</p>

                        <div class="d-flex flex-column flex-md-row gspace-1 gspace-md-5">
                            <div class="about-list">
                                <ul class="check-list">
                                    <li><a href="{{ route('single-service') }}">PPC & Paid Ads</a></li>
                                    <li><a href="{{ route('single-service') }}">Brand Strategy</a></li>
                                    <li><a href="{{ route('single-service') }}">Conversion Optimization</a></li>
                                </ul>
                            </div>
                            <div class="about-list">
                                <ul class="check-list">
                                    <li><a href="{{ route('single-service') }}">Performance Marketing</a></li>
                                    <li><a href="{{ route('single-service') }}">Social Media Growth</a></li>
                                    <li><a href="{{ route('single-service') }}">Content Marketing</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Partner -->
    @include('components.sections.partner')

    <!-- Section Why Choose Us -->
    <div class="section">
        <div class="hero-container">
            <div class="d-flex flex-column flex-xl-row gspace-5">
                <div class="chooseus-card-container">
                    <div class="d-flex flex-column gspace-2">
                        <div class="card card-chooseus animate-box animated fast animate__animated" data-animate="animate__fadeInLeft">
                            <div class="chooseus-icon-wrapper">
                                <div class="chooseus-spacer above"></div>
                                <div class="chooseus-icon-layout">
                                    <div class="chooseus-icon">
                                        <img src="{{ asset('assets/image/Icon-2.png') }}" alt="Why Choose Us Icon" class="img-fluid">
                                    </div>
                                </div>
                                <div class="chooseus-spacer below"></div>
                            </div>
                            <div class="chooseus-content">
                                <h4 class="chooseus-title">Innovation & Integrity</h4>
                                <p>Every decision is backed by real-time analytics for maximum impact lorem ipsum dolor sit consectetur adipiscing elit ut elit tellus luctus nec.</p>
                                <div class="link-wrapper">
                                    <a href="{{ route('single-service') }}">Read More</a>
                                    <i class="fa-solid fa-arrow-circle-right accent-color"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card card-chooseus animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                            <div class="chooseus-icon-wrapper">
                                <div class="chooseus-spacer above"></div>
                                <div class="chooseus-icon-layout">
                                    <div class="chooseus-icon">
                                        <img src="{{ asset('assets/image/icon-1.png') }}" alt="Why Choose Us Icon" class="img-fluid">
                                    </div>
                                </div>
                                <div class="chooseus-spacer below"></div>
                            </div>
                            <div class="chooseus-content">
                                <h4 class="chooseus-title">Collaboration</h4>
                                <p>Cutting-edge marketing techniques to keep you ahead of the competition lorem ipsum dolor sit awsa consectetur adipiscing elit ut elit.</p>
                                <div class="link-wrapper">
                                    <a href="{{ route('single-service') }}">Read More</a>
                                    <i class="fa-solid fa-arrow-circle-right accent-color"></i>
                                </div>
                            </div>
                        </div>

                        <div class="card card-chooseus animate-box animated slow animate__animated" data-animate="animate__fadeInLeft">
                            <div class="chooseus-icon-wrapper">
                                <div class="chooseus-spacer above"></div>
                                <div class="chooseus-icon-layout">
                                    <div class="chooseus-icon">
                                        <img src="{{ asset('assets/image/Icon-3.png') }}" alt="Why Choose Us Icon" class="img-fluid">
                                    </div>
                                </div>
                                <div class="chooseus-spacer below"></div>
                            </div>
                            <div class="chooseus-content">
                                <h4 class="chooseus-title">Result Driven</h4>
                                <p>Clear insights and performance tracking, so you always know your ROI lorem ipsum dolo consectetur adipiscing elit ut elit tellus luctus nec.</p>
                                <div class="link-wrapper">
                                    <a href="{{ route('single-service') }}">Read More</a>
                                    <i class="fa-solid fa-arrow-circle-right accent-color"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="chooseus-content-container">
                    <div class="d-flex flex-column gspace-5">
                        <div class="d-flex flex-column gspace-2">
                            <div class="sub-heading animate-box animated animate__animated" data-animate="animate__fadeInDown">
                                <i class="fa-regular fa-circle-dot"></i>
                                <span>Our Core Values</span>
                            </div>
                            <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInDown">The Principles That Define Us</h2>
                            <p class="mb-0 animate-box animated animate__animated" data-animate="animate__fadeInDown">In the fast-paced digital world, choosing the right marketing partner makes all the difference. At Marko, we don’t just create campaigns—we craft strategies that deliver measurable success.</p>
                        </div>
                        <div class="image-container">
                            <img src="{{ asset('assets/image/dummy-img-600x400.jpg') }}" alt="Why Choose Us Image" class="chooseus-img">
                            <div class="card-chooseus-cta-layout">
                                <div class="chooseus-cta-spacer"></div>
                                <div class="d-flex flex-column align-items-end">
                                    <div class="chooseus-cta-spacer"></div>
                                    <div class="card-chooseus-cta-wrapper">
                                        <div class="card card-chooseus-cta animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                            <h5>Partner with Marko & take your brand to the next level.</h5>
                                            <div class="link-wrapper">
                                                <a href="{{ route('contact') }}">Let's Talk Strategy</a>
                                                <i class="fa-solid fa-circle-arrow-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Modal Video -->
    <div class="section p-0">
        <div id="modal-overlay" class="modal-overlay">
            <span class="modal-close"><i class="fa-solid fa-xmark"></i></span>
            <div class="video-modal">
                <iframe id="modal-video-frame" class="ifr-video" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!-- Section Digital Process -->
    @include('components.sections.digital-process')

    <!-- Section Testimonial -->
    @include('components.sections.testimonial')

</x-layouts.frontend>