<x-admin-layout>
    <div class="flex-grow w-full p-5">
        <div class="breadcrumbs text-sm">
            <ul>
                <li><a href="{{ route('admin.faqs.index') }}">Danh sách câu hỏi</a></li>
                <li><a class="text-teal-600">Chỉnh sửa</a></li>
            </ul>
        </div>
        <x-admin.alerts.toast/>
        
        <div class="mt-5">
            <h1 class="text-2xl font-bold">{{ $faq->title }}</h1>
        </div>
        <div class="overflow-x-auto bg-white rounded-lg mt-5">
            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-2 ...">
                    <div class="bg-base-100 shadow-xl form-control p-2 rounded-lg">
                        <div class="rounded border-l-4 border-red-500 bg-white p-5">
                            <div class="flex items-center text-sm">
                                <svg class="mr-2 h-4 w-4 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <span>{{ $faq->name }}</span>
                            </div>
                            <div class="flex items-center text-sm">
                                <svg class="mr-2 h-4 w-4 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>{{ $faq->address }}</span>
                            </div>
                            <div class="flex items-center text-sm">
                                <svg class="mr-2 h-4 w-4 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span>{{ $faq->email }}</span>
                            </div>
                            <div class="flex items-center text-sm">
                                <svg class="mr-2 h-4 w-4 flex-none" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span>{{ $faq->phone }}</span>
                            </div>
                            <div class="mt-1 flex items-center text-sm">
                                <svg class="mr-2 h-4 w-4 flex-none text-red-500" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div class="rounded bg-red-100 p-2 text-gray-900 font-semibold">
                                    {!! nl2br($faq->content_question) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="...">
                    <div class="bg-base-100 shadow-xl form-control p-2 rounded-lg">
                        <div class="sticky top-16 h-fit gap-4 space-y-5 rounded-lg border bg-white p-6">
                            <div class="">
                                <h3 class="text-sm font-semibold">
                                    Thời gian cập nhật
                                </h3>
                                <p class="text-normal">{{ $faq->createdAtDiffForHumans }}</p>
                            </div>
                            <div class="mt-5">
                                <h3 class="text-sm font-semibold">
                                    Chỉnh sửa lần cuối
                                </h3>
                                <p class="text-normal">{{ $faq->updatedAtDiffForHumans }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-4">
                    <div class="bg-base-100 shadow-xl form-control p-2 rounded-lg">
                        <div class="my-5 rounded border-l-4 border-teal-500 bg-white p-5">
                            <form action="{{ route('admin.faqs.update', $faq) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <input type="hidden" name="id" value="{{ $faq->id }}" />
                                <div class="mt-1 flex items-center text-sm">
                                    <svg class="mr-2 h-4 w-4 flex-none text-teal-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <textarea name="content_answer" id="content_answer" rows="7" class="w-full rounded-md border-gray-300 shadow-sm" required>
                                        {!! $faq->content_answer ?: old('content_answer') !!}
                                      </textarea>                                      
                                </div>
                                <div class="flex gap-4 justify-center p-3">
                                    <button type="submit"
                                        class="btn btn-outline btn-accent !min-h-9 h-9 w-fit mt-2 mx-4">Lưu</button>
                                    <a href="{{ route('admin.faqs.index') }}"
                                        class="btn btn-outline btn-error !min-h-9 h-9 w-fit mt-2 mx-4">Huỷ</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @pushonce('bottom_scripts')
        <x-admin.forms.tinymce-config column="content_answer" model="Post" id="content_answer" />
    @endpushonce

</x-admin-layout>
