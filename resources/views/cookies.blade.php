<x-layouts.app :title="__('cookies.title')">
    <div class="pt-32 pb-24">
        <div class="max-w-3xl mx-auto px-6">
            <header class="mb-16">
                <h1 class="text-4xl sm:text-5xl text-neutral-900 font-light tracking-tight mb-6">
                    {{ __('cookies.title') }}
                </h1>
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 text-sm text-neutral-400 font-light italic">
                    <p>{{ __('cookies.last_update') }}</p>
                    <p>{{ __('cookies.intro_geo') }}</p>
                </div>
            </header>

            <div class="prose prose-neutral max-w-none prose-headings:font-light prose-headings:text-neutral-900 prose-p:text-neutral-500 prose-p:font-light prose-p:leading-relaxed prose-li:text-neutral-500 prose-li:font-light space-y-12">
                
                <!-- Section 1 -->
                <section>
                    <h2 class="text-2xl mb-4">{{ __('cookies.sections.intro.title') }}</h2>
                    <p>{!! __('cookies.sections.intro.content', ['url' => '<a href="' . config('app.url') . '" class="text-neutral-900 hover:underline">' . parse_url(config('app.url'), PHP_URL_HOST) . '</a>']) !!}</p>
                </section>

                <!-- Section 2 -->
                <section>
                    <h2 class="text-2xl mb-4">{{ __('cookies.sections.what_are_cookies.title') }}</h2>
                    <p>{{ __('cookies.sections.what_are_cookies.content') }}</p>
                </section>

                <!-- Section 3 -->
                <section>
                    <h2 class="text-2xl mb-4">{{ __('cookies.sections.what_are_scripts.title') }}</h2>
                    <p>{{ __('cookies.sections.what_are_scripts.content') }}</p>
                </section>

                <!-- Section 4 -->
                <section>
                    <h2 class="text-2xl mb-4">{{ __('cookies.sections.what_is_beacon.title') }}</h2>
                    <p>{{ __('cookies.sections.what_is_beacon.content') }}</p>
                </section>

                <!-- Section 5 -->
                <section class="space-y-8">
                    <h2 class="text-2xl mb-4">{{ __('cookies.sections.cookies.title') }}</h2>
                    
                    <div class="space-y-4">
                        <h3 class="text-lg text-neutral-900 font-medium">{{ __('cookies.sections.cookies.technical.title') }}</h3>
                        <p>{{ __('cookies.sections.cookies.technical.content') }}</p>
                    </div>

                    <div class="space-y-4">
                        <h3 class="text-lg text-neutral-900 font-medium">{{ __('cookies.sections.cookies.statistical.title') }}</h3>
                        <p>{{ __('cookies.sections.cookies.statistical.content') }}</p>
                    </div>

                    <div class="space-y-4">
                        <h3 class="text-lg text-neutral-900 font-medium">{{ __('cookies.sections.cookies.marketing.title') }}</h3>
                        <p>{{ __('cookies.sections.cookies.marketing.content') }}</p>
                        <div class="p-4 bg-neutral-50 rounded-2xl border border-neutral-100 text-sm italic">
                            {{ __('cookies.sections.cookies.marketing.consent_mode') }}
                        </div>
                    </div>
                </section>

                <!-- Section 6 -->
                <section>
                    <h2 class="text-2xl mb-4">{{ __('cookies.sections.placed_cookies.title') }}</h2>
                    <p>{{ __('cookies.sections.placed_cookies.content') }}</p>
                </section>

                <!-- Section 7 -->
                <section class="space-y-4">
                    <h2 class="text-2xl mb-4">{{ __('cookies.sections.consent.title') }}</h2>
                    <p>{{ __('cookies.sections.consent.content') }}</p>
                    <p class="text-sm italic text-neutral-400">{{ __('cookies.sections.consent.manage') }}</p>
                </section>

                <!-- Section 8 -->
                <section>
                    <h2 class="text-2xl mb-4">{{ __('cookies.sections.enable_disable.title') }}</h2>
                    <p>{{ __('cookies.sections.enable_disable.content') }}</p>
                </section>

                <!-- Section 9 -->
                <section class="space-y-4">
                    <h2 class="text-2xl mb-4">{{ __('cookies.sections.rights.title') }}</h2>
                    <p>{{ __('cookies.sections.rights.intro') }}</p>
                    <ul class="list-disc pl-5 space-y-2">
                        @foreach(__('cookies.sections.rights.list') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                    <p>{{ __('cookies.sections.rights.outro') }}</p>
                </section>

                <!-- Section 10 -->
                <section>
                    <h2 class="text-2xl mb-4">{{ __('cookies.sections.contact.title') }}</h2>
                    <p class="mb-6">{{ __('cookies.sections.contact.intro') }}</p>
                    
                    <div class="bg-neutral-50 p-8 rounded-3xl border border-neutral-100 space-y-2">
                        <p class="text-neutral-900 font-medium">{{ config('contact.name') }}</p>
                        <p>{{ __('footer.subtitle') }}</p>
                        <p>
                            Web: <a href="{{ config('app.url') }}" class="text-neutral-900 hover:underline">{{ parse_url(config('app.url'), PHP_URL_HOST) }}</a>
                        </p>
                        <p>
                            Email: <a href="mailto:{{ config('contact.email') }}" class="text-neutral-900 hover:underline">{{ config('contact.email') }}</a>
                        </p>
                    </div>
                </section>

            </div>
        </div>
    </div>
</x-layouts.app>
