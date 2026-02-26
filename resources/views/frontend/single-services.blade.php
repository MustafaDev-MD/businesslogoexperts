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
                    <img src="{{ $service['image'] ?? asset('assets/image/dummy-img-600x400.jpg') }}"
                        alt="{{ $service['name'] }}" class="single-service-img">
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
                                    <img src="{{ $img }}" alt="{{ $service['name'] }}" class="img-fluid">
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

<x-layouts.frontend
    title="Blog"
    description="Explore the latest insights, trends, and strategies from Business Logo Experts to help your business grow with effective digital marketing.">

    <!-- Section Banner -->
    <x-banner
        title="Branding & Identity"
        current="Branding" />

    <!-- Section Services -->
    <div class="section pb-0">
        <div class="hero-container">
            <div class="d-flex flex-column gspace-5">
                <div class="image-container">
                    <img src="{{ asset('assets/image/dummy-img-600x400.jpg') }}" alt="Service Image" class="single-service-img">
                    <div class="single-service-title-layout">
                        <div class="">
                            <div class="single-service-spacer"></div>
                            <div class="single-service-title-wrapper">
                                <div class="single-service-title">
                                    <div class="sub-heading animate-box animated slow animate__animated" data-animate="animate__fadeInRight">
                                        <i class="fa-regular fa-circle-dot"></i>
                                        <span>Our Expertise</span>
                                    </div>
                                    <h3 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">Boost Your Brand with Strategic Social Media Marketing</h3>
                                    <p>Maximize engagement, build loyal communities, and drive conversions across all major platforms lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-service-spacer"></div>
                    </div>
                </div>

                <div class="row row-cols-xl-2 row-cols-1 grid-spacer-5">
                    <div class="col col-xl-8">
                        <div class="d-flex flex-column gspace-2">
                            <h4>Overview</h4>
                            <p>
                                At Marko, we help brands grow through custom-tailored social media marketing strategies that connect with your audience. From content creation to campaign optimization, we make sure your presence on platforms like Instagram, Facebook, LinkedIn, and TikTok stands out. Whether you’re launching a new brand or scaling an existing one, our experts turn social media into a powerful growth engine.
                            </p>
                            <div class="row row-cols-md-2 row-cols-1 grid-spacer-2 grid-spacer-md-3">
                                <div class="col">
                                    <div class="image-container">
                                        <img src="{{ asset('assets/image/dummy-img-600x400.jpg') }}" alt="Service Image" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="image-container">
                                        <img src="{{ asset('assets/image/dummy-img-600x400.jpg') }}" alt="Service Image" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card service-included">
                                <h4>What's Included</h4>
                                <div class="underline-accent-short"></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mollis ac odio et efficitur. Proin velit neque, sollicitudin nec purus eu, suscipit feugiat tellus.</p>
                                <div class="row row-cols-md-2 row-cols-1 grid-spacer-2">
                                    <div class="col">
                                        <ul class="check-list">
                                            <li>Platform Strategy & Planning</li>
                                            <li>Creative Content Production</li>
                                            <li>Paid Ads Management</li>
                                            <li>Community engagement</li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="check-list">
                                            <li>Perfomance Reporting & Analytics</li>
                                            <li>Influencer Collaborations</li>
                                            <li>Social Listening & Trend Monitoring</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h4>Why Choose Marko for Social Media Marketing?</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mollis ac odio et efficitur. Proin velit neque, sollicitudin nec purus eu, suscipit feugiat tellus.</p>
                            <div class="row row-cols-2">
                                <div class="col">
                                    <div class="d-flex flex-column gspace-2">
                                        <div class="d-flex flex-column flex-md-row align-items-center text-center text-md-start gspace-1">
                                            <i class="fa-regular fa-2x fa-circle-check accent-color"></i>
                                            <div class="d-flex flex-column gspace-0">
                                                <h5>Result-Driven Campaigns</h5>
                                                <p>Focused on reach, engagement, and ROI</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column flex-md-row align-items-center text-center text-md-start gspace-1">
                                            <i class="fa-regular fa-2x fa-circle-check accent-color"></i>
                                            <div class="d-flex flex-column gspace-0">
                                                <h5>Dedicated Team</h5>
                                                <p>Experts in every platform you use</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="d-flex flex-column gspace-2">
                                        <div class="d-flex flex-column flex-md-row align-items-center text-center text-md-start gspace-1">
                                            <i class="fa-regular fa-2x fa-circle-check accent-color"></i>
                                            <div class="d-flex flex-column gspace-0">
                                                <h5>Tailored strategies</h5>
                                                <p>No one-size-fits-all, we build for your brand</p>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column flex-md-row align-items-center text-center text-md-start gspace-1">
                                            <i class="fa-regular fa-2x fa-circle-check accent-color"></i>
                                            <div class="d-flex flex-column gspace-0">
                                                <h5>Analytics & insights</h5>
                                                <p>Make smart decision with real data</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xl-4">
                        <div class="d-flex flex-column flex-md-row flex-xl-column justify-content-between gspace-5">
                            <div class="card service-recent">
                                <h4>Recent Services</h4>
                                <div class="underline-accent-short"></div>
                                <ul class="single-service-list">
                                    <li><a href="./single_services.html">Social Media Marketing</a></li>
                                    <li><a href="./single_services.html">Content Marketing</a></li>
                                    <li><a href="./single_services.html">PPC Advertising</a></li>
                                    <li><a href="./single_services.html">Email Marketing</a></li>
                                    <li><a href="./single_services.html">Branding & Design</a></li>
                                    <li><a href="./single_services.html">Web Development</a></li>
                                </ul>
                            </div>
                            <div class="cta-service-banner">
                                <div class="spacer"></div>
                                <h3 class="title-heading">Transform Your Business with Marko!</h3>
                                <p>
                                    Take your digital marketing to the next level with data-driven strategies and innovative solutions. Let's create something amazing together!
                                </p>
                                <div class="link-wrapper">
                                    <a href="about.html">Read More</a>
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
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                                        What services does Marko offer?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse show"
                                    data-bs-parent="#faqAccordion1">
                                    <div class="accordion-body">
                                        <div class="accordion-spacer"></div>
                                        <p>
                                            We specialize in digital marketing, including branding, social media management, content strategy, paid ads, and analytics-driven campaigns.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="true"
                                        aria-controls="faq2">
                                        How long does it take to see results?
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                                    <div class="accordion-body">
                                        <div class="accordion-spacer"></div>
                                        <p>
                                            While some channels like paid ads offer quicker results, most strategies (like content and SEO) show steady growth within 3-6 months.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false"
                                        aria-controls="faq3">
                                        Do you work with businesses of all sizes?
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                                    <div class="accordion-body">
                                        <div class="accordion-spacer"></div>
                                        <p>
                                            Yes! We collaborate with startups, SMEs, and enterprise-level companies across various industries.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false"
                                        aria-controls="faq4">
                                        Can I request a custom digital marketing package?
                                    </button>
                                </h2>
                                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                                    <div class="accordion-body">
                                        <div class="accordion-spacer"></div>
                                        <p>
                                            Absolutely. We tailor our services to fit your business goals, budget, and timeline
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false"
                                        aria-controls="faq5">
                                        How do I know which service is right for me?
                                    </button>
                                </h2>
                                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                                    <div class="accordion-body">
                                        <div class="accordion-spacer"></div>
                                        <p>
                                            During our initial consultation, we'll assess your current strategy and recommend the best path forward based on data and goals.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false"
                                        aria-controls="faq6">
                                        Do you provide monthly performance reports?
                                    </button>
                                </h2>
                                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                                    <div class="accordion-body">
                                        <div class="accordion-spacer"></div>
                                        <p>
                                            Yes. Every month, you'll receive a clear and comprehensive report outlining progress, key metrics, and next steps.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.frontend>