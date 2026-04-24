<x-layouts.frontend
    :title="$post['title']"
    :description="$post['description']">

    <!-- Section Banner -->
    <x-sections.banner
        :title="$post['heading']"
        parent="Blog"
        parent-link="{{ route('blog') }}"
        current="{{ $post['title'] }}" />

    <!-- Section Post -->
    <div class="section">
        <div class="hero-container">
            <div class="row row-cols-xl-2 row-cols-1 grid-spacer-5">

                <!-- ================= LEFT SIDEBAR ================= -->
                <div class="col col-xl-4 order-2 order-xl-1">
                    <div class="d-flex flex-column flex-md-row flex-xl-column gspace-5">

                        <!-- Recent Posts -->
                        <div class="card recent-post">
                            <h4>Recent Blog</h4>

                            @foreach($recent as $item)
                            <div class="d-flex flex-row w-100 gspace-1 mb-2">

                                <div class="image-container">
                                    <img src="{{ asset($item['image']) }}" alt="{{ $post['alt-text'] }}" class="img-fluid">
                                </div>

                                <div class="d-grid">

                                    <div class="d-flex flex-row gspace-1 align-items-center">
                                        <i class="fa-solid fa-calendar accent-color"></i>
                                        <span class="meta-data-post">
                                            {{ $item['date'] }}
                                        </span>
                                    </div>

                                    <a href="{{ route('single-post', $item['slug']) }}" class="blog-link-post">
                                        {{ $item['title'] }}
                                    </a>

                                </div>

                            </div>
                            @endforeach

                        </div>

                        <!-- CTA -->
                        <div class="cta-service-banner">
                            <div class="spacer"></div>
                            <h3 class="title-heading">
                                {{ $post['cta']['title'] ?? 'Transform Your Business with Marko!' }}
                            </h3>
                            <p>
                                {{ $post['cta']['desc'] ?? 'Take your digital marketing to the next level.' }}
                            </p>
                            <div class="link-wrapper">
                                <a href="{{ route('about') }}">Read More</a>
                                <i class="fa-solid fa-circle-arrow-right"></i>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ================= MAIN CONTENT ================= -->
                <div class="col col-xl-8 order-1 order-xl-2">
                    <div class="d-flex flex-column gspace-2">

                        <!-- Image -->
                        <div class="post-image">
                            <img src="{{ asset($post['image']) }}" alt="{{ $post['alt-text'] }}" class="img-fluid">
                        </div>

                        <!-- Title -->
                        {{--<h3>{{ $post['title'] }}</h3>--}}
                        <div class="underline-muted-full"></div>

                        <!-- Meta -->
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <div class="d-flex flex-row align-items-center gspace-2">

                                <div class="d-flex flex-row gspace-1 align-items-center">
                                    <i class="fa-solid fa-calendar accent-color"></i>
                                    <span class="meta-data-post">{{ $post['date'] }}</span>
                                </div>

                                <div class="d-flex flex-row gspace-1 align-items-center">
                                    <i class="fa-solid fa-folder accent-color"></i>
                                    <span class="meta-data-post">{{ $post['category'] }}</span>
                                </div>

                            </div>

                            <div class="d-flex flex-row gspace-1 align-items-center">
                                <i class="fa-solid fa-user accent-color"></i>
                                <span class="meta-data">{{ $post['author'] }}</span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div>
                            @foreach($post['content'] as $block)

                            @if($block['type'] === 'p')
                            <p class="mt-2">{{ $block['text'] }}</p>

                            @elseif($block['type'] === 'h2')
                            <h2 class="mt-4">{{ $block['text'] }}</h2>

                            @elseif($block['type'] === 'h3')
                            <h3 class="mt-3">{{ $block['text'] }}</h3>

                            @elseif($block['type'] === 'h4')
                            <h4 class="mt-3">{{ $block['text'] }}</h4>

                            @elseif($block['type'] === 'h5')
                            <h5 class="mt-3">{{ $block['text'] }}</h5>

                            @elseif($block['type'] === 'list')
                            <ul>
                                @foreach($block['items'] as $item)
                                <li>{{ $item }}</li>
                                @endforeach
                            </ul>

                            @elseif($block['type'] === 'image')
                            <img src="{{ asset($block['src']) }}" class="img-fluid">

                            @endif

                            @endforeach
                        </div>

                        <!-- Quote -->
                        {{-- @if(isset($post['quote']))
                        <div class="quote-container">
                            <div>
                                <div class="icon-wrapper">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>

                            <p class="quote">
                                {{ $post['quote']['text'] }}
                        </p>

                        <div>
                            <h5>{{ $post['quote']['author'] }}</h5>
                            <p class="quote-description">
                                {{ $post['quote']['role'] }}
                            </p>
                        </div>
                    </div>
                    @endif --}}

                </div>
            </div>

        </div>
    </div>
    </div>

</x-layouts.frontend>