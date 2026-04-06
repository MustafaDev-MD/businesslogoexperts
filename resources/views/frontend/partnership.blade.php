<x-layouts.frontend
    title="Partnership"
    description="Learn about Business Logo Experts, our mission, values, and the team behind our innovative digital marketing strategies that help businesses grow.">

    <!-- Section Banner -->
    <x-banner
        title="Partnership"
        current="Partnership" />

    <!-- Section Partnrship -->
    <div class="section">
    <div class="hero-container">
        <div class="d-flex flex-column gspace-2">
            <div class="d-flex flex-column gspace-2 justify-content-center align-items-center">
                <div class="sub-heading">
                    <i class="fa-regular fa-circle-dot"></i>
                    <span>Client & Partnership</span>
                </div>
                <h2 class="title-heading heading-container heading-container-wide">
                    Strong Partnerships, Proven Success
                </h2>
            </div>

            <div class="partnership-layout">
                <div class="partnership-wrapper">
                    <div class="partnership-spacer"></div>
                    <div class="row row-cols-md-4 row-cols-1 g-0">

                        @php
                            $partners = [
                                'client-1.png',
                                'client-2.png',
                                'client-3.png',
                                'client-4.png',
                                'client-5.png',
                                'client-6.png',
                                'client-7.png',
                                'client-8.png',
                            ];
                        @endphp

                        @foreach($partners as $partner)
                            <div class="col partnership-container">
                                <div class="partnership-item">
                                    <a href="javascript:void(0)">
                                        <img 
                                            src="{{ asset('assets/image/' . $partner) }}" 
                                            alt="Partner Logo" 
                                            class="partner-logo img-fluid">
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

    <!-- Section Testimonial -->
    @include('components.sections.testimonial')

</x-layouts.frontend>