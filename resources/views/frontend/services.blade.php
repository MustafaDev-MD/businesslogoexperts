<x-layouts.frontend
    title="{{ $service['title'] }}"
    description="{{ $service['description'] ?? 'Learn more about our services.' }}">

    <!-- Section Banner -->
    <x-banner
        :title="$service['name']"
        :parent="$service['parent']"
        :parent-link="$service['parentLink']"
        :current="$service['breadcrumb']" />
    <!-- Section Content -->
    <div class="section pb-0">
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
                                        <span>Our Expertise</span>
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
                                <ul class="service-inner-tab nav nav-tabs" id="portfolioTabs" role="tablist">
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
                                    // Sirf wahi images uthayega jo current $tab name se match karti hain
                                    $portfolioImages = $service['portfolioImages'][$tabName] ?? [];
                                    @endphp

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

                            <div class="section">
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
                            </div>

                        </div>
                    </div>

                    <!-- Right Column: Sidebar -->
                    <div class="col col-xl-4">
                        <div class="d-flex flex-column flex-md-row flex-xl-column justify-content-between gspace-5">

                            <!-- Recent Services -->
                            <div class="card service-recent">
                                <h4>Recent Services</h4>
                                <div class="underline-accent-short"></div>
                                <ul class="single-service-list">
                                    @foreach($services as $s)
                                    @if(isset($s['slug']) && isset($s['name']))
                                    <li>
                                        <a href="{{ route('single-service', ['slug' => $s['slug']]) }}">
                                            {{ $s['name'] }}
                                        </a>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>

                            <!-- CTA Banner -->
                            <div class="cta-service-banner">
                                <div class="spacer"></div>
                                <h3 class="title-heading">Transform Your Business with Marko!</h3>
                                <p>{{ $service['cta'] ?? 'Take your business to the next level with our solutions.' }}</p>
                                <div class="link-wrapper">
                                    <a href="{{ route('about') }}">Read More</a>
                                    <i class="fa-solid fa-circle-arrow-right"></i>
                                </div>
                            </div>

                            <!-- Recent Services -->
                            <div class="card service-recent">
                                <h4>Recent Services</h4>
                                <div class="underline-accent-short"></div>
                                <ul class="single-service-list">
                                    @foreach($services as $s)
                                    @if(isset($s['slug']) && isset($s['name']))
                                    <li>
                                        <a href="{{ route('single-service', ['slug' => $s['slug']]) }}">
                                            {{ $s['name'] }}
                                        </a>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Testimonial -->
    @include('components.sections.testimonial')

    <!-- Section Newsletter -->
    @include('components.sections.newsletter')

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