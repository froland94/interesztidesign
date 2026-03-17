<section id="{{ __('nav.anchors.contact') }}" class="py-24 sm:py-32 bg-neutral-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
            <div class="lg:col-span-6 order-2 lg:order-1">
                <div class="mb-10">
                    <h2 class="text-4xl sm:text-5xl font-light tracking-tight mb-4 text-neutral-900">
                        {{ __('contact.title') }}
                    </h2>
                    <p class="text-neutral-500 text-base font-light leading-relaxed max-w-xl">
                        {{ __('contact.subtitle') }}
                    </p>
                </div>

                <livewire:contact-form />
            </div>

            <div class="lg:col-span-6 order-1 lg:order-2 relative">
                <div class="aspect-square sm:aspect-[4/5] lg:aspect-[5/6] rounded-[3rem] overflow-hidden border border-neutral-100 relative z-10 shadow-2xl">
                    <img src="{{ asset('images/contact.webp') }}" alt="{{ __('contact.title') }}" class="w-full h-full object-cover">
                </div>
                <div class="absolute -top-10 -right-10 w-48 h-48 bg-neutral-200/50 rounded-full blur-3xl -z-10 opacity-40"></div>
                <div class="absolute -bottom-10 -left-10 w-48 h-48 bg-neutral-200/50 rounded-full blur-3xl -z-10 opacity-40"></div>
            </div>
        </div>
    </div>
</section>
