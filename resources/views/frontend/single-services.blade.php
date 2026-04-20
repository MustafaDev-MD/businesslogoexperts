<x-layouts.frontend
    title="{{ $service['title'] }}"
    description="{{ $service['description'] ?? 'Learn more about our services.' }}">

    <!-- Section Banner -->
    <x-sections.banner
        :title="$service['heading']"
        :parent="$service['parent']"
        :parent-link="$service['parentLink']"
        :current="$service['breadcrumb']" />


    <!-- Section Content -->
    <div class="section">
        <div class="hero-container">
            <div class="d-flex flex-column gspace-5">

                <!-- Service Hero Image & Title -->
                <div class="image-container">
                    <img src="{{ asset($service['bannerImage'] ?? 'assets/image/dummy-img-600x400.jpg') }}"
                        alt="{{ $service['bannerAlt'] }}"
                        class="single-service-img">
                    <div class="single-service-title-layout">
                        <div class="">
                            <div class="single-service-spacer"></div>
                            <div class="single-service-title-wrapper">
                                <div class="single-service-title">
                                    <div class="sub-heading animate-box animated slow animate__animated" data-animate="animate__fadeInRight">
                                        <i class="fa-regular fa-circle-dot"></i>
                                        <span>Service Overview</span>
                                    </div>
                                    <h3 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">
                                        {{ $service['expertiseTitle'] ?? 'Boost your business with our expertise.' }}
                                    </h3>
                                    <p>{{ $service['expertiseDescription'] ?? 'Detailed overview coming soon.' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-service-spacer"></div>
                    </div>
                </div>

                <div class="row row-cols-xl-2 row-cols-1 grid-spacer-5">
                    <!-- Left Column: Overview, Images, What's Included -->
                    <div class="col col-xl-8">
                        <div class="d-flex flex-column gspace-2">

                            <!-- <h4>Overview</h4>
                            <p>{{ $service['overview'] ?? 'We provide top-notch services tailored to your needs.' }}</p> -->

                            <!-- Tabs -->
                            <div class="service-inner-tab-container">
                                <div class="spacer"></div>
                                <ul class="service-inner-tab nav nav-tabs justify-content-around" id="portfolioTabs" role="tablist">
                                    @php
                                    // Ye line 'Logo', 'Business Cards' etc. ki keys ko automatically nikaal legi
                                    $dynamicTabs = isset($service['portfolioImages']) ? array_keys($service['portfolioImages']) : [];
                                    @endphp

                                    @foreach($dynamicTabs as $index => $tabName)
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link {{ $index == 0 ? 'active' : '' }}"
                                            id="tab-{{ $index }}"
                                            data-bs-toggle="tab"
                                            data-bs-target="#tab-content-{{ $index }}"
                                            type="button" role="tab"
                                            aria-controls="tab-content-{{ $index }}"
                                            aria-selected="{{ $index == 0 ? 'true' : 'false' }}">
                                            {{ $tabName }}
                                        </button>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="spacer"></div>
                            </div>

                            <!-- Tab Contents -->
                            <div class="tab-content mt-3">
                                @foreach($dynamicTabs as $index => $tabName)
                                <div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}" id="tab-content-{{ $index }}" role="tabpanel" aria-labelledby="tab-{{ $index }}">


                                    @php
                                    $tabContent = $service['portfolioContent'][$tabName] ?? 'No content available for this tab.';
                                    // Sirf wahi images uthayega jo current $tab name se match karti hain
                                    $portfolioImages = $service['portfolioImages'][$tabName] ?? [];
                                    @endphp

                                    <p class="pb-4">{{ $tabContent }}</p>

                                    @if(count($portfolioImages) > 0)
                                    <div class="glide glide-{{ $index }}">
                                        <div class="glide__track" data-glide-el="track">
                                            <ul class="glide__slides">
                                                @foreach($portfolioImages as $img)
                                                <li class="glide__slide">
                                                    <div class="image-container">
                                                        <img src="{{ asset($img) }}" alt="{{ $tabName }}" class="img-fluid">
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        <div class="glide__arrows" data-glide-el="controls">
                                            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fa-solid fa-angle-left"></i></button>
                                            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fa-solid fa-angle-right"></i></button>
                                        </div>

                                        <div class="glide__bullets" data-glide-el="controls[nav]"></div>
                                    </div>
                                    @else
                                    <div class="alert alert-light bg-black text-center">No images found for {{ $tabName }}</div>
                                    @endif

                                </div>
                                @endforeach
                            </div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const sliders = {};

                                    // 1. Initialize all sliders but only mount the active one
                                    document.querySelectorAll('.glide').forEach((el) => {
                                        const id = el.closest('.tab-pane').id;

                                        sliders[id] = new Glide(el, {
                                            type: 'carousel',
                                            autoplay: 3000,
                                            perView: 2,
                                            gap: 20,
                                            breakpoints: {
                                                768: {
                                                    perView: 1
                                                }
                                            }
                                        });

                                        // Agar ye active tab hai (Logo), toh turant mount karein
                                        if (el.closest('.tab-pane').classList.contains('active')) {
                                            sliders[id].mount();
                                        }
                                    });

                                    // 2. Tab switch hone par slider ko refresh/mount karein
                                    const tabEls = document.querySelectorAll('button[data-bs-toggle="tab"]');
                                    tabEls.forEach(tabEl => {
                                        tabEl.addEventListener('shown.bs.tab', function(event) {
                                            const targetId = event.target.getAttribute('data-bs-target').replace('#', '');

                                            if (sliders[targetId]) {
                                                // mount() ya update() zaroori hai taaki dimensions recalculate ho skein
                                                sliders[targetId].mount();
                                            }
                                        });
                                    });
                                });
                            </script>

                            <!-- What's Included -->
                            @if(!empty($service['included_1']) || !empty($service['included_2']))
                            <div class="card service-included">
                                <h4>What's Included</h4>
                                <div class="underline-accent-short"></div>
                                <p>
                                    @if(isset($service['includedPara']))
                                    {{ $service['includedPara'] }}
                                    @else
                                    Complete handover that gets you publishing, selling, and scaling faster.
                                    @endif
                                </p>
                                <div class="row row-cols-md-2 row-cols-1 grid-spacer-2">
                                    @if(!empty($service['included_1']))
                                    <div class="col">
                                        <ul class="check-list">
                                            @foreach($service['included_1'] as $item)
                                            <li>{{ $item }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

                                    @if(!empty($service['included_2']))
                                    <div class="col">
                                        <ul class="check-list">
                                            @foreach($service['included_2'] as $item)
                                            <li>{{ $item }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            @endif

                            <!-- <div class="section">
                                <div class="hero-container">
                                    <div class="d-flex flex-column justify-content-center text-center gspace-5">
                                        <div class="row row-cols-xl-2 row-cols-1 grid-spacer-2">

                                            <div class="col">
                                                <div class="pricing-container">
                                                    <div class="card card-pricing-title animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                                                        <div class="spacer"></div>
                                                        <div class="content">
                                                            <h3 class="title-heading">{{ $service['pricing']['title'] ?? "Let's Find the Right Strategy!" }}</h3>
                                                            <div class="link-wrapper">
                                                                <a href="{{ url('/contact') }}">Book a Free Consultation</a>
                                                                <i class="fa-solid fa-arrow-circle-right"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    @if(isset($service['pricing']['plans'][0]))
                                                    @php $starter = $service['pricing']['plans'][0]; @endphp
                                                    <div class="card card-pricing animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                                        <h4>{{ $starter['name'] }}</h4>
                                                        <p>{{ $starter['description'] }}</p>
                                                        <div class="d-flex flex-row gspace-1 align-items-center h-100">
                                                            <h3>${{ $starter['price'] }}</h3>
                                                            <p>/Month</p>
                                                        </div>
                                                        <a href="#" class="btn btn-accent">
                                                            <div class="btn-title"><span>View Details</span></div>
                                                            <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                                        </a>
                                                        <ul class="check-list">
                                                            @foreach($starter['features'] as $feature)
                                                            <li><a href="javascript:void(0)">{{ $feature }}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col">
                                                @if(isset($service['pricing']['plans'][1]))
                                                @php $enterprise = $service['pricing']['plans'][1]; @endphp
                                                <div class="card card-pricing pricing-highlight animate-box animated slow animate__animated" data-animate="animate__fadeInUp">
                                                    <div class="spacer"></div>
                                                    <h4>{{ $enterprise['name'] }}</h4>
                                                    <p>{{ $enterprise['description'] }}</p>
                                                    <div class="d-flex flex-row gspace-1 align-items-center">
                                                        <h3>${{ $enterprise['price'] }}</h3>
                                                        <p>/Month</p>
                                                    </div>
                                                    <a href="#" class="btn btn-accent">
                                                        <div class="btn-title"><span>View Details</span></div>
                                                        <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                                    </a>

                                                    @if(isset($enterprise['coreBenefits']))
                                                    <div class="core-benefits">
                                                        @foreach($enterprise['coreBenefits'] as $benefit)
                                                        <div class="benefit">
                                                            <i class="{{ isset($benefit['brand']) ? 'fa-brands' : 'fa-solid' }} {{ $benefit['icon'] }}"></i>
                                                            <a href="javascript:void(0)">{{ $benefit['text'] }}</a>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    @endif

                                                    <ul class="check-list">
                                                        @foreach($enterprise['features'] as $feature)
                                                        <li><a href="javascript:void(0)">{{ $feature }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                    </div>

                    <!-- Right Column: Sidebar -->
                    <div class="col col-xl-4">
                        <div class="d-flex flex-column flex-md-row flex-xl-column justify-content-between gspace-2">

                            <!-- Why Choose Us -->
                            <!-- <div class="card service-recent">
                                <h4>Why Choose Us</h4>
                                <div class="underline-accent-short"></div>
                                <ul class="single-service-list">
                                    @foreach($services as $s)
                                    @if(isset($s['slug']) && isset($s['whyChooseUs']))
                                    @foreach($s['whyChooseUs'] as $item)
                                    <li>{{ $item }}</li>
                                    @endforeach
                                    @endif
                                    @endforeach
                                </ul>
                            </div> -->

                            <!-- Why Choose Us -->
                            <div class="card service-recent">
                                <h4>Why Choose Us</h4>
                                <div class="underline-accent-short"></div>

                                <ul class="single-service-list">
                                    @if(isset($service['whyChooseUs']))
                                    @foreach($service['whyChooseUs'] as $item)
                                    <li>{{ $item }}</li>
                                    @endforeach
                                    @endif
                                </ul>

                            </div>

                            <!-- CTA Banner -->
                            <div class="cta-service-banner">
                                <div class="spacer"></div>
                                <h3 class="title-heading">{{ $service['rightBlogTitle'] ?? 'Transform Your Business with Marko!' }}</h3>
                                <p>{{ $service['rightBlogDes'] ?? 'Take your business to the next level with our solutions.' }}</p>
                                <div class="link-wrapper">
                                    <a href="{{ route('about') }}">Read More</a>
                                    <i class="fa-solid fa-circle-arrow-right"></i>
                                </div>
                            </div>

                            <!-- Recent Services -->
                            <!-- <div class="card service-recent">
                                <h4 class="text-start">{{ $service['rightCTATitle'] ?? 'Ready to make your brand do the heavy lifting?' }}</h4>
                                <div class="underline-accent-short"></div>
                                <p class="text-start">{{ $service['rightCTADes'] ?? 'Book a free 30-minute brand audit — we’ll map quick wins and the right package for your goals.' }}</p>
                                <a href="tel:+1 (62) 987 7543">
                                    <div class="navbar-icon-wrapper inner-service-button">
                                        <div class="icon-circle">
                                            <i class="fa-solid fa-phone-volume"></i>
                                        </div>
                                        <h6>+1 (62) 987 7543</h6>
                                    </div>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section" id="pricing">
        <div class="hero-container">
            <div class="d-flex flex-column justify-content-center text-center gspace-5">
                <!-- <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInUp">
                <div class="sub-heading align-self-center">
                    <i class="fa-regular fa-circle-dot"></i>
                    <span>Our Core Services</span>
                </div>
                <h2 class="title-heading heading-container heading-container-short">Flexible Pricing Plans<br> for Every Business</h2>
            </div> -->
                <div class="row row-cols-xl-3 row-cols-1 grid-spacer-2">
                    <div class="col">
                        <div class="pricing-container">
                            <div class="card card-pricing-title animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                                <div class="spacer"></div>
                                <div class="content">
                                    <h3 class="title-heading">{{ $service['pricing']['title'] ?? "Let's Find the Right Strategy!" }}</h3>
                                    <div class="link-wrapper">
                                        <a href="{{ url('/contact') }}">Book a Free Consultation</a>
                                        <i class="fa-solid fa-arrow-circle-right"></i>
                                    </div>
                                </div>
                            </div>

                            @if(isset($service['pricing']['plans'][0]))
                            @php $starter = $service['pricing']['plans'][0]; @endphp
                            <div class="card card-pricing animate-box animated animate__animated" data-animate="animate__fadeInUp">
                                <h4>{{ $starter['name'] }}</h4>
                                <p>{{ $starter['description'] }}</p>
                                <div class="d-flex flex-row gspace-1 align-items-center h-100">
                                    <h3>${{ $starter['price'] }}</h3>
                                    <p>/Month</p>
                                </div>
                                <a href="{{ route('package.form', [
                                            'service' => $service['slug'],
                                            'package' => Str::slug($starter['name'])
                                        ]) }}" class="btn btn-accent">
                                    <div class="btn-title"><span>View Details</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                                <ul class="check-list">
                                    @foreach($starter['features'] as $feature)
                                    <li><a href="javascript:void(0)">{{ $feature }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="col">
                        @if(isset($service['pricing']['plans'][1]))
                        @php $enterprise = $service['pricing']['plans'][1]; @endphp
                        <div class="card card-pricing pricing-highlight animate-box animated slow animate__animated" data-animate="animate__fadeInUp">
                            <div class="spacer"></div>
                            <h4>{{ $enterprise['name'] }}</h4>
                            <p>{{ $enterprise['description'] }}</p>
                            <div class="d-flex flex-row gspace-1 align-items-center">
                                <h3>${{ $enterprise['price'] }}</h3>
                                <p>/Month</p>
                            </div>
                            <a href="{{ route('package.form', [
                                            'service' => $service['slug'],
                                            'package' => Str::slug($enterprise['name'])
                                        ]) }}" class="btn btn-accent">
                                <div class="btn-title"><span>View Details</span></div>
                                <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                            </a>

                            @if(isset($enterprise['coreBenefits']))
                            <div class="core-benefits">
                                @foreach($enterprise['coreBenefits'] as $benefit)
                                <div class="benefit">
                                    <i class="{{ isset($benefit['brand']) ? 'fa-brands' : 'fa-solid' }} {{ $benefit['icon'] }}"></i>
                                    <a href="javascript:void(0)">{{ $benefit['text'] }}</a>
                                </div>
                                @endforeach
                            </div>
                            @endif

                            <ul class="check-list">
                                @foreach($enterprise['features'] as $feature)
                                <li><a href="javascript:void(0)">{{ $feature }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                    <div class="col">
                        <div class="pricing-container">
                            <div class="card pricing-highlight-box animate-box animated animate__animated" data-animate="animate__fadeInRight">
                                <div class="d-flex flex-column gspace-2 w-100">
                                    <!-- <h5>Your Growth, Our Priority!</h5>
                                <div class="d-flex flex-column gspace-2">
                                    <div class="pricing-highlights">
                                        <a href="javascript:void(0)">Data-Driven Digital Marketing</a>
                                        <i class="fa-solid fa-arrow-circle-right"></i>
                                    </div>
                                    <div class="pricing-highlights">
                                        <a href="javascript:void(0)">Proven Strategies for Higher</a>
                                        <i class="fa-solid fa-arrow-circle-right"></i>
                                    </div>
                                    <div class="pricing-highlights">
                                        <a href="javascript:void(0)">Scalable Solution for Every Business</a>
                                        <i class="fa-solid fa-arrow-circle-right"></i>
                                    </div>
                                </div> -->
                                    <h4 class="text-start">{{ $service['rightCTATitle'] ?? 'Ready to make your brand do the heavy lifting?' }}</h4>
                                    <div class="underline-accent-short"></div>
                                    <p class="text-start">{{ $service['rightCTADes'] ?? 'Book a free 30-minute brand audit — we’ll map quick wins and the right package for your goals.' }}</p>
                                    <a href="tel:+1 (62) 987 7543">
                                        <div class="navbar-icon-wrapper inner-service-button">
                                            <div class="icon-circle">
                                                <i class="fa-solid fa-phone-volume"></i>
                                            </div>
                                            <h6>+1 (62) 987 7543</h6>
                                        </div>
                                    </a>
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
                                <a href="{{ route('package.form', [
                                            'service' => $service['slug'],
                                            'package' => Str::slug($starter['name'])
                                        ]) }}" class="btn btn-accent">
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

    <!-- Section Testimonial -->
    <div class="section">
        <div class="hero-container">
            <div class="d-flex flex-column gspace-5">
                <div class="d-flex flex-column flex-xl-row gspace-5">
                    <div class="testimonial-reviewer-container">
                        <div class="testimonial-header-wrapper animate-box animated fast animate__animated" data-animate="animate__fadeInDown">
                            <div class="card card-testimonial-reviewer">

                                <div class="d-flex flex-column flex-md-row flex-xl-column justify-content-between gspace-3">

                                    {{-- Avatars --}}
                                    <div class="testimonial-reviewer">
                                        <div class="avatar-container">
                                            @foreach($service['testimonialSummary']['avatars'] ?? [] as $avatar)
                                            <img src="{{ asset($avatar) }}" alt="Reviewer" class="avatar">
                                            @endforeach
                                        </div>

                                        <div class="detail">
                                            <h6>{{ $service['testimonialSummary']['positiveReviews'] ?? '' }}</h6>
                                            <h6>{{ $service['testimonialSummary']['reviewLabel'] ?? '' }}</h6>
                                        </div>
                                    </div>

                                    {{-- Stats --}}
                                    <div class="testimonial-rating-container">
                                        @foreach($service['testimonialSummary']['stats'] ?? [] as $stat)
                                        <div class="d-flex flex-column align-items-center gspace-1 testimonial-ratings">
                                            <div class="d-flex flex-row align-items-center">
                                                <span class="counter" data-target="{{ $stat['value'] }}"></span>
                                                <span class="counter-detail">{{ $stat['suffix'] }}</span>
                                            </div>
                                            <p class="text-center">{{ $stat['label'] }}</p>
                                        </div>

                                        @if(!$loop->last)
                                        <div class="underline-vertical"></div>
                                        @endif
                                        @endforeach
                                    </div>

                                </div>

                                {{-- Service Links --}}
                                <div class="d-flex flex-column flex-md-row flex-xl-column justify-content-center gspace-2">
                                    @foreach($service['testimonialSummary']['services'] ?? [] as $link)
                                    <div class="testimonial-header-link-wrapper">
                                        <i class="fa-regular fa-circle-check accent-color"></i>
                                        <a href="#">{{ $link }}</a>
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="testimonial-title-container">
                        <div class="testimonial-header-wrapper-title animate-box animated animate__animated" data-animate="animate__fadeInRight">
                            <div class="card-testimonial-header-title">
                                <div class="sub-heading">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    <span>What Our Client Says</span>
                                </div>
                                <h2 class="title-heading">Hear from Our Satisfied Clients, Real Success Stories</h2>
                                <p>Real brands, real results. We partner with teams who want identity to be an asset — here are concise stories of how identity work translated into measurable outcomes.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <div class="overflow-hidden">
                        <div class="swiper swiperTestimonial">
                            <div class="swiper-wrapper">
                                <!--  -->
                                @foreach($service['testimonials'] as $testimonial)

                                <div class="swiper-slide">
                                    <div class="card card-testimonial">
                                        <div class="stars">
                                            @for($i=0; $i < $testimonial['stars']; $i++)
                                                <i class="fa-solid fa-star"></i>
                                                @endfor
                                        </div>
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <div class="d-flex flex-row gspace-2">
                                                <div class="testimonial-image">
                                                    <img src="{{ asset($testimonial['image']) }}" alt="{{ $testimonial['name'] }}" class="img-fluid">
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span class="profile-name">{{ $testimonial['name'] }}</span>
                                                    <p class="profile-info">{{ $testimonial['position'] }}</p>
                                                </div>
                                            </div>
                                            <i class="fa-solid fa-3x fa-quote-right accent-color"></i>
                                        </div>
                                        <p class="testimonial-description">{{ $testimonial['description'] }}</p>
                                        @if($testimonial['result'])
                                        <p class="testimonial-result">{{ $testimonial['result'] }}</p>
                                        @endif
                                    </div>
                                </div>
                                @endforeach `

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Newsletter -->
    <div class="section">
        <div class="hero-container">
            <div class="newsletter-wrapper">
                <div class="newsletter-layout">
                    <div class="spacer"></div>
                    <div class="d-flex flex-column gspace-5 position-relative z-2">
                        <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                            <h3 class="title-heading">{{ $service['mainCTATitle'] ?? 'Stay ahead with brand thinking that scales' }}</h3>
                            <p>{{ $service['mainCTADes'] ?? 'Subscribe for monthly insights, case studies, and quick design tests you can run tomorrow.' }}</p>
                        </div>
                        <!-- <form action="newsletter.submit" method="POST" id="newsletterForm" class="needs-validation animate-box animated animate__animated" data-animate="animate__fadeInRight">
                            @csrf
                            <div class="input-container">
                                <input type="email" name="newsletter-email" id="newsletter-email" placeholder="Give your best email" required>
                                <p class="error-text hidden"></p>
                            </div> -->
                        <a href="{{ route('contact') }}" class="align-self-center">
                            <button class="btn btn-accent cta-btn" type="submit">
                                <span class="btn-title"><span>Subscribe</span></span>
                                <span class="icon-circle"><i class="fa-solid fa-arrow-right"></i></span>
                            </button>
                        </a>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section FAQs -->
    @if(!empty($service['faqs']))
    <div class="section">
        <div class="hero-container">
            <div class="row row-cols-xl-2 row-cols-1 grid-spacer-5">
                <div class="col col-xl-5">
                    <div class="faq-title-container">
                        <div class="sub-heading">
                            <i class="fa-regular fa-circle-dot"></i>
                            <span>Frequently Asked Questions</span>
                        </div>
                        <h2 class="title-heading">Got Questions? We've Got Answers.</h2>
                    </div>
                </div>
                <div class="col col-xl-7">
                    <div class="d-flex flex-column">
                        <div class="accordion" id="faqAccordion1">
                            @foreach($service['faqs'] as $index => $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button {{ $index != 0 ? 'collapsed' : '' }}"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#faq{{ $index + 1 }}"
                                        aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                        aria-controls="faq{{ $index + 1 }}">
                                        {{ $faq['question'] }}
                                    </button>
                                </h2>
                                <div id="faq{{ $index + 1 }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                    data-bs-parent="#faqAccordion1">
                                    <div class="accordion-body">
                                        <div class="accordion-spacer"></div>
                                        <p>{{ $faq['answer'] }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

</x-layouts.frontend>