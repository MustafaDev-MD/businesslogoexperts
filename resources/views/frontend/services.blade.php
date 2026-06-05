<x-layouts.frontend
    title="Best Digital Marketing Agency"
    description="We help businesses grow with SEO, social media marketing, PPC campaigns, and branding solutions.">

    <!-- Section Banner -->
    <x-banner
        title="Services"
        current="Services" />

    <!-- Section Service -->
    <div class="section">
        <div class="hero-container">
            <div class="d-flex flex-column justify-content-center text-center gspace-5">
                <div class="d-flex flex-column justify-content-center text-center gspace-2">
                    <div class="sub-heading align-self-center animate-box animated animate__animated" data-animate="animate__fadeInDown">
                        <i class="fa-regular fa-circle-dot"></i>
                        <span>Our Core Services</span>
                    </div>
                    <h2 class="title-heading heading-container heading-container-extra-short animate-box animated animate__animated" data-animate="animate__fadeInDown">Digital Solutions That Drive Real Results</h2>
                </div>

                <div class="card-service-wrapper">
                    <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1 grid-spacer-2 justify-content-center">
                        @foreach(collect(config('custom_services')) as $service)
                        @if(isset($service['slug']) && isset($service['name']))
                        <div class="col">
                            <div class="card card-service animate-box animated slow animate__animated" data-animate="animate__fadeInLeft">
                                <!-- <div class="d-flex flex-row justify-content-between gspace-2 gspace-md-3 align-items-center"> -->
                                <div class="d-flex flex-row gspace-2 gspace-md-3 align-items-center">
                                    <div>
                                        <div class="service-icon-wrapper">
                                            <div class="service-icon">
                                                <img src="{{ asset($service['icon'] ?? 'assets/image/Icon-5.png') }}" alt="Service Icon" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-title">
                                        <h4>{{ $service['name'] }}</h4>
                                    </div>
                                </div>
                                @if(!empty($service['info']))
                                <p>{{ $service['info'] ?? 'NO INFO' }}</p>
                                @endif
                                <a href="{{ route('single-service', ['slug'=>$service['slug']]) }}" class="btn btn-accent">
                                    <div class="btn-title"><span>View Details</span></div>
                                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                                </a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                <!-- <a href="{{ route('services') }}" class="btn btn-accent all-services-btn align-self-center">
                    <div class="btn-title"><span>View All Services</span></div>
                    <div class="icon-circle"><i class="fa-solid fa-arrow-right"></i></div>
                </a> -->

                <!-- <div class="service-link-footer">
                    <p>Need a custom solution? Let's create a strategy tailored for your business. <a href="{{ route('contact') }}">Get a Free Strategy Call</a></p>
                </div> -->
            </div>
        </div>
    </div>

    <!-- Section Pricing -->
    <div>

        @include('components.sections.pricing')

        <div class="section pt-0">

            <div class="service-link-footer d-flex flex-column justify-content-center text-center">
                <p>Need a custom solution? Let's create a strategy tailored for your business. <a href="{{ route('contact') }}">Get a Free Strategy Call</a></p>
            </div>

        </div>

    </div>

</x-layouts.frontend>