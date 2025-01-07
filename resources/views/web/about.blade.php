<x-website-layout>
    <div class="col-span-8 space-y-10 md:col-span-6 lg:col-span-6">
        <div class="h-full px-2">
            <div class="grid h-auto">
                @foreach ($abouts as $about)
                    <div class="flex">
                        <div class="text-xl font-bold breadcrumbs py-[6px] text-blue-800 flex">
                            <ul>
                                <li>
                                    <a class="text-red-900">
                                        Giới thiệu
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <ul class="self-center text-sm breadcrumbs py-4 text-blue-800 flex">
                        </ul>
                    </div>
                    <div class="bg-gradient-to-r from-blue-400 via-blue-500 via-70% to-red-500 h-0.5"></div>


                    <div class="space-y-6 text-slate-700 text-justify mt-5">
                        {!! $about->content !!}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('web.right-content')
</x-website-layout>
