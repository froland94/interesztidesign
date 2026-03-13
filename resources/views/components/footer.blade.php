<footer {{ $attributes->merge(['class' => 'w-full py-12 bg-neutral-50 text-neutral-500 text-sm font-light tracking-wide']) }}>
    <div class="max-w-7xl mx-auto px-6 text-center">
        <div class="space-y-1">
            <p class="text-neutral-900 font-medium">{{ __('footer.hours') }}</p>
            <p>{{ __('footer.closed') }}</p>
        </div>
        <div class="mt-8 pt-8 border-t border-neutral-200 text-xs text-neutral-400">
            &copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('footer.rights') }}
        </div>
    </div>


</footer>
