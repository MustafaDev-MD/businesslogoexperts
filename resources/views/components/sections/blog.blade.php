<!-- Section Blog -->
<div class="section">
    <div class="hero-container">
        <div class="d-flex flex-column gspace-5">
            <!-- Blog Intro -->
            <div class="row row-cols-xl-2 row-cols-1 grid-spacer-5 m-0">
                <div class="col col-xl-8 ps-0 pe-0">
                    <div class="d-flex flex-column gspace-2 animate-box animated fast animate__animated" data-animate="animate__fadeInLeft">
                        <div class="sub-heading">
                            <i class="fa-regular fa-circle-dot"></i>
                            <span>Insights & Trends</span>
                        </div>
                        <h2 class="title-heading">Latest Digital Marketing Strategies & Tips</h2>
                    </div>
                </div>
                <div class="col col-xl-4 ps-0 pe-0">
                    <div class="d-flex flex-column gspace-2 justify-content-end h-100 animate-box animated animate__animated" data-animate="animate__fadeInRight">
                        <p>Explore our latest blog articles covering industry trends, expert insights, and actionable strategies to elevate your digital marketing game.</p>
                        <div class="link-wrapper">
                            <a href="{{ route('blog') }}">View All Articles</a>
                            <i class="fa-solid fa-circle-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Cards -->
            <div class="row row-cols-md-2 row-cols-1 grid-spacer-3">
                <div class="col">
                    <a href="{{ route('single-post') }}">
                        <div class="card card-blog animate-box animated animate__animated" data-animate="animate__fadeInUp">
                            <div class="blog-image">
                                <img src="{{ asset('assets/image/dummy-img-600x400.jpg') }}" alt="Blog Image">
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-row gspace-2">
                                    <div class="d-flex flex-row gspace-1 align-items-center">
                                        <i class="fa-solid fa-calendar accent-color"></i>
                                        <span class="meta-data">April 14, 2025</span>
                                    </div>
                                    <div class="d-flex flex-row gspace-1 align-items-center">
                                        <i class="fa-solid fa-folder accent-color"></i>
                                        <span class="meta-data">Social Media</span>
                                    </div>
                                </div>
                                <a href="{{ route('single-post') }}" class="blog-link">Mastering Instagram and Facebook Ads</a>
                                <p>Lorem ipsum dolor si consectetur adipiscing elit ut elit tellus luctus nec ullamcorper mattis pulvinar dapibus leo.</p>
                                <a href="{{ route('single-post') }}" class="read-more">Read More</a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col">
                    <a href="{{ route('single-post') }}">
                        <div class="card card-blog animate-box animated animate__animated" data-animate="animate__fadeInUp">
                            <div class="blog-image">
                                <img src="{{ asset('assets/image/dummy-img-600x400.jpg') }}" alt="Blog Image">
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-row gspace-2">
                                    <div class="d-flex flex-row gspace-1 align-items-center">
                                        <i class="fa-solid fa-calendar accent-color"></i>
                                        <span class="meta-data">April 14, 2025</span>
                                    </div>
                                    <div class="d-flex flex-row gspace-1 align-items-center">
                                        <i class="fa-solid fa-folder accent-color"></i>
                                        <span class="meta-data">SEO</span>
                                    </div>
                                </div>
                                <a href="{{ route('single-post') }}" class="blog-link">Growth Strategies for Digital Business</a>
                                <p>Lorem ipsum dolor si consectetur adipiscing elit ut elit tellus luctus nec ullamcorper mattis pulvinar dapibus leo.</p>
                                <a href="{{ route('single-post') }}" class="read-more">Read More</a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>