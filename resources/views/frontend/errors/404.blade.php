<x-layouts.frontend
    title="404 | Page Not Found"
    description="Sorry, the page you are looking for does not exist.">

    <!-- 404 Section -->
    <div class="section-404">
        <div class="banner-layout-404">
            <div class="layout-404 text-center">
                <span class="text-404 title-heading animate-box animate__animated" data-animate="animate__fadeInRight">
                    404
                </span>
                <h3>Oops! Page Not Found</h3>
                <p>We couldn't find the page you're looking for. It might have been removed, renamed, or never existed.</p>
                <div class="mt-4">
                    <a href="{{ route('home') }}" class="btn btn-accent">
                        <div class="btn-title">
                            <span>Back to Home</span>
                        </div>
                        <div class="icon-circle">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</x-layouts.frontend>