@php use App\Support\PhoneCountryList; @endphp

<div>
    @if($submitted)
        <div class="p-6 bg-green-50 border border-green-200 rounded-2xl text-green-800 text-sm font-light">
            {{ __('contact.form.success') }}
        </div>
    @else
        <form wire:submit="submit" novalidate class="space-y-5">

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div>
                    <label for="name" class="block text-[10px] font-bold tracking-widest uppercase text-neutral-400 mb-1.5 italic">
                        {{ __('contact.form.name') }} <span class="normal-case font-normal text-neutral-300 ml-1">{{ __('contact.form.required') }}</span>
                    </label>
                    <div class="relative">
                        <input type="text" id="name" wire:model.live.debounce.300ms="name" required placeholder=" "
                            class="peer w-full px-4 py-3 pr-10 bg-white border rounded-xl outline-none transition-all text-neutral-900 font-light text-base
                                   focus:border-neutral-900 focus:ring-1 focus:ring-neutral-900
                                   [&:not(:placeholder-shown)]:invalid:border-red-400 [&:not(:placeholder-shown)]:invalid:ring-1 [&:not(:placeholder-shown)]:invalid:ring-red-400/20
                                   {{ $errors->has('name') ? 'border-red-400' : 'border-neutral-200' }}">
                        <div class="{{ $errors->has('name') ? 'flex' : 'hidden peer-[&:not(:placeholder-shown):invalid]:flex' }} pointer-events-none absolute inset-y-0 right-3 items-center">
                            <svg class="w-4 h-4 text-red-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/></svg>
                        </div>
                        @unless($errors->has('name'))
                            <p class="absolute top-full left-0 mt-0.5 text-xs text-red-500 font-light hidden peer-[&:not(:placeholder-shown):invalid]:block">
                                {{ __('contact.validation.name_required') }}
                            </p>
                        @endunless
                        @error('name')
                            <p class="absolute top-full left-0 mt-0.5 text-xs text-red-500 font-light">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="relative">
                    <label for="phoneNumber" class="block text-[10px] font-bold tracking-widest uppercase text-neutral-400 mb-1.5 italic">
                        {{ __('contact.form.phone') }}
                    </label>
                    <div class="relative flex items-center border rounded-xl bg-white group focus-within:border-neutral-900 focus-within:ring-1 focus-within:ring-neutral-900 transition-all overflow-hidden {{ $errors->has('phoneNumber') ? 'border-red-400' : 'border-neutral-200' }}">
                        <div class="relative shrink-0">
                            <select id="phoneCountry" wire:model="phoneCountry"
                                class="appearance-none pl-3 pr-7 py-3 bg-transparent border-r border-neutral-100 outline-none text-neutral-700 font-light text-base cursor-pointer">
                                @foreach(PhoneCountryList::all(app()->getLocale()) as $country)
                                    <option value="{{ $country['region'] }}">
                                        {{ $country['flag'] }} {{ $country['dial_code'] }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-1 flex items-center">
                                <svg class="w-3 h-3 text-neutral-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </div>
                        </div>
                        <input type="tel" id="phoneNumber" wire:model.live.debounce.300ms="phoneNumber"
                            class="w-full px-3 py-3 bg-transparent outline-none text-neutral-900 font-light text-base">
                    </div>
                    @error('phoneNumber')
                        <p class="absolute top-full left-0 mt-0.5 text-xs text-red-500 font-light">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="email" class="block text-[10px] font-bold tracking-widest uppercase text-neutral-400 mb-1.5 italic">
                    {{ __('contact.form.email') }} <span class="normal-case font-normal text-neutral-300 ml-1">{{ __('contact.form.required') }}</span>
                </label>
                <div class="relative">
                    <input type="email" id="email" wire:model.live.debounce.300ms="email" placeholder="john.doe@example.com" required
                        class="peer w-full px-4 py-3 pr-10 bg-white border rounded-xl outline-none transition-all placeholder-neutral-300 text-neutral-900 font-light text-base
                               focus:border-neutral-900 focus:ring-1 focus:ring-neutral-900
                               [&:not(:placeholder-shown)]:invalid:border-red-400 [&:not(:placeholder-shown)]:invalid:ring-1 [&:not(:placeholder-shown)]:invalid:ring-red-400/20
                               {{ $errors->has('email') ? 'border-red-400' : 'border-neutral-200' }}">
                    <div class="{{ $errors->has('email') ? 'flex' : 'hidden peer-[&:not(:placeholder-shown):invalid]:flex' }} pointer-events-none absolute inset-y-0 right-3 items-center">
                        <svg class="w-4 h-4 text-red-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/></svg>
                    </div>
                    @unless($errors->has('email'))
                        <p class="absolute top-full left-0 mt-0.5 text-xs text-red-500 font-light hidden peer-[&:not(:placeholder-shown):invalid]:block">
                            {{ __('contact.validation.email_invalid') }}
                        </p>
                    @endunless
                    @error('email')
                        <p class="absolute top-full left-0 mt-0.5 text-xs text-red-500 font-light">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="property" class="block text-[10px] font-bold tracking-widest uppercase text-neutral-400 mb-1.5 italic">
                    {{ __('contact.form.property') }} <span class="normal-case font-normal text-neutral-300 ml-1">{{ __('contact.form.required') }}</span>
                </label>
                <div class="relative">
                    <input type="text" id="property" wire:model.live.debounce.300ms="property" required placeholder=" "
                        class="peer w-full px-4 py-3 pr-10 bg-white border rounded-xl outline-none transition-all text-neutral-900 font-light text-base
                               focus:border-neutral-900 focus:ring-1 focus:ring-neutral-900
                               [&:not(:placeholder-shown)]:invalid:border-red-400 [&:not(:placeholder-shown)]:invalid:ring-1 [&:not(:placeholder-shown)]:invalid:ring-red-400/20
                               {{ $errors->has('property') ? 'border-red-400' : 'border-neutral-200' }}">
                    <div class="{{ $errors->has('property') ? 'flex' : 'hidden peer-[&:not(:placeholder-shown):invalid]:flex' }} pointer-events-none absolute inset-y-0 right-3 items-center">
                        <svg class="w-4 h-4 text-red-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0v-4.5A.75.75 0 0110 5zm0 10a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/></svg>
                    </div>
                    @unless($errors->has('property'))
                        <p class="absolute top-full left-0 mt-0.5 text-xs text-red-500 font-light hidden peer-[&:not(:placeholder-shown):invalid]:block">
                            {{ __('contact.validation.property_required') }}
                        </p>
                    @endunless
                    @error('property')
                        <p class="absolute top-full left-0 mt-0.5 text-xs text-red-500 font-light">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="relative">
                <p class="block text-[10px] font-bold tracking-widest uppercase text-neutral-400 mb-3 italic">
                    {{ __('contact.form.service') }} <span class="normal-case font-normal text-neutral-300 ml-1">{{ __('contact.form.required') }}</span>
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-2 bg-white/50 p-4 rounded-2xl border {{ $errors->has('services') ? 'border-red-200' : 'border-neutral-100' }}">
                    @foreach($this->products as $product)
                        <label wire:key="service-{{ $product->id }}" class="flex items-center group cursor-pointer">
                            <input type="checkbox" wire:model="services" value="{{ $product->id }}"
                                class="w-4 h-4 rounded-full border-neutral-300 text-neutral-900 focus:ring-neutral-900 transition-all">
                            <span class="ml-3 text-[13px] text-neutral-500 font-light group-hover:text-neutral-900 transition-colors">
                                {{ $product->title }}
                            </span>
                        </label>
                    @endforeach
                </div>
                @error('services')
                    <p class="absolute top-full left-0 mt-0.5 text-xs text-red-500 font-light">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block text-[10px] font-bold tracking-widest uppercase text-neutral-400 mb-1.5 italic">
                    {{ __('contact.form.description') }}
                </label>
                <textarea id="description" wire:model="description" rows="3"
                    class="w-full px-4 py-3 bg-white border border-neutral-200 rounded-xl focus:border-neutral-900 focus:ring-1 focus:ring-neutral-900 outline-none transition-all resize-none text-neutral-900 font-light text-base"></textarea>
            </div>

            <div class="pt-2 space-y-3">
                <div class="relative">
                    <label class="flex items-center group cursor-pointer">
                        <input type="checkbox" wire:model="privacy"
                            class="w-4 h-4 rounded-full border-neutral-300 text-neutral-900 focus:ring-neutral-900 transition-all cursor-pointer">
                        <span class="ml-3 text-[10px] font-bold tracking-widest uppercase text-neutral-400 italic group-hover:text-neutral-600 transition-colors">
                            {{ __('contact.form.privacy') }}
                        </span>
                    </label>
                    @error('privacy')
                        <p class="absolute top-full left-7 mt-0.5 text-xs text-red-500 font-light">{{ $message }}</p>
                    @enderror
                </div>
                <p class="text-[10px] font-light text-neutral-400 pl-7">
                    {!! __('contact.form.privacy_link_text', ['url' => route(app()->getLocale() . '.privacy')]) !!}
                </p>
            </div>

            <div class="pt-4">
                <button type="submit" wire:loading.attr="disabled" wire:loading.class="opacity-60 cursor-not-allowed"
                    class="w-full py-4 px-10 bg-neutral-900 text-white font-bold rounded-full hover:bg-black transition-all shadow-sm tracking-widest uppercase text-xs cursor-pointer">
                    <span wire:loading.remove>{{ __('contact.form.submit') }}</span>
                    <span wire:loading>{{ __('contact.form.sending') }}</span>
                </button>
            </div>

        </form>
    @endif
</div>
