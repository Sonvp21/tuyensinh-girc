<!-- resources/views/web/faqs/faq_list.blade.php -->
@forelse ($faqs as $faq)
    <li class="mt-4">
        <div class="flex items-center border-l-2 border-red-500 bg-gray-100 p-3">
            <small class="mr-3 flex flex-wrap justify-center text-center">
                <svg class="mr-2 h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="text-gray-500">
                    {{ $faq->created_at->format('d/m/Y H:ia') }}
                </span>
            </small>
            <div class="text-justify">
                <h3 class="text-lg font-semibold tracking-tighter">
                    {{ $faq->title }}
                </h3>
                <div>{!! nl2br($faq->content_question) !!}</div>
            </div>
        </div>
        @if ($faq->answered_at)
            <div class="border-l-2 border-teal-500 bg-gray-50 p-3 answer-container">
                <button type="button"
                    class="toggle-answer text-normal m-auto flex items-center hover:text-blue-500 focus:outline-none">
                    <svg class="mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path class="icon-show" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7" />
                        <path class="icon-hide" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 15l7-7 7 7" style="display: none;" />
                    </svg>
                    <div class="text-sm">
                        <span class="text-show">Hiển thị câu trả lời</span>
                        <span class="text-hide" style="display: none;">ẩn câu trả lời</span>
                    </div>
                </button>
                <div class="answer-content flex items-center" style="display: none;">
                    <small class="mr-3 flex flex-wrap justify-center text-center">
                        <svg class="h-5 w-5 text-teal-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-gray-500">
                            {{ $faq->answeredAtVn }}
                        </span>
                    </small>
                    <div class="relative overflow-hidden text-justify">
                        <div style="border-color: black; border-left: 1px solid; padding-left: 10px;">
                            {!! nl2br($faq->content_answer) !!}</div>
                    </div>
                </div>
            </div>
        @endif

    </li>
@empty
    <li>Không tìm thấy</li>
@endforelse
<div class="mt-2">
    {{ $faqs->appends(['search' => request('search')])->links() }}
</div>
