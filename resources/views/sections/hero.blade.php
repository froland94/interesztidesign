<!-- Hero Section -->
<section class="relative h-screen w-full overflow-hidden bg-neutral-100">
    <!-- Hero Image Container -->
    <div class="absolute inset-0">
        <img src="{{ asset('images/hero.webp') }}"
             alt="Intereszti Design Hero"
             class="w-full h-full object-cover hero-zoom">
    </div>

    <!-- Subtle Light Gradient Overlays -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/10 via-transparent to-black/20"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-black/5 via-transparent to-black/5"></div>

    <!-- Scroll Indicator -->
    <a href="#szolgaltatasok" class="absolute bottom-12 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 opacity-60 hover:opacity-100 transition-opacity animate-bounce">
        <div class="w-px h-12 bg-gradient-to-b from-white to-transparent"></div>
    </a>
</section>
