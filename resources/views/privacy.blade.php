<x-layouts.app :title="__('privacy.title')">
    <div class="pt-32 pb-24">
        <div class="max-w-3xl mx-auto px-6">
            <header class="mb-16">
                <h1 class="text-4xl sm:text-5xl text-neutral-900 font-light tracking-tight mb-6">
                    {{ __('privacy.title') }}
                </h1>
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 text-sm text-neutral-400 font-light italic">
                    <p>{{ __('privacy.last_update') }}</p>
                    <p>{{ __('privacy.intro_geo') }}</p>
                </div>
            </header>

            <div class="prose prose-neutral max-w-none prose-headings:font-light prose-headings:text-neutral-900 prose-p:text-neutral-500 prose-p:font-light prose-p:leading-relaxed prose-li:text-neutral-500 prose-li:font-light space-y-12">
                
                <!-- Section 1: Controller -->
                <section>
                    <h2 class="text-2xl mb-4">{{ __('privacy.sections.controller.title') }}</h2>
                    <div class="space-y-1">
                        <p>{{ __('privacy.sections.controller.name', ['name' => config('contact.name')]) }}</p>
                        <p>{{ __('privacy.sections.controller.contact', ['email' => config('contact.email')]) }}</p>
                        <p>{{ __('privacy.sections.controller.website', ['url' => parse_url(config('app.url'), PHP_URL_HOST)]) }}</p>
                    </div>
                </section>

                <!-- Section 2: Purpose -->
                <section>
                    <h2 class="text-2xl mb-4">{{ __('privacy.sections.purpose.title') }}</h2>
                    <p>{{ __('privacy.sections.purpose.intro') }}</p>
                    <ul class="list-disc pl-5 space-y-2 mb-4">
                        @foreach(__('privacy.sections.purpose.list') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                    <p>{{ __('privacy.sections.purpose.outro') }}</p>
                </section>

                <!-- Section 3: Scope -->
                <section class="space-y-8">
                    <h2 class="text-2xl mb-4">{{ __('privacy.sections.scope.title') }}</h2>
                    <p>{{ __('privacy.sections.scope.intro') }}</p>
                    
                    <div class="space-y-4">
                        <h3 class="text-lg text-neutral-900 font-medium">{{ __('privacy.sections.scope.mandatory.title') }}</h3>
                        <ul class="list-disc pl-5 space-y-1">
                            @foreach(__('privacy.sections.scope.mandatory.list') as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="space-y-4">
                        <h3 class="text-lg text-neutral-900 font-medium">{{ __('privacy.sections.scope.optional.title') }}</h3>
                        <ul class="list-disc pl-5 space-y-1">
                            @foreach(__('privacy.sections.scope.optional.list') as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                </section>

                <!-- Section 4: Legal Basis -->
                <section>
                    <h2 class="text-2xl mb-4">{{ __('privacy.sections.legal_basis.title') }}</h2>
                    <p>{{ __('privacy.sections.legal_basis.content') }}</p>
                </section>

                <!-- Section 5: Storage -->
                <section class="space-y-4">
                    <h2 class="text-2xl mb-4">{{ __('privacy.sections.storage.title') }}</h2>
                    <p>{{ __('privacy.sections.storage.intro') }}</p>
                    <ul class="list-disc pl-5 space-y-1 mb-4">
                        @foreach(__('privacy.sections.storage.list') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                    <p class="font-medium text-neutral-900">{{ __('privacy.sections.storage.processor') }}</p>
                    <p>{{ __('privacy.sections.storage.extra') }}</p>
                </section>

                <!-- Section 6: Duration -->
                <section>
                    <h2 class="text-2xl mb-4">{{ __('privacy.sections.duration.title') }}</h2>
                    <p>{{ __('privacy.sections.duration.intro') }}</p>
                    <ul class="list-disc pl-5 space-y-1">
                        @foreach(__('privacy.sections.duration.list') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </section>

                <!-- Section 7: Access -->
                <section>
                    <h2 class="text-2xl mb-4">{{ __('privacy.sections.access.title') }}</h2>
                    <p>{{ __('privacy.sections.access.intro') }}</p>
                    <ul class="list-disc pl-5 space-y-1 mb-4">
                        @foreach(__('privacy.sections.access.list') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                    <p>{{ __('privacy.sections.access.outro') }}</p>
                </section>

                <!-- Section 8: Rights -->
                <section class="space-y-4">
                    <h2 class="text-2xl mb-4">{{ __('privacy.sections.rights.title') }}</h2>
                    <p>{{ __('privacy.sections.rights.intro') }}</p>
                    <ul class="list-disc pl-5 space-y-2 mb-4">
                        @foreach(__('privacy.sections.rights.list') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                    <p>{{ __('privacy.sections.rights.outro') }}</p>
                </section>

                <!-- Section 9: Remedies -->
                <section>
                    <h2 class="text-2xl mb-4">{{ __('privacy.sections.remedies.title') }}</h2>
                    <p>{{ __('privacy.sections.remedies.content') }}</p>
                </section>

            </div>
        </div>
    </div>
</x-layouts.app>
