<x-website-layout>
    <div class="col-span-8 space-y-10 md:col-span-6 lg:col-span-6">
        <div class="h-full px-2">
       

                <div class="flex">
                    <div class="text-xl font-bold breadcrumbs py-[6px] text-blue-800 flex">
                        <ul>
                            <li>
                                <a href="{{ route('web.posts.index') }}" class="text-red-900">
                                    Tin tức - sự kiện
                                </a>
                            </li>
                        </ul>
                    </div>
                    <ul class="self-center text-sm breadcrumbs py-4 text-blue-800 flex">
                    </ul>
                </div>
                <div class="bg-gradient-to-r from-blue-400 via-blue-500 via-70% to-red-500 h-0.5"></div>

                <style>
                    .tooltip:before,
                    .tooltip-top:before {
                        left: 7%;
                    }

                    .tooltip:after,
                    .tooltip-top:after {
                        left: 7%;
                    }
                </style>
                <div class="space-y-2 text-slate-700 mt-5">
                    @if ($post->count() > 0)
                        <h2 class="text-2xl font-bold">
                            {{ $post->title }}
                        </h2>

                        <div class="flex">
                            <div class="tooltip tooltip-top flex items-center gap-2 text-green-700"
                                data-tip="{{ $post->published_post_date }}">
                                <x-heroicon-m-calendar class="size-4" />
                                <span class="text-xs">{{ $post->published_post_date_thumb }}</span>
                            </div>
                            <div class="tooltip tooltip-top flex items-center gap-2 text-green-700 ml-5"
                                data-tip="Lượt xem: {{ $post->views }}">
                                <x-heroicon-m-eye class="size-4" />
                                <span class="text-xs">{{ $post->views }}</span>
                            </div>
                        </div>

                        <div class="text-justify">
                            {!! $post->content !!}
                        </div>
                    @else
                        <img class="h-auto w-full transition-all"
                            src="{{ Storage::url($post->images->first()->file_path ?? '') }}" alt="" />
                    @endif
                </div>

                <div class="my-5 border-t-4 border-dashed"></div>

                <div>
                    <div class="text-xl font-bold py-[6px] text-blue-800 flex">
                        <a class="text-red-900">Các tin liên quan</a>
                    </div>
                    <div class="bg-gradient-to-r from-blue-400 via-blue-500 via-70% to-red-500 h-0.5"></div>

                    @foreach ($relatedPosts as $post)
                        <div class="flex items-center">
                            <i class="fad fa-angle-double-right"></i>
                            <a href="{{ route('web.posts.show', ['slug' => $post->slug]) }}"
                                class="ml-2 text-blue-950 line-clamp-1 cursor-pointer decoration-blue-950 hover:text-red-600">{{ $post->title }}</a>
                        </div>
                    @endforeach
                </div>
      
        </div>
    </div>
    @include('web.right-content')
</x-website-layout>
