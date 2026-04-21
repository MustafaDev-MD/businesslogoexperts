<div class="section">
    <div class="hero-container">
        <div class="newsletter-wrapper">
            <div class="newsletter-layout">
                <div class="spacer"></div>
                <div class="d-flex flex-column gspace-5 position-relative z-2">
                    <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                        <h3 class="title-heading">Stay ahead with ideas that keep your brand growing</h3>
                        <p>Get insights, practical strategies, and creative ideas that help you build smarter and move faster.</p>
                    </div>
                    <!-- <form action="newsletter.submit" method="POST" id="newsletterForm" class="needs-validation animate-box animated animate__animated" data-animate="animate__fadeInRight">
                        @csrf
                        <div class="input-container">
                            <input type="email" name="newsletter-email" id="newsletter-email" placeholder="Give your best email" required>
                            <p class="error-text hidden"></p>
                        </div>
                        <button class="btn btn-accent" type="submit">
                            <span class="btn-title"><span>Subscribe</span></span>
                            <span class="icon-circle"><i class="fa-solid fa-arrow-right"></i></span>
                        </button>
                    </form> -->
                    <a href="{{ route('contact') }}" class="align-self-center">
                        <button class="btn btn-accent cta-btn" type="submit">
                            <span class="btn-title"><span>Subscribe</span></span>
                            <span class="icon-circle"><i class="fa-solid fa-arrow-right"></i></span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>