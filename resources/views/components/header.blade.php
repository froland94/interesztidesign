<header {{ $attributes->merge(['class' => 'fixed top-0 left-0 w-full z-50 bg-white/70 backdrop-blur-xl border-b border-black/5']) }}>
    <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
        <!-- Logo / Site Name -->
        <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="text-neutral-900 text-lg font-light tracking-[0.2em] uppercase hover:opacity-70 transition-opacity">
            {{ config('app.name', 'Intereszti Design') }}
        </a>

        <!-- Navigation -->
        <nav class="hidden md:flex items-center gap-8">
            <a href="#szolgaltatasok" class="text-neutral-500 hover:text-black text-xs font-semibold tracking-widest uppercase transition-colors">
                {{ __('nav.services') }}
            </a>
            <a href="#rolam" class="text-neutral-500 hover:text-black text-xs font-semibold tracking-widest uppercase transition-colors">
                {{ __('nav.about') }}
            </a>
        </nav>



        <!-- Right Side: Utils / Language Switcher -->
        <div class="flex items-center gap-6">
            <!-- Language Switcher -->
            <div class="flex items-center gap-2 text-[10px] sm:text-xs font-bold tracking-widest uppercase">
                <a href="{{ route('home', ['locale' => 'hu']) }}" 
                   class="{{ app()->getLocale() === 'hu' ? 'text-black' : 'text-neutral-400 hover:text-black/70' }} transition-colors">
                    HU
                </a>
                <span class="text-neutral-200">|</span>
                <a href="{{ route('home', ['locale' => 'en']) }}" 
                   class="{{ app()->getLocale() === 'en' ? 'text-black' : 'text-neutral-400 hover:text-black/70' }} transition-colors">
                    EN
                </a>
            </div>
        </div>
    </div>
</header>
