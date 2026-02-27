<x-layouts.frontend
    title="Best Digital Marketing Agency"
    description="We help businesses grow with SEO, social media marketing, PPC campaigns, and branding solutions.">

    <!-- Section Banner -->
    <div class="section-banner">
        <div class="banner-video-container keep-dark animate-box animated animate__animated" data-animate="animate__fadeInUp">
            <!-- Local video background -->
            <div id="banner-video-background">

                <video autoplay muted loop playsinline id="banner-video" src="{{ asset('assets/image/Sequence-01.mp4') }} "></video>
            </div>
            <div class="hero-container position-relative">
                <div class="d-flex flex-column gspace-2">
                    <h1 class="title-heading-banner animate-box animated animate__animated" data-animate="animate__fadeInLeft">Amplify Your Brand with Cutting-Edge Digital Marketing</h1>
                    <div class="banner-heading">
                        <div class="banner-video-content order-xl-1 order-2 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                            <div class="d-flex flex-column flex-xl-row text-xl-start text-center align-items-center gspace-5">
                                <button class="request-loader" data-video="https://www.youtube.com/embed/VhBl3dHT5SY?autoplay=1"><i class="fa-solid fa-play"></i></button>
                                <p>
                                    Watch our video reviews and see how businesses achieve success with Marko's digital marketing solutions.
                                </p>
                            </div>
                        </div>
                        <div class="banner-content order-xl-2 order-1  animate-box animated animate__animated" data-animate="animate__fadeInRight">
                            <p>Marko empowers businesses to grow online with data driven digital marketing, innovative branding, and performance focused strategies trusted by top brands lorem ipsum dolor sit amet consectetur.</p>
                            <div class="d-flex flex-md-row flex-column justify-content-center justify-content-xl-start align-self-center align-self-xl-start gspace-3">
                                <a href="{{ route('about') }}" class="btn btn-accent">
                                    <div class="btn-title">
                                        <span>Get Started</span>
                                    </div>
                                    <div class="icon-circle">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </a>
                                <div class="banner-reviewer">
                                    <div class="d-flex flex-row align-items-center">
                                        <img src="{{ asset('assets/image/dummy-img-400x400.jpg') }}" alt="Reviewer" class="avatar">
                                        <img src="{{ asset('assets/image/dummy-img-400x400.jpg') }}" alt="Reviewer" class="avatar">
                                        <img src="{{ asset('assets/image/dummy-img-400x400.jpg') }}" alt="Reviewer" class="avatar">
                                    </div>
                                    <div class="detail">
                                        <span>2.7k Positive</span>
                                        <span>Reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Expertise -->
    <div class="section">
        <div class="hero-container">
            <div class="d-flex flex-column flex-xl-row gspace-5">
                <div class="expertise-img-layout">
                    <div class="image-container expertise-img">
                        <img src="{{ asset('assets/image/dummy-img-600x400.jpg') }}" alt="Expertise Image" class="img-fluid  animate-box animated animate__animated" data-animate="animate__fadeInUp">
                        <div class="expertise-layout">
                            <div class="d-flex flex-column">
                                <div class="card-expertise-wrapper">
                                    <div class="card card-expertise  animate-box animated animate__animated" data-animate="animate__fadeInDown">
                                        <h4>Ready to Elevate Your Digital Presence?</h4>
                                        <p>Let's create a custom strategy that fits your business goals.</p>
                                        <div class="d-flex align-items-center flex-row gspace-2 expertise-link">
                                            <a href="{{ route('contact') }}">Get Free Consultation</a>
                                            <i class="fa-solid fa-circle-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="expertise-spacer"></div>
                            </div>
                            <div class="expertise-spacer"></div>
                        </div>
                    </div>
                </div>
                <div class="expertise-title">
                    <div class="sub-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">
                        <i class="fa-regular fa-circle-dot"></i>
                        <span>Our Expertise</span>
                    </div>
                    <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">Data Driven Strategies, Measurable Results</h2>
                    <p>At Marko, we specialize in crafting innovative digital marketing strategies that drive real business growth. Our expertise ensures your brand stays ahead in the competitive digital landscape.</p>
                    <div class="d-flex flex-column flex-md-row gspace-2">
                        <div class="expertise-list">
                            <h5>What We Do Best</h5>
                            <!-- @php
                            $services = [
                            ['name'=>'Performance Marketing','slug'=>'performance-marketing'],
                            ['name'=>'Social Media Growth','slug'=>'social-media-growth'],
                            ['name'=>'Content Marketing','slug'=>'content-marketing'],
                            ['name'=>'PPC & Paid Ads','slug'=>'ppc-paid-ads'],
                            ['name'=>'Brand Strategy','slug'=>'brand-strategy'],
                            ['name'=>'Conversion Optimization','slug'=>'conversion-optimization'],
                            ];
                            @endphp
                            <ul class="check-list">
                                @foreach($services as $service)
                                <li><a href="{{ route('single-service', ['slug' => $service['slug']]) }}">{{ $service['name'] }}</a></li>
                                @endforeach
                            </ul> -->
                            <ul class="check-list">
                                @foreach(config('custom_services') as $service)
                                @if(isset($service['slug']) && isset($service['name']))
                                <li>
                                    <a href="{{ route('single-service', ['slug' => $service['slug']]) }}">
                                        {{ $service['name'] }}
                                    </a>
                                </li>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="card card-expertise card-expertise-counter animate-box animated animate__animated" data-animate="animate__fadeInUp">
                            <div class="d-flex flex-row gspace-2 align-items-center">
                                <div class="d-flex flex-row align-items-center">
                                    <span class="counter" data-target="21"></span>
                                    <span class="counter-detail">+</span>
                                </div>
                                <h6>Years of Experience on Digital Marketing Services</h6>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit in ex ligula varius at rutrum et finibus sed felis qisque.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Video -->
    <div class="section p-0">
        <div id="modal-overlay" class="modal-overlay">
            <span class="my-close"><i class="fa-solid fa-xmark"></i></span>
            <div class="my-modal">
                <iframe id="my-video-frame" allowfullscreen></iframe>
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
                        <!-- Cards Repeated, links updated -->
                        @foreach([['icon'=>'Icon-2.png','title'=>'Data-Driven Approach','desc'=>'Every decision is backed by real-time analytics for maximum impact.'],
                        ['icon'=>'icon-1.png','title'=>'Creative & Innovative','desc'=>'Cutting-edge marketing techniques to keep you ahead of the competition.'],
                        ['icon'=>'Icon-3.png','title'=>'Transparent Reporting','desc'=>'Clear insights and performance tracking, so you always know your ROI.']] as $item)
                        <div class="card card-chooseus animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                            <div class="chooseus-icon-wrapper">
                                <div class="chooseus-spacer above"></div>
                                <div class="chooseus-icon-layout">
                                    <div class="chooseus-icon">
                                        <img src="{{ asset('assets/image/'.$item['icon']) }}" alt="{{ $item['title'] }} Icon" class="img-fluid">
                                    </div>
                                </div>
                                <div class="chooseus-spacer below"></div>
                            </div>
                            <div class="chooseus-content">
                                <h4 class="chooseus-title">{{ $item['title'] }}</h4>
                                <p>{{ $item['desc'] }}</p>
                                <div class="link-wrapper">
                                    <a href="{{ route('about') }}">Read More</a>
                                    <i class="fa-solid fa-arrow-circle-right accent-color"></i>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="chooseus-content-container">
                    <div class="d-flex flex-column gspace-5">
                        <div class="d-flex flex-column gspace-2">
                            <div class="sub-heading  animate-box animated animate__animated" data-animate="animate__fadeInDown">
                                <i class="fa-regular fa-circle-dot"></i>
                                <span>Why Choose Marko</span>
                            </div>
                            <h2 class="title-heading  animate-box animated animate__animated" data-animate="animate__fadeInDown">Your Success is Our Mission</h2>
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

    <!-- Section Service -->
    <div class="section">
        <div class="hero-container">
            <div class="d-flex flex-column justify-content-center text-center gspace-5">
                <div class="d-flex flex-column justify-content-center text-center gspace-2">
                    <div class="sub-heading align-self-center animate-box animated animate__animated" data-animate="animate__fadeInDown">
                        <i class="fa-regular fa-circle-dot"></i>
                        <span>Our Core Services</span>
                    </div>
                    <h2 class="title-heading heading-container heading-container-medium animate-box animated animate__animated" data-animate="animate__fadeInDown">Digital Solutions That Drive Real Results</h2>
                </div>

                <div class="card-service-wrapper">
                    <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1 grid-spacer-2">
                        @foreach($services as $service)
                        <div class="col">
                            <div class="card card-service animate-box animated slow animate__animated" data-animate="animate__fadeInLeft">
                                <div class="d-flex flex-row justify-content-between gspace-2 gspace-md-3 align-items-center">
                                    <div>
                                        <div class="service-icon-wrapper">
                                            <div class="service-icon">
                                                <img src="{{ asset('assets/image/Icon-7.png') }}" alt="Service Icon" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-title">
                                        <h4>{{ $service['name'] }}</h4>
                                    </div>
                                </div>
                                <p>Build brand awareness & engage your audience effectively lorem ipsum dolor sit amet consectetur adip.</p>
                                <a href="{{ route('single-service', ['slug'=>$service['slug']]) }}" class="btn btn-accent">
                                    <div class="btn-title"><span>View Details</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="service-link-footer">
                    <p>Need a custom solution? Let's create a strategy tailored for your business. <a href="{{ route('contact') }}">Get a Free Strategy Call</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Case Studies -->
    @include('components.sections.case-studies')

    <!-- Section Testimonial -->
    @include('components.sections.testimonial')

    <!-- Section Digital Process -->
    @include('components.sections.digital-process')

    <!-- Section Pricing -->
    <div class="section">
        <div class="hero-container">
            <div class="d-flex flex-column justify-content-center text-center gspace-5">
                <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                    <div class="sub-heading align-self-center">
                        <i class="fa-regular fa-circle-dot"></i>
                        <span>Our Core Services</span>
                    </div>
                    <h2 class="title-heading heading-container heading-container-short">Flexible Pricing Plans<br> for Every Business</h2>
                </div>
                <div class="row row-cols-xl-3 row-cols-1 grid-spacer-2">
                    <div class="col">
                        <div class="pricing-container">
                            <div class="card card-pricing-title animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                                <div class="spacer"></div>
                                <div class="content">
                                    <h3 class="title-heading">Let's Find the Right Strategy for You!</h3>
                                    <div class="link-wrapper">
                                        <a href=".contact.html">Book a Free Consultation</a>
                                        <i class="fa-solid fa-arrow-circle-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-pricing animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <h4>Starter</h4>
                                <p>Perfect for startups & small businesses</p>
                                <div class="d-flex flex-row gspace-1 align-items-center h-100">
                                    <h3>
                                        $99
                                    </h3>
                                    <p>/Month</p>
                                </div>
                                <a href="#" class="btn btn-accent">
                                    <div class="btn-title">
                                        <span>View Details</span>
                                    </div>
                                    <div class="icon-circle">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </a>
                                <ul class="check-list">
                                    <li><a href="javascript:void(0)">Basic SEO & Marketing</a></li>
                                    <li><a href="javascript:void(0)">Social Media Management (1 Platform)</a></li>
                                    <li><a href="javascript:void(0)">Monthly Performance Report</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-pricing pricing-highlight animate-box animated slow animate__animated" data-animate="animate__fadeInUp">
                            <div class="spacer"></div>
                            <h4>Enterprise</h4>
                            <p>Full scale marketing for maximum impact</p>
                            <div class="d-flex flex-row gspace-1 align-items-center">
                                <h3>
                                    $399
                                </h3>
                                <p>/Month</p>
                            </div>
                            <a href="#" class="btn btn-accent">
                                <div class="btn-title">
                                    <span>View Details</span>
                                </div>
                                <div class="icon-circle">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </a>
                            <div class="core-benefits">
                                <div class="benefit">
                                    <i class="fa-solid fa-brain"></i>
                                    <a href="javascript:void(0)">Dedicated Account Manager</a>
                                </div>
                                <div class="benefit">
                                    <i class="fa-brands fa-accessible-icon"></i>
                                    <a href="javascript:void(0)">Priority Support 24/7</a>
                                </div>
                                <div class="benefit">
                                    <i class="fa-solid fa-bug"></i>
                                    <a href="javascript:void(0)">Customized Growth Strength</a>
                                </div>
                            </div>
                            <ul class="check-list">
                                <li><a href="javascript:void(0)">Complate Digital Marketing Suite</a></li>
                                <li><a href="javascript:void(0)">Paid Ads Management</a></li>
                                <li><a href="javascript:void(0)">Dedicated Account Manager</a></li>
                                <li><a href="javascript:void(0)">Email Marketing & Automation</a></li>
                                <li><a href="javascript:void(0)">Dedicated Account Manager</a></li>
                                <li><a href="javascript:void(0)">Weekly Performance insights</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="pricing-container">
                            <div class="card pricing-highlight-box animate-box animated animate__animated" data-animate="animate__fadeInRight">
                                <div class="d-flex flex-column gspace-2 w-100">
                                    <h5>Your Growth, Our Priority!</h5>
                                    <div class="d-flex flex-column gspace-2">
                                        <div class="pricing-highlights">
                                            <a href="#">Data-Driven Digital Marketing</a>
                                            <i class="fa-solid fa-arrow-circle-right"></i>
                                        </div>
                                        <div class="pricing-highlights">
                                            <a href="#">Proven Strategies for Higher</a>
                                            <i class="fa-solid fa-arrow-circle-right"></i>
                                        </div>
                                        <div class="pricing-highlights">
                                            <a href="#">Scalable Solution for Every Business</a>
                                            <i class="fa-solid fa-arrow-circle-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="spacer"></div>
                            </div>
                            <div class="card card-pricing animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <h4>Growth</h4>
                                <p>Best for growing businesses ready</p>
                                <div class="d-flex flex-row gspace-1 align-items-center h-100">
                                    <h3>
                                        $299
                                    </h3>
                                    <p>/Month</p>
                                </div>
                                <a href="#" class="btn btn-accent">
                                    <div class="btn-title">
                                        <span>View Details</span>
                                    </div>
                                    <div class="icon-circle">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </a>
                                <ul class="check-list">
                                    <li><a href="javascript:void(0)">Basic SEO & Marketing</a></li>
                                    <li><a href="javascript:void(0)">Social Media Management (1 Platform)</a></li>
                                    <li><a href="javascript:void(0)">Monthly Performance Report</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Newsletter -->
    @include('components.sections.newsletter')

    <!-- Section Blog -->
    @include('components.sections.blog')

</x-layouts.frontend>