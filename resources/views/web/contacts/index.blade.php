<x-website-layout>
    <div class="col-span-8 md:col-span-6 lg:col-span-6">
        <div class="bg-white p-8">
            <div class="container mx-auto">
                <div class="mb-6 text-center">
                    <h2 class="text-2xl font-bold">@lang('web.title_web_contact')</h2>
                    <p class="text-gray-600">@lang('web.cmt_web_contact')</p>
                </div>
                <form action="{{ route('web.contacts.store') }}" method="POST" class="needs-validation space-y-4"
                    novalidate>
                    @csrf
                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <input type="text" name="name" value="{{ old('name') }}"
                                placeholder="@lang('web.contacts.name')" class="input input-bordered input-info w-full">
                            @error('name')
                                <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <input type="text" name="email" value="{{ old('email') }}"
                                placeholder="@lang('web.contacts.email')" class="input input-bordered input-info w-full">
                            @error('email')
                                <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <input type="text" name="phone" value="{{ old('phone') }}"
                                placeholder="@lang('web.contacts.phone')" class="input input-bordered input-info w-full">
                            @error('phone')
                                <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <textarea name="content" placeholder="@lang('web.contacts.content')" class="textarea textarea-bordered textarea-info w-full"
                        rows="8">{{ old('content') }}</textarea>
                    @error('content')
                        <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                    @enderror

                    <div class="flex items-center justify-between !place-content-center">
                        <x-admin.alerts.toast/>
                        
                        <button type="submit" class="btn bg-cyan-400 hover:bg-cyan-500 ...">
                            <i class="fad fa-paper-plane"></i>
                            @lang('web.send')
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="mb-7 bg-gray-100 p-9">
            <div class="flex flex-col justify-between md:flex-row">
                <div class="mb-4 border-white px-2 md:mb-0 lg:border-r">
                    <h3 class="flex items-center font-semibold">
                        <x-heroicon-o-map-pin class="size-6" />
                        <span class="ml-2">@lang('web.address_web')</span>
                    </h3>
                    <p class="pl-8">
                        <a target="__blank" class="hover:text-green-900" href="...">
                            ...
                        </a>
                    </p>
                    <p class="pl-8">...</p>
                </div>
                <div class="mb-4 border-white px-2 md:mb-0 lg:border-r">
                    <h3 class="flex items-center font-semibold">
                        <x-heroicon-c-globe-alt class="size-6" />
                        <span class="ml-2">@lang('web.contact_web')</span>
                    </h3>
                    <p class="pl-8">
                        <a href="tel:..." class="hover:text-green-900">@lang('web.phone_number'):
                            ...</a>
                    </p>
                    <p class="pl-8">...</p>
                </div>
                <div class="mb-4 px-2 md:mb-0">
                    <h3 class="flex items-center font-semibold">
                        <x-far-paper-plane class="size-6" />
                        <span class="ml-2">@lang('web.email_web')</span>
                    </h3>
                    <p class="pl-8">
                        <a href="mailto:...." class="hover:text-green-900">....</a>
                    </p>
                    <p class="pl-8">...</p>
                </div>
            </div>
        </div>
        {{-- <div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3709.7968394863237!2d105.81080899999999!3d21.5938519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313527142d4a273b%3A0x93ac520307150ed8!2zVHJ1bmcgdMOibSBOZ2hpw6puIGPhu6l1IMSQ4buLYSB0aW4gaOG7jWMgLSBHSVJD!5e0!3m2!1svi!2s!4v1716537692080!5m2!1svi!2s"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>

                    </div> --}}
    </div>
    @include('web.right-content')
</x-website-layout>
