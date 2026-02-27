<div class="section-footer">
    <div class="bg-footer-wrapper">
        <div class="bg-footer">
            <div class="hero-container position-relative z-2">
                <div class="d-flex flex-column gspace-2">
                    <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1 grid-spacer-5">

                        <!-- Logo & Description -->
                        <div class="col col-xl-4">
                            <div class="footer-logo-container">
                                <div class="logo-container-footer">
                                    <img src="{{ asset('assets/image/logo.png') }}" alt="Logo" class="site-logo img-fluid">
                                </div>
                                <h4>Driving Digital Growth with Innovation & Strategy</h4>
                                <p>
                                    Lorem ipsum dolor si consectetur adipiscing elit ut elit tellus luctus nec ullamcorper mattis pulvinar dapibus leo.
                                </p>
                            </div>
                        </div>

                        <!-- Quick Links -->
                        <div class="col col-xl-2">
                            <div class="footer-quick-links">
                                <h5>Quick Links</h5>
                                <ul class="footer-list">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('service') }}">Service</a></li>
                                    <li><a href="{{ route('case-studies') }}">Case Studies</a></li>
                                    <li><a href="{{ route('blog') }}">Blog</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Services -->
                        <div class="col col-xl-3">
                            <div class="footer-services-container">
                                <h5>Services</h5>
                                <ul class="footer-list">
                                    <!-- <li><a href="{{ route('single-service', ['slug' => 'social-media-marketing']) }}">Social Media Marketing</a></li>
                                    <li><a href="{{ route('single-service', ['slug' => 'seo-optimization']) }}">SEO Optimization</a></li>
                                    <li><a href="{{ route('single-service', ['slug' => 'ppc-advertising']) }}">PPC Advertising</a></li>
                                    <li><a href="{{ route('single-service', ['slug' => 'content-marketing']) }}">Content Marketing</a></li>
                                    <li><a href="{{ route('single-service', ['slug' => 'branding-strategy']) }}">Branding Strategy</a></li>
                                    <li><a href="{{ route('single-service', ['slug' => 'email-marketing']) }}">Email Marketing</a></li> -->
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
                        </div>

                        <!-- Contact & Social -->
                        <div class="col col-xl-3">
                            <div class="footer-contact-container">
                                <h5>Contact Info</h5>
                                <ul class="contact-list">
                                    <li>hello@businesslogoexperts.com</li>
                                    <li>+1 234 567 890</li>
                                    <li>123 Digital Street, New York, USA</li>
                                </ul>

                                <div class="d-flex flex-column gspace-1">
                                    <h5>Social Media</h5>
                                    <div class="social-container">
                                        <div class="social-item-wrapper">
                                            <a href="https://facebook.com" target="_blank" class="social-item">
                                                <i class="fa-brands fa-facebook"></i>
                                            </a>
                                        </div>
                                        <div class="social-item-wrapper">
                                            <a href="https://youtube.com" target="_blank" class="social-item">
                                                <i class="fa-brands fa-youtube"></i>
                                            </a>
                                        </div>
                                        <div class="social-item-wrapper">
                                            <a href="https://instagram.com" target="_blank" class="social-item">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                        </div>
                                        <div class="social-item-wrapper">
                                            <a href="https://linkedin.com" target="_blank" class="social-item">
                                                <i class="fa-brands fa-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="footer-content-spacer"></div>
                </div>

                <!-- Copyright & Legal -->
                <div class="copyright-container">
                    <span class="copyright">© 2026 Business Logo Experts. All Rights Reserved.</span>
                    <div class="d-flex flex-row gspace-2">
                        <a href="#" class="legal-link">Terms of Service</a>
                        <a href="#" class="legal-link">Privacy Policy</a>
                    </div>
                </div>

                <div class="footer-spacer"></div>
            </div>
        </div>
    </div>
</div>