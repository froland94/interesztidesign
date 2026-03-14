<!-- Services Section -->
<section id="{{ __('nav.anchors.services') }}" class="py-24 sm:py-32 bg-neutral-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Section Header -->
        <div class="max-w-3xl mb-20 text-center mx-auto">
            <p class="text-neutral-400 text-sm font-light tracking-widest uppercase mb-4">
                {{ __('hero.subtitle') }}
            </p>
            <h2 class="text-4xl sm:text-5xl font-light tracking-tight mb-6 text-neutral-900">{{ __('services.title') }}</h2>
            <p class="text-neutral-500 text-lg font-light leading-relaxed mb-4">
                {{ __('services.subtitle') }}
            </p>
            <div class="w-12 h-px bg-neutral-200 mx-auto mt-8"></div>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($products as $product)
            <div class="service-card p-8 rounded-[2rem] border border-neutral-200 bg-white/50 backdrop-blur-sm flex flex-col hover:border-neutral-300">
                <div class="mb-8">
                    @if($product->tag)
                    <span class="text-[10px] font-bold tracking-widest uppercase text-neutral-400 italic">{{ $product->tag }}</span>
                    @endif
                    <h3 class="text-xl font-medium mt-2 text-neutral-900">{{ $product->title }}</h3>
                </div>
                <p class="text-neutral-500 text-sm font-light leading-relaxed mb-8 flex-grow">
                    {{ $product->description }}
                </p>
                @if($product->includes)
                <div class="space-y-4 mb-8">
                    <h4 class="text-[10px] font-bold tracking-widest uppercase text-neutral-300">{{ __('services.includes_title') }}</h4>
                    <ul class="text-xs text-neutral-600 space-y-2 font-light">
                        @foreach($product->includes as $item)
                        <li class="flex items-start gap-2"><span>•</span> {{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="pt-8 border-t border-neutral-100 mt-auto text-center">
                    @if($product->price)
                    <div class="{{ str_contains($product->price, "\n") ? 'text-sm' : 'text-2xl' }} font-light mb-6 text-neutral-900 leading-tight">
                        {!! nl2br(e($product->price)) !!}
                    </div>
                    @endif
                    <a href="#{{ __('nav.anchors.contact') }}" class="block w-full py-3.5 px-6 rounded-full bg-neutral-900 text-white text-center text-xs font-bold tracking-widest uppercase hover:bg-black transition-all shadow-sm">
                        {{ $product->cta_text ?? __('services.cta_fallback') }}
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
