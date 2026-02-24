<x-layouts.frontend
    title="Case Studies"
    description="Explore real success stories from Business Logo Experts and see how our digital marketing strategies have helped businesses achieve measurable growth.">

    <!-- Section Banner -->
    <x-banner
        title="Case Studies"
        current="Case Studies" />

    <!-- Section Case Studies -->
    @include('components.sections.case-studies')

    <!-- Section Modal Video -->
    <div class="section p-0">
        <div id="modal-overlay" class="modal-overlay">
            <span class="modal-close"><i class="fa-solid fa-xmark"></i></span>
            <div class="video-modal">
                <iframe id="modal-video-frame" class="ifr-video" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!-- Section Testimonial -->
    @include('components.sections.testimonial')

</x-layouts.frontend>