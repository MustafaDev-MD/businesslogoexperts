<!-- <div class="section-banner">
    <div class="banner-layout-wrapper">
        <div class="banner-layout">
            <div class="d-flex flex-column text-center align-items-center gspace-2">
                <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">
                    {{ $title }}
                </h2>
                <nav class="breadcrumb">
                    <a href="{{ route('home') }}" class="gspace-2">Home</a>
                    @if(isset($parent))
                        <span class="separator-link">/</span>
                        <a href="{{ $parentLink ?? '#' }}">{{ $parent }}</a>
                    @endif
                    <span class="separator-link">/</span>
                    <p class="current-page">{{ $current }}</p>
                </nav>
            </div>
            <div class="spacer"></div>
        </div>
    </div>
</div> -->

@props(['title', 'parent' => null, 'parentLink' => null, 'current'])

<div class="section-banner">
    <div class="banner-layout-wrapper">
        <div class="banner-layout">
            <div class="d-flex flex-column text-center align-items-center gspace-2">
                <h2 class="title-heading animate-box animated animate__animated" data-animate="animate__fadeInRight">
                    {{ $title }}
                </h2>
                <nav class="breadcrumb">
                    <a href="{{ route('home') }}" class="gspace-2">Home</a>

                    {{-- Check if parent exists --}}
                    @if($parent)
                    <span class="separator-link">/</span>

                    @if($parentLink && Route::has($parentLink))
                    <a href="{{ route($parentLink) }}">
                        {{ $parent }}
                    </a>
                    @else
                    <a href="{{ url($parentLink ?? '#') }}">
                        {{ $parent }}
                    </a>
                    @endif
                    @endif

                    <span class="separator-link">/</span>
                    <p class="current-page">{{ $current }}</p>
                </nav>
            </div>
            <div class="spacer"></div>
        </div>
    </div>
</div>