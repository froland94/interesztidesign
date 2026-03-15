<header {{ $attributes->merge(['class' => 'fixed top-0 left-0 w-full z-50 bg-white/70 backdrop-blur-xl border-b border-black/5']) }}>
    <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
        <!-- Logo / Site Name -->
        <a href="{{ route(app()->getLocale() . '.home') }}#{{ __('nav.anchors.home') }}" class="text-neutral-900 text-lg font-light tracking-[0.2em] uppercase hover:opacity-70 transition-opacity">
            {{ config('app.name', 'Intereszti Design') }}
        </a>

        <!-- Navigation -->
        <nav class="hidden md:flex items-center gap-8">
            <a href="{{ route(app()->getLocale() . '.home') }}#{{ __('nav.anchors.services') }}" class="text-neutral-500 hover:text-black text-xs font-semibold tracking-widest uppercase transition-colors">
                {{ __('nav.services') }}
            </a>
            <a href="{{ route(app()->getLocale() . '.home') }}#{{ __('nav.anchors.gallery') }}" class="text-neutral-500 hover:text-black text-xs font-semibold tracking-widest uppercase transition-colors">
                {{ __('nav.gallery') }}
            </a>
            <a href="{{ route(app()->getLocale() . '.home') }}#{{ __('nav.anchors.about') }}" class="text-neutral-500 hover:text-black text-xs font-semibold tracking-widest uppercase transition-colors">
                {{ __('nav.about') }}
            </a>
            <a href="{{ route(app()->getLocale() . '.home') }}#{{ __('nav.anchors.contact') }}" class="text-neutral-500 hover:text-black text-xs font-semibold tracking-widest uppercase transition-colors">
                {{ __('nav.contact') }}
            </a>
        </nav>

        <!-- Right Side: Utils / Language Switcher -->
        <div class="flex items-center gap-6">
            <!-- Language Switcher -->
            <div class="flex items-center gap-2 text-[10px] sm:text-xs font-bold tracking-widest uppercase">
                @php
                    $currentRoute = request()->route();
                    $routeName = $currentRoute ? $currentRoute->getName() : app()->getLocale() . '.home';
                    // Strip current locale prefix
                    $baseRouteName = str_replace(app()->getLocale() . '.', '', $routeName);
                @endphp
                <a href="{{ Route::has('hu.' . $baseRouteName) ? route('hu.' . $baseRouteName) : route('hu.home') }}"
                   class="{{ app()->getLocale() === 'hu' ? 'text-black' : 'text-neutral-400 hover:text-black/70' }} transition-colors">
                    HU
                </a>
                <span class="text-neutral-200">|</span>
                <a href="{{ Route::has('en.' . $baseRouteName) ? route('en.' . $baseRouteName) : route('en.home') }}"
                   class="{{ app()->getLocale() === 'en' ? 'text-black' : 'text-neutral-400 hover:text-black/70' }} transition-colors">
                    EN
                </a>
            </div>
        </div>
    </div>
</header>
