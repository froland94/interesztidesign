<x-layouts.app>
    <section class="pt-32 pb-24">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Header -->
            <div class="max-w-3xl mb-20 text-center mx-auto">
                <h1 class="text-4xl sm:text-5xl font-light tracking-tight mb-6 text-neutral-900">Blog</h1>
                <div class="w-12 h-px bg-neutral-200 mx-auto mt-8"></div>
            </div>

            @if($posts->isEmpty())
                <p class="text-center text-neutral-400 text-sm">
                    {{ __('blog.empty') }}
                </p>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                    @foreach ($posts as $post)
                    <article class="group flex flex-col">
                        @if ($post->thumbnail)
                        <a href="{{ route(app()->getLocale() . '.blog.show', $post->getTranslation('slug', app()->getLocale())) }}" class="block overflow-hidden rounded-2xl mb-5">
                            <img
                                src="/blog-images/{{ $post->thumbnail }}"
                                alt="{{ $post->title }}"
                                class="w-full aspect-video object-cover transition-transform duration-500 group-hover:scale-105"
                                loading="lazy"
                            >
                        </a>
                        @endif

                        <p class="text-xs text-neutral-400 tracking-widest uppercase mb-3">
                            {{ $post->published_at?->format('Y-m-d') }}
                        </p>

                        <h2 class="text-xl font-light text-neutral-900 mb-3 leading-snug">
                            <a href="{{ route(app()->getLocale() . '.blog.show', $post->getTranslation('slug', app()->getLocale())) }}" class="hover:opacity-60 transition-opacity">
                                {{ $post->title }}
                            </a>
                        </h2>

                        <p class="text-neutral-500 text-sm leading-relaxed mb-5 grow">
                            {{ $post->excerpt }}
                        </p>

                        <a href="{{ route(app()->getLocale() . '.blog.show', $post->getTranslation('slug', app()->getLocale())) }}"
                           class="text-xs font-semibold tracking-widest uppercase text-[#c0392b] hover:opacity-60 transition-opacity">
                            {{ __('blog.read_more') }}
                        </a>
                    </article>
                    @endforeach
                </div>
            @endif

        </div>
    </section>
</x-layouts.app>
