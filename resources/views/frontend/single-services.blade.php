<x-layouts.frontend
    title="{{ $service['name'] }}"
    description="{{ $service['description'] ?? 'Learn more about our services.' }}">

    <!-- Section Banner -->
    <x-banner
        title="{{ $service['name'] }}"
        current="{{ $service['name'] }}" />

    <!-- Section Content -->
    <div class="section pb-0">
        <div class="hero-container">
            <div class="d-flex flex-column gspace-5">

                <!-- Service Hero Image & Title -->
                <div class="image-container">
                    <img src="{{ asset($service['image'] ?? 'assets/image/dummy-img-600x400.jpg') }}"
                        alt="{{ $service['name'] }}"
                        class="single-service-img">
                    <div class="single-service-title-layout">
                        <div class="single-service-title-wrapper">
                            <div class="single-service-title">
                                <div class="sub-heading animate-box" data-animate="animate__fadeInRight">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    <span>Our Expertise</span>
                                </div>
                                <h3 class="title-heading animate-box" data-animate="animate__fadeInRight">
                                    {{ $service['tagline'] ?? 'Boost your business with our expertise.' }}
                                </h3>
                                <p>{{ $service['description'] ?? 'Detailed overview coming soon.' }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row row-cols-xl-2 row-cols-1 grid-spacer-5">
                    <!-- Left Column: Overview, Images, What's Included -->
                    <div class="col col-xl-8">
                        <div class="d-flex flex-column gspace-2">

                            <h4>Overview</h4>
                            <p>{{ $service['overview'] ?? 'We provide top-notch services tailored to your needs.' }}</p>

                            <!-- Images -->
                            <div class="row row-cols-md-2 row-cols-1 grid-spacer-2">
                                @foreach($service['images'] ?? [] as $img)
                                <div class="col">
                                    <img src="{{ asset($img) }}" alt="{{ $service['name'] }}" class="img-fluid">
                                </div>
                                @endforeach
                            </div>

                            <!-- What's Included -->
                            @if(!empty($service['included']))
                            <div class="card service-included">
                                <h4>What's Included</h4>
                                <div class="underline-accent-short"></div>
                                <ul class="check-list">
                                    @foreach($service['included'] as $item)
                                    <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

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
                                <h3 class="title-heading">Transform Your Business with Marko!</h3>
                                <p>{{ $service['cta'] ?? 'Take your business to the next level with our solutions.' }}</p>
                                <div class="link-wrapper">
                                    <a href="{{ route('contact') }}">Contact Us</a>
                                    <i class="fa-solid fa-circle-arrow-right"></i>
                                </div>
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
                                <div id="faq{{ $index + 1 }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}">
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