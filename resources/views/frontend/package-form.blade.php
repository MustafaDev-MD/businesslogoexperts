    <x-layouts.frontend
        title="Package Form"
        description="Learn about Business Logo Experts, our mission, values, and the team behind our innovative digital marketing strategies that help businesses grow.">

        <!-- Section Banner -->
        <x-banner
            title="Package Form"
            current="Package Form" />

        <!-- Section Contact -->
        <div class="section">
            <div class="hero-container">
                <div class="row row-cols-xl-2 row-cols-1">
                    <div class="col col-xl-4">
                        <div class="card card-pricing pricing-highlight animate-box animated slow animate__animated" data-animate="animate__fadeInUp">
                            <div class="spacer"></div>
                            <h4><i class="fa-regular fa-circle-dot"></i> {{ $service['name'] }} / {{ $package['name'] }}</h4>
                            <p>{{ $package['description'] }}</p>
                            <div class="d-flex flex-row gspace-1 align-items-center">
                                <h3>${{ $package['price'] }}</h3>
                                <p>/Month</p>
                            </div>
                            <!-- <a href="#" class="btn btn-accent">
                                <div class="btn-title">
                                    <span>View Details</span>
                                </div>
                                <div class="icon-circle">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </div>
                            </a> -->
                            <!-- <div class="core-benefits">
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
                            </div> -->
                            <ul class="check-list">
                                @foreach($package['features'] as $feature)
                                <li>
                                    <a href="javascript:void(0)">{{ $feature }}</a>
                                </li>
                                @endforeach
                            </ul>
                            <!-- <a href="{{ url()->previous() }}"> -->
                            <div class="link-wrapper">
                                <a href="{{ url()->previous() }}#pricing">
                                    <i class="fa-solid fa-circle-arrow-left"></i>
                                    Review/Change Package
                                </a>
                            </div>
                            <!-- </a> -->
                        </div>
                    </div>

                    <div class="col col-xl-8">

                        <div class="form-layout-wrapper">
                            <div class="card form-layout">
                                <h3 class="title-heading">Let's Talk About Your Next Project</h3>
                                <form id="packageForm" action="{{ route('package.submit') }}" method="POST" enctype="multipart/form-data" class="form">
                                    @csrf

                                    <!-- Honeypot -->
                                    <input type="text" name="website" style="position:absolute; left:-9999px;">

                                    <!-- Time protection -->
                                    <input type="hidden" name="form_time" value="{{ time() }}">

                                    <input type="hidden" name="service" value="{{ $service['name'] }}">
                                    <input type="hidden" name="package" value="{{ $package['name'] }}">

                                    <div class="row row-cols-md-2 row-cols-1 g-3">
                                        <div class="col">
                                            <input type="text" name="first_name" id="first-name" placeholder="First Name" value="{{ old('first_name') }}" required>
                                        </div>
                                        <div class="col">
                                            <input type="text" name="last_name" id="last-name" placeholder="Last Name" value="{{ old('last_name') }}">
                                        </div>
                                    </div>

                                    <div class="row row-cols-md-2 row-cols-1 g-3">
                                        <div class="col">
                                            <input type="email" name="email" id="email" placeholder="Email Address" value="{{ old('email') }}" required>
                                        </div>
                                        <div class="col">
                                            <input type="text" name="subject" id="subject" placeholder="Subject" value="{{ old('subject') }}">
                                        </div>
                                    </div>

                                    <div class="file-upload-wrapper">
                                        <label class="file-upload-label">
                                            <input type="file"
                                                name="files[]"
                                                multiple
                                                hidden
                                                id="fileInput"
                                                accept=".jpg,.png,.gif,.mp4,.pdf,.doc,.docx,.zip,.txt">

                                            <div class="file-upload-box">
                                                <i class="fa-solid fa-cloud-arrow-up"></i>
                                                <p>Click to upload files</p>
                                                <span>or drag & drop</span>
                                                <span class="file-types">Allowed: JPG, PNG, GIF, MP4, PDF, DOC, DOCX, ZIP, TXT</span>
                                            </div>
                                        </label>

                                        <div id="fileList" class="file-list"></div>
                                    </div>

                                    <textarea name="message" id="message" rows="5" placeholder="Message" required>{{ old('message') }}</textarea>

                                    <!-- reCAPTCHA -->
                                    <!-- <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div> -->

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
                        <div class="gtoast-container" id="gtoastContainer"></div>

                    </div>

                </div>
            </div>
        </div>

        <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        <!-- Section Maps -->
        <div class="section pt-0">
            <div class="hero-container">
                <div class="row row-cols-xl-2 row-cols-1">
                <div class="col col-xl-7">
                    <iframe loading="lazy" class="maps package-form-maps overflow-hidden"
                        src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near"
                        title="London Eye, London, United Kingdom" aria-label="London Eye, London, United Kingdom">
                    </iframe>
                </div>
                    <div class="col col-xl-5">
                        <div class="contact-title-wrapper">
                            <div class="card contact-title">
                                <div class="sub-heading">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    <span>Reach out to us</span>
                                </div>
                                <h3 class="title-heading">Get in Touch</h3>
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
                                        <h5>hello@businesslogoexperts.com</h5>
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
                </div>
            </div>
        </div>

    </x-layouts.frontend>