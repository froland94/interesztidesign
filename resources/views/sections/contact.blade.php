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

                <form action="#" method="POST" class="space-y-5">
                    @csrf

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label for="name" class="block text-[10px] font-bold tracking-widest uppercase text-neutral-400 mb-1.5 italic">
                                {{ __('contact.form.name') }} <span class="normal-case font-normal text-neutral-300 ml-1">{{ __('contact.form.required') }}</span>
                            </label>
                            <input type="text" name="name" id="name" required
                                class="w-full px-4 py-3 bg-white border border-neutral-200 rounded-xl focus:border-neutral-900 focus:ring-1 focus:ring-neutral-900 outline-none transition-all placeholder-neutral-300 text-neutral-900 font-light text-base">
                        </div>

                        <div>
                            <label for="phone" class="block text-[10px] font-bold tracking-widest uppercase text-neutral-400 mb-1.5 italic">
                                {{ __('contact.form.phone') }}
                            </label>
                            <div class="relative flex items-center border border-neutral-200 rounded-xl bg-white group focus-within:border-neutral-900 focus-within:ring-1 focus-within:ring-neutral-900 transition-all overflow-hidden">
                                <div class="flex items-center pl-3 pr-2 pointer-events-none border-r border-neutral-100">
                                    <svg class="w-4 h-3 rounded-sm mr-2 opacity-80" viewBox="0 0 30 20">
                                        <path fill="#436F4D" d="M0 13.333h30V20H0z"/>
                                        <path fill="#fff" d="M0 6.667h30v6.666H0z"/>
                                        <path fill="#CE2939" d="M0 0h30v6.667H0z"/>
                                    </svg>
                                    <span class="text-neutral-400 font-light text-base">+36</span>
                                </div>
                                <input type="tel" name="phone" id="phone"
                                    class="w-full px-3 py-3 bg-transparent outline-none text-neutral-900 font-light text-base">
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-[10px] font-bold tracking-widest uppercase text-neutral-400 mb-1.5 italic">
                            {{ __('contact.form.email') }} <span class="normal-case font-normal text-neutral-300 ml-1">{{ __('contact.form.required') }}</span>
                        </label>
                        <input type="email" name="email" id="email" placeholder="john.doe@example.com" required
                            class="w-full px-4 py-3 bg-white border border-neutral-200 rounded-xl focus:border-neutral-900 focus:ring-1 focus:ring-neutral-900 outline-none transition-all placeholder-neutral-300 text-neutral-900 font-light text-base">
                    </div>

                    <div>
                        <label for="property" class="block text-[10px] font-bold tracking-widest uppercase text-neutral-400 mb-1.5 italic">
                            {{ __('contact.form.property') }} <span class="normal-case font-normal text-neutral-300 ml-1">{{ __('contact.form.required') }}</span>
                        </label>
                        <input type="text" name="property" id="property" required
                            class="w-full px-4 py-3 bg-white border border-neutral-200 rounded-xl focus:border-neutral-900 focus:ring-1 focus:ring-neutral-900 outline-none transition-all text-neutral-900 font-light text-base">
                    </div>

                    <div>
                        <p class="block text-[10px] font-bold tracking-widest uppercase text-neutral-400 mb-3 italic">
                            {{ __('contact.form.service') }} <span class="normal-case font-normal text-neutral-300 ml-1">{{ __('contact.form.required') }}</span>
                        </p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-2 bg-white/50 p-4 rounded-2xl border border-neutral-100">
                            @foreach($products as $product)
                                <label class="flex items-center group cursor-pointer">
                                    <div class="relative flex items-center">
                                        <input type="checkbox" name="services[]" value="{{ $product->id }}"
                                            class="w-4 h-4 rounded-full border-neutral-300 text-neutral-900 focus:ring-neutral-900 transition-all">
                                    </div>
                                    <span class="ml-3 text-[13px] text-neutral-500 font-light group-hover:text-neutral-900 transition-colors">
                                        {{ $product->title }}
                                    </span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        <label for="description" class="block text-[10px] font-bold tracking-widest uppercase text-neutral-400 mb-1.5 italic">
                            {{ __('contact.form.description') }}
                        </label>
                        <textarea name="description" id="description" rows="3"
                            class="w-full px-4 py-3 bg-white border border-neutral-200 rounded-xl focus:border-neutral-900 focus:ring-1 focus:ring-neutral-900 outline-none transition-all resize-none text-neutral-900 font-light text-base"></textarea>
                    </div>

                    <div class="space-y-3 pt-2">
                        <label class="flex items-center group cursor-pointer">
                            <input type="checkbox" name="privacy" required
                                class="w-4 h-4 rounded-full border-neutral-300 text-neutral-900 focus:ring-neutral-900 transition-all cursor-pointer">
                            <span class="ml-3 text-[10px] font-bold tracking-widest uppercase text-neutral-400 italic group-hover:text-neutral-600 transition-colors">
                                {{ __('contact.form.privacy') }}
                            </span>
                        </label>
                        <p class="text-[10px] font-light text-neutral-400 pl-7">
                            Az <a href="{{ route(app()->getLocale() . '.privacy') }}" class="text-neutral-900 hover:underline font-medium">Adatkezelési tájékoztatót</a> itt érheti el.
                        </p>
                    </div>

                    <div class="pt-4">
                        <button type="submit"
                            class="w-full py-4 px-10 bg-neutral-900 text-white font-bold rounded-full hover:bg-black transition-all shadow-sm tracking-widest uppercase text-xs cursor-pointer">
                            {{ __('contact.form.submit') }}
                        </button>
                    </div>

                </form>
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
