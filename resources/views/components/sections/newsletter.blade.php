<div class="section">
    <div class="hero-container">
        <div class="newsletter-wrapper">
            <div class="newsletter-layout">
                <div class="spacer"></div>
                <div class="d-flex flex-column gspace-5 position-relative z-2">
                    <div class="d-flex flex-column gspace-2 animate-box animated animate__animated" data-animate="animate__fadeInLeft">
                        <h3 class="title-heading">Stay ahead with brand thinking that scales</h3>
                        <p>Subscribe for monthly insights, case studies, and quick design tests you can run tomorrow.</p>
                    </div>
                    <form action="newsletter.submit" method="POST" id="newsletterForm" class="needs-validation animate-box animated animate__animated" data-animate="animate__fadeInRight">
                        @csrf
                        <div class="input-container">
                            <input type="email" name="newsletter-email" id="newsletter-email" placeholder="Give your best email" required>
                            <p class="error-text hidden"></p>
                        </div>
                        <button class="btn btn-accent" type="submit">
                            <span class="btn-title"><span>Subscribe</span></span>
                            <span class="icon-circle"><i class="fa-solid fa-arrow-right"></i></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>