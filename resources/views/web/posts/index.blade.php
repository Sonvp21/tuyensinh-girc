<x-website-layout>
    <div class="col-span-8 space-y-10 md:col-span-6 lg:col-span-6">
        <div class="h-full px-2">
            <div class="grid h-auto">

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


                <div class="space-y-6 text-slate-700 text-justify mt-5">
                    @if ($posts->count() > 0)
                        <ul class="space-y-4">
                            @foreach ($posts as $post)
                                <li>
                                    <article class="group">
                                        <div class="flex gap-3">
                                            <a href="{{ route('web.posts.show', ['slug' => $post->slug]) }}"
                                                class="h-32 w-40 lg:w-48 flex-none overflow-hidden">
                                                <img class="h-full w-full transition-all group-hover:scale-110"
                                                    src="{{ isset($post->images->first()->file_path) ? Storage::url($post->images->first()->file_path) : asset('homepage/default-sở-hữu-tri-tuệ.jpg') }}""
                                                    alt="" />
                                            </a>
                                            <div class="flex flex-col items-start justify-evenly">
                                                <div>
                                                    <a href="{{ route('web.posts.show', ['slug' => $post->slug]) }}"
                                                        class="group-hover:underline">
                                                        <h3
                                                            class="line-clamp-2 text-lg font-semibold leading-5 text-blue-950">
                                                            {{ $post->title }}
                                                        </h3>
                                                    </a>
                                                    <p class="mt-2 line-clamp-3 text-sm text-slate-500">
                                                        {!! Str::limit(html_entity_decode(strip_tags($post->content)), 500) !!}
                                                    </p>
                                                </div>
                                                <div class="flex">
                                                    <div class="tooltip tooltip-top flex items-center gap-2 text-green-700"
                                                        data-tip="{{ $post->published_post_date }}">
                                                        <x-heroicon-m-calendar class="size-4" />
                                                        <span
                                                            class="text-xs">{{ $post->published_post_date_thumb }}</span>
                                                    </div>
                                                    <div class="tooltip tooltip-top flex items-center gap-2 text-green-700 ml-5"
                                                        data-tip="Lượt xem: {{ $post->views }}">
                                                        <x-heroicon-m-eye class="size-4" />
                                                        <span class="text-xs">{{ $post->views }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                            @endforeach
                        </ul>
                        {{ $posts->links('vendor.pagination.custom-pagination') }}
                    @else
                        <p>Chưa có bài viết nào</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @include('web.right-content')
</x-website-layout>
