<x-layouts.frontend
    title="About Us"
    description="Learn about Business Logo Experts, our mission, values, and the team behind our innovative digital marketing strategies that help businesses grow.">

    <!-- Section Banner -->
    <x-banner
        title="Contact Us"
        current="Contact Us" />

    <!-- Section Contact -->
    <div class="section">
        <div class="hero-container">
            <div class="row row-cols-xl-2 row-cols-1 g-5">
                <div class="col col-xl-5">
                    <div class="contact-title-wrapper">
                        <div class="card contact-title">
                            <div class="sub-heading">
                                <i class="fa-regular fa-circle-dot"></i>
                                <span>Reach out to us</span>
                            </div>
                            <h2 class="title-heading">Get in Touch</h2>
                            <p>Reach out to us for tailored digital solutions that drive results sollicitudin nec.</p>

                            <div class="d-flex flex-column flex-md-row align-items-center text-md-start text-center gspace-2">
                                <div>
                                    <div class="icon-wrapper">
                                        <div class="icon-box">
                                            <i class="fa-solid fa-phone-volume accent-color"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <span>Phone Number</span>
                                    <h5>+1 (62) 987 7543</h5>
                                </div>
                            </div>

                            <div class="d-flex flex-column flex-md-row align-items-center text-md-start text-center gspace-2">
                                <div>
                                    <div class="icon-wrapper">
                                        <div class="icon-box">
                                            <i class="fa-solid fa-envelope accent-color"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <span>Email Address</span>
                                    <h5>hello@markoagency.com</h5>
                                </div>
                            </div>

                            <div class="d-flex flex-column flex-md-row align-items-center text-md-start text-center gspace-2">
                                <div>
                                    <div class="icon-wrapper">
                                        <div class="icon-box">
                                            <i class="fa-solid fa-location-dot accent-color"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <span>Office Address</span>
                                    <h5>Marko HQ - 902 Digital Lane, San Francisco, CA 94110, USA</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-xl-7">
                    @if(session('success'))
                    <div id="success-message" class="alert success">
                        <span class="check-icon"><i class="fa-solid fa-2xl fa-check"></i></span>
                        <p>{{ session('success') }}</p>
                    </div>
                    @endif

                    @if(session('error'))
                    <div id="error-message" class="alert error">
                        <span class="cross-icon"><i class="fa-solid fa-2xl fa-xmark"></i></span>
                        <p>{{ session('error') }}</p>
                    </div>
                    @endif

                    <div class="form-layout-wrapper">
                        <div class="card form-layout">
                            <h3 class="title-heading">Let's Talk About Your Next Project</h3>
                            <form action="#" method="POST" id="contactForm" class="form">
                                @csrf
                                <div class="row row-cols-md-2 row-cols-1 g-3">
                                    <div class="col">
                                        <input type="text" name="first_name" id="first-name" placeholder="First Name" value="{{ old('first_name') }}">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="last_name" id="last-name" placeholder="Last Name" value="{{ old('last_name') }}">
                                    </div>
                                </div>

                                <div class="row row-cols-md-2 row-cols-1 g-3">
                                    <div class="col">
                                        <input type="email" name="email" id="email" placeholder="Email Address" required value="{{ old('email') }}">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="subject" id="subject" placeholder="Subject" value="{{ old('subject') }}">
                                    </div>
                                </div>

                                <textarea name="message" id="message" rows="5" placeholder="Message">{{ old('message') }}</textarea>

                                <div class="form-button-container">
                                    <button type="submit" class="btn btn-accent">
                                        <span class="btn-title">
                                            <span>Send a Message</span>
                                        </span>
                                        <span class="icon-circle">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Section Maps -->
    <div class="section pt-0">
        <div class="hero-container">
            <iframe loading="lazy" class="maps overflow-hidden"
                src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near"
                title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom">
            </iframe>
        </div>
    </div>

</x-layouts.frontend>