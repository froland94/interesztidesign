<!-- Services Section -->
<section id="szolgaltatasok" class="py-24 sm:py-32 bg-neutral-50 overflow-hidden">
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
            <!-- Vibe Check -->
            <div class="service-card p-8 rounded-[2rem] border border-neutral-200 bg-white/50 backdrop-blur-sm flex flex-col hover:border-neutral-300">
                <div class="mb-8">
                    <span class="text-[10px] font-bold tracking-widest uppercase text-neutral-400 italic">{{ __('services.vibe_check.name') }}</span>
                    <h3 class="text-xl font-medium mt-2 text-neutral-900">{{ __('services.vibe_check.title') }}</h3>
                </div>
                <p class="text-neutral-500 text-sm font-light leading-relaxed mb-8 flex-grow">
                    {{ __('services.vibe_check.description') }}
                </p>
                <div class="space-y-4 mb-8">
                    <h4 class="text-[10px] font-bold tracking-widest uppercase text-neutral-300">{{ __('services.vibe_check.includes_title') }}</h4>
                    <ul class="text-xs text-neutral-600 space-y-2 font-light">
                        @foreach(__('services.vibe_check.includes') as $item)
                        <li class="flex items-start gap-2"><span>•</span> {{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="pt-8 border-t border-neutral-100 mt-auto text-center">
                    <div class="text-2xl font-light mb-6 text-neutral-900">{{ __('services.vibe_check.price') }}</div>
                    <a href="#" class="block w-full py-3.5 px-6 rounded-full bg-neutral-900 text-white text-center text-xs font-bold tracking-widest uppercase hover:bg-black transition-all shadow-sm">
                        {{ __('services.vibe_check.cta') }}
                    </a>
                </div>
            </div>

            <!-- Based -->
            <div class="service-card p-8 rounded-[2rem] border border-neutral-200 bg-white/50 backdrop-blur-sm flex flex-col hover:border-neutral-300">
                <div class="mb-8">
                    <span class="text-[10px] font-bold tracking-widest uppercase text-neutral-400 italic">{{ __('services.based.name') }}</span>
                    <h3 class="text-xl font-medium mt-2 text-neutral-900">{{ __('services.based.title') }}</h3>
                </div>
                <p class="text-neutral-500 text-sm font-light leading-relaxed mb-8 flex-grow">
                    {{ __('services.based.description') }}
                </p>
                <div class="space-y-4 mb-8">
                    <h4 class="text-[10px] font-bold tracking-widest uppercase text-neutral-300">{{ __('services.based.includes_title') }}</h4>
                    <ul class="text-xs text-neutral-600 space-y-2 font-light">
                        @foreach(__('services.based.includes') as $item)
                        <li class="flex items-start gap-2"><span>•</span> {{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="pt-8 border-t border-neutral-100 mt-auto text-center">
                    <div class="text-2xl font-light mb-6 text-neutral-900">{{ __('services.based.price') }}</div>
                    <a href="#" class="block w-full py-3.5 px-6 rounded-full bg-neutral-900 text-white text-center text-xs font-bold tracking-widest uppercase hover:bg-black transition-all shadow-sm">
                        {{ __('services.based.cta') }}
                    </a>
                </div>
            </div>

            <!-- Full Send -->
            <div class="service-card p-8 rounded-[2rem] border border-neutral-200 bg-white/50 backdrop-blur-sm flex flex-col hover:border-neutral-300">
                <div class="mb-8">
                    <span class="text-[10px] font-bold tracking-widest uppercase text-neutral-400 italic">{{ __('services.full_send.name') }}</span>
                    <h3 class="text-xl font-medium mt-2 text-neutral-900">{{ __('services.full_send.title') }}</h3>
                </div>
                <p class="text-neutral-500 text-sm font-light leading-relaxed mb-8 flex-grow">
                    {{ __('services.full_send.description') }}
                </p>
                <div class="space-y-4 mb-8">
                    <h4 class="text-[10px] font-bold tracking-widest uppercase text-neutral-300">{{ __('services.full_send.includes_title') }}</h4>
                    <ul class="text-xs text-neutral-600 space-y-2 font-light">
                        @foreach(__('services.full_send.includes') as $item)
                        <li class="flex items-start gap-2"><span>•</span> {{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="pt-8 border-t border-neutral-100 mt-auto text-center">
                    <div class="text-2xl font-light mb-6 text-neutral-900">{{ __('services.full_send.price') }}</div>
                    <a href="#" class="block w-full py-3.5 px-6 rounded-full bg-neutral-900 text-white text-center text-xs font-bold tracking-widest uppercase hover:bg-black transition-all shadow-sm">
                        {{ __('services.full_send.cta') }}
                    </a>
                </div>
            </div>

            <!-- Lagom -->
            <div class="service-card p-8 rounded-[2rem] border border-neutral-200 bg-white/50 backdrop-blur-sm flex flex-col hover:border-neutral-300">
                <div class="mb-8">
                    <span class="text-[10px] font-bold tracking-widest uppercase text-neutral-400 italic">{{ __('services.lagom.name') }}</span>
                    <h3 class="text-xl font-medium mt-2 text-neutral-900">{{ __('services.lagom.title') }}</h3>
                </div>
                <p class="text-neutral-500 text-sm font-light leading-relaxed mb-8 flex-grow">
                    {{ __('services.lagom.description') }}
                </p>
                <div class="space-y-4 mb-8">
                    <h4 class="text-[10px] font-bold tracking-widest uppercase text-neutral-300">{{ __('services.lagom.includes_title') }}</h4>
                    <ul class="text-xs text-neutral-600 space-y-2 font-light">
                        @foreach(__('services.lagom.includes') as $item)
                        <li class="flex items-start gap-2"><span>•</span> {{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="pt-8 border-t border-neutral-100 mt-auto text-center">
                    <div class="space-y-1 mb-6">
                        <div class="text-sm font-light text-neutral-500">{{ __('services.lagom.price_kitchen') }}</div>
                        <div class="text-sm font-light text-neutral-500">{{ __('services.lagom.price_wardrobe') }}</div>
                    </div>
                    <a href="#" class="block w-full py-3.5 px-6 rounded-full bg-neutral-900 text-white text-center text-xs font-bold tracking-widest uppercase hover:bg-black transition-all shadow-sm">
                        {{ __('services.lagom.cta') }}
                    </a>
                </div>
            </div>


        </div>
    </div>
</section>
