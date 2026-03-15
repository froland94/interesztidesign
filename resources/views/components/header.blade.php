@php
    use App\Enums\Locale;
@endphp

<header {{ $attributes->merge(['class' => 'fixed top-0 left-0 w-full z-50 bg-white/70 backdrop-blur-xl border-b border-black/5']) }}>
    <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
        <a href="{{ route(app()->getLocale() . '.home') }}#{{ __('nav.anchors.home') }}" class="text-neutral-900 text-lg font-light tracking-[0.2em] uppercase hover:opacity-70 transition-opacity">
            {{ config('app.name', 'Intereszti Design') }}
        </a>

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
            <a href="{{ route(app()->getLocale() . '.blog.index') }}" class="text-neutral-500 hover:text-black text-xs font-semibold tracking-widest uppercase transition-colors">
                {{ __('nav.blog') }}
            </a>
            <a href="{{ route(app()->getLocale() . '.home') }}#{{ __('nav.anchors.contact') }}" class="text-neutral-500 hover:text-black text-xs font-semibold tracking-widest uppercase transition-colors">
                {{ __('nav.contact') }}
            </a>
        </nav>

        <div class="flex items-center gap-6">
            <div class="flex items-center gap-2 text-[10px] sm:text-xs font-bold tracking-widest uppercase">
                @php
                    $routeName = request()->route()?->getName() ?? app()->getLocale() . '.home';
                    $baseRouteName = str_replace(app()->getLocale() . '.', '', $routeName);
                    $switcherParams = view()->shared('localeSwitcherParams', []);
                @endphp
                @foreach (Locale::cases() as $locale)
                    <a href="{{ Route::has($locale->value . '.' . $baseRouteName) ? route($locale->value . '.' . $baseRouteName, $switcherParams[$locale->value] ?? []) : route($locale->value . '.home') }}"
                       class="{{ app()->getLocale() === $locale->value ? 'text-black' : 'text-neutral-400 hover:text-black/70' }} transition-colors">
                        {{ strtoupper($locale->value) }}
                    </a>
                    @if (!$loop->last)<span class="text-neutral-200">|</span>@endif
                @endforeach
            </div>
        </div>
    </div>
</header>
