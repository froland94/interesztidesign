<section id="{{ __('nav.anchors.about') }}" class="py-24 sm:py-32 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
            <div class="relative w-full lg:w-1/2">
                <div class="aspect-square rounded-[3rem] overflow-hidden border border-neutral-100 relative z-10 shadow-2xl">
                    <img src="{{ asset('images/about_me.webp') }}"
                         alt="Somogyi-Vass Eszter"
                         class="w-full h-full object-cover">
                </div>
                <div class="absolute -top-12 -left-12 w-64 h-64 bg-neutral-100 rounded-full blur-3xl -z-10 opacity-50"></div>
                <div class="absolute -bottom-12 -right-12 w-64 h-64 bg-neutral-100 rounded-full blur-3xl -z-10 opacity-50"></div>
            </div>

            <div class="w-full lg:w-1/2 space-y-10">
                <div>
                    <h2 class="text-4xl sm:text-5xl font-light tracking-tight mb-8 text-neutral-900">{{ __('about.title') }}</h2>
                    <p class="text-xl font-medium text-neutral-800 leading-snug lg:max-w-md">
                        {!! nl2br(e(__('about.intro'))) !!}
                    </p>
                </div>

                <div class="space-y-6 text-neutral-500 font-light leading-relaxed text-lg">
                    <p>
                        {{ __('about.p1') }}
                    </p>
                    <p>
                        {{ __('about.p2') }}
                    </p>
                </div>
            </div>


        </div>
    </div>
</section>
