@if($galleries->isNotEmpty())
<!-- Gallery / Portfolio Section -->
<section id="munkak" class="py-24 sm:py-32 bg-neutral-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="max-w-3xl mb-20 text-center mx-auto">
            <h2 class="text-4xl sm:text-5xl font-light tracking-tight mb-6 text-neutral-900">Munkáim</h2>
            <div class="w-12 h-px bg-neutral-200 mx-auto mt-8"></div>
        </div>

        <!-- Masonry Grid -->
        <div class="gallery-masonry-grid">
            <div class="gallery-masonry-sizer"></div>
            @foreach($galleries as $gallery)
            <div class="gallery-masonry-item">
                <a href="/gallery/{{ $gallery->image }}" class="glightbox" data-gallery="gallery">
                    <img
                        src="/gallery/{{ $gallery->image }}"
                        alt="{{ $gallery->alt ?? '' }}"
                        class="w-full rounded-2xl block cursor-zoom-in"
                        loading="lazy"
                    >
                </a>
            </div>
            @endforeach
        </div>

    </div>
</section>
@endif
