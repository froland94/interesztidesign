<x-layouts.app>
    <article class="pt-32 pb-24">
        <div class="max-w-3xl mx-auto px-6">

            <!-- Post header -->
            <header class="mb-12">
                <p class="text-xs text-neutral-400 tracking-widest uppercase mb-6">
                    {{ $post->published_at?->format('Y-m-d') }}
                </p>
                <h1 class="text-4xl sm:text-5xl font-light tracking-tight text-neutral-900 leading-tight">
                    {{ $post->title }}
                </h1>
                @if($post->excerpt)
                <p class="mt-6 text-lg text-neutral-500 font-light leading-relaxed">
                    {{ $post->excerpt }}
                </p>
                @endif
                <div class="w-12 h-px bg-neutral-200 mt-10"></div>
            </header>

            <!-- Content blocks -->
            @foreach ($post->content ?? [] as $block)

                @if ($block['type'] === 'text')
                    <div class="blog-content mb-10">
                        {!! $block['data']['content'][app()->getLocale()] ?? $block['data']['content']['hu'] ?? '' !!}
                    </div>

                @elseif ($block['type'] === 'image')
                    <figure class="mb-10">
                        <img
                            src="/images/blog/{{ $block['data']['path'] }}"
                            alt="{{ $block['data']['caption'][app()->getLocale()] ?? '' }}"
                            class="w-full rounded-2xl"
                            loading="lazy"
                        >
                        @if (!empty($block['data']['caption'][app()->getLocale()]))
                            <figcaption class="text-sm text-neutral-400 text-center mt-3">
                                {{ $block['data']['caption'][app()->getLocale()] }}
                            </figcaption>
                        @endif
                    </figure>

                @elseif ($block['type'] === 'gallery')
                    <div class="gallery-masonry-grid mb-10">
                        <div class="gallery-masonry-sizer"></div>
                        @foreach ($block['data']['images'] as $image)
                        <div class="gallery-masonry-item">
                            <a href="/images/blog/{{ $image }}" class="glightbox" data-gallery="post-gallery">
                                <img
                                    src="/images/blog/{{ $image }}"
                                    alt=""
                                    class="w-full rounded-2xl block cursor-zoom-in"
                                    loading="lazy"
                                >
                            </a>
                        </div>
                        @endforeach
                    </div>

                @endif

            @endforeach

            <!-- Back link -->
            <div class="mt-16 pt-10 border-t border-neutral-100">
                <a href="{{ route(app()->getLocale() . '.blog.index') }}"
                   class="text-xs font-semibold tracking-widest uppercase text-neutral-500 hover:text-neutral-900 transition-colors">
                    {{ __('blog.back') }}
                </a>
            </div>

        </div>
    </article>
</x-layouts.app>
