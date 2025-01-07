<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="app-url" content="{{ config('app.url') }}">
    <link rel="shortcut icon" href="{{ asset('homepage/logo/logo_gaokrongana.jpg') }}" type="image/x-icon" />
    <link rel="icon" href="{{ asset('homepage/logo/logo_gaokrongana.jpg') }}" type="image/x-icon" />
    <title>{{ config('app.name', 'Gạo Krông Ana') }}</title>

    <link rel="stylesheet" href="{{ asset('homepage/css-js/splide.min.css') }}" />
    <script src="{{ asset('homepage/css-js/splide.min.js') }}"></script>
    <script src="{{ asset('homepage/css-js/splide-extension-grid.js') }}"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')

    <link href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"></script>

</head>

<body class="h-auto bg-white font-sans text-black antialiased">
    <x-website.banner />

    <x-website.menu />

    <main class="flex-grow">
        <div class="relative mx-auto mt-4 max-w-7xl space-y-4 px-4 sm:px-6 lg:px-8">
            <class class="grid grid-cols-12">
                <div class="md:col-span-9 col-span-12">

                    <div class="flex flex-row justify-between md:hidden mb-3">
                        <a href="" class="flex items-center gap-1 hover:text-yellow-600">
                            <span class="rounded-sm bg-yellow-500 p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="h-5 w-5 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>
                            </span>
                            <span class="text-sm">Liên hệ</span>
                        </a>
                        <a href="" class="flex items-center gap-1 hover:text-yellow-600">
                            <span class="rounded-sm bg-yellow-500 p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="h-5 w-5 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                                </svg>
                            </span>
                            <span class="text-sm">Hỏi đáp</span>
                        </a>
                        <a href="{{ route('login') }}" class="flex items-center gap-1 hover:text-yellow-600">
                            <span class="rounded-sm bg-yellow-500 p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="h-5 w-5 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75">
                                    </path>
                                </svg>
                            </span>
                            <span class="text-sm">Đăng nhập</span>
                        </a>
                    </div>

                    {{ $slot }}
                </div>
                <div class="md:col-span-3 col-span-12">
                    <x-website.right-content />
                </div>
            </class>

        </div>

        <div class="relative mx-auto max-w-7xl space-y-4 px-4 sm:px-6 lg:px-8">
            <div class="border-b-2 border-blue-700">
                <h2 class="font-bold uppercase text-blue-700">Hệ thống đại lý (64 tỉnh thành trên cả nước)</h2>
            </div>
            <div class="relative flex items-center">
                <div id="partners" class="flex gap-4 overflow-x-scroll scroll-smooth py-4 scrollbar-hide">
                    <div>
                        <a href="#" target="_blank"
                            class="flex h-52 w-64 flex-none cursor-pointer snap-center snap-always items-center justify-center rounded-md bg-green-200 bg-cover bg-center bg-no-repeat text-2xl font-semibold text-white shadow transition hover:rotate-1 hover:scale-[1.05] hover:shadow-md"
                            style="background-image: url(data:image/jpeg;base64,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)">
                        </a>
                        <a href="#">
                            <span class="block text-center mt-2 text-sm font-medium text-gray-700 hover:text-blue-600">
                                SIÊU THỊ GẠO NGON HOÀNG CÔNG CHẤT - NAM TỪ LIÊM
                            </span>
                            <span class="block text-center mt-2 text-sm text-gray-500 hover:text-blue-600">
                                Siêu Thị Gạo Ngon - Số 479 Hoàng Công Chất - Hotline: 0962 555 931
                            </span>
                        </a>
                    </div>
                    <div>
                        <a href="#" target="_blank"
                            class="flex h-52 w-64 flex-none cursor-pointer snap-center snap-always items-center justify-center rounded-md bg-green-200 bg-cover bg-center bg-no-repeat text-2xl font-semibold text-white shadow transition hover:rotate-1 hover:scale-[1.05] hover:shadow-md"
                            style="background-image: url(https://baodongnai.com.vn/file/e7837c02876411cd0187645a2551379f/092023/105d_20230920212621.webp)"></a>
                        <a href="#">
                            <span class="block text-center mt-2 text-sm font-medium text-gray-700 hover:text-blue-600">
                                Cửa hàng GẠO ÔNG CUA
                            </span>
                            <span class="block text-center mt-2 text-sm text-gray-500 hover:text-blue-600">
                                CÔNG TY CỔ PHẦN LƯƠNG THỰC PHƯƠNG NAM - Điện thoại/ Zalo: 0902 58 1717 (Anh Hiếu)
                                - 0909 34 9988 (Anh Thành)
                            </span>
                        </a>
                    </div>
                    <div>
                        <a href="#" target="_blank"
                            class="flex h-52 w-64 flex-none cursor-pointer snap-center snap-always items-center justify-center rounded-md bg-green-200 bg-cover bg-center bg-no-repeat text-2xl font-semibold text-white shadow transition hover:rotate-1 hover:scale-[1.05] hover:shadow-md"
                            style="background-image: url(data:image/jpeg;base64,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)"></a>
                        <a href="#">
                            <span class="block text-center mt-2 text-sm font-medium text-gray-700 hover:text-blue-600">
                                SIEU THI GAO NGON THÀNH PHỐ NAM ĐỊNH
                            </span>
                            <span class="block text-center mt-2 text-sm text-gray-500 hover:text-blue-600">
                                Địa chỉ: 56 286 Hoàng Văn Thụ ĐT: 0972 885 018
                            </span>
                        </a>
                    </div>
                    <div>
                        <a href="#" target="_blank"
                            class="flex h-52 w-64 flex-none cursor-pointer snap-center snap-always items-center justify-center rounded-md bg-green-200 bg-cover bg-center bg-no-repeat text-2xl font-semibold text-white shadow transition hover:rotate-1 hover:scale-[1.05] hover:shadow-md"
                            style="background-image: url(data:image/jpeg;base64,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)"></a>
                        <a href="#">
                            <span class="block text-center mt-2 text-sm font-medium text-gray-700 hover:text-blue-600">
                                SIÊU THỊ GẠO NGON NAM TỪ LIÊM
                            </span>
                            <span class="block text-center mt-2 text-sm text-gray-500 hover:text-blue-600">
                                Địa Chỉ: Số 20 đường Mỹ Đình, Q. Nam Từ Liêm, Hà Nội
                                Tel: 04 38 616 999/Mobile 094 2222 866
                            </span>
                        </a>
                    </div>
                    <div>
                        <a href="#" target="_blank"
                            class="flex h-52 w-64 flex-none cursor-pointer snap-center snap-always items-center justify-center rounded-md bg-green-200 bg-cover bg-center bg-no-repeat text-2xl font-semibold text-white shadow transition hover:rotate-1 hover:scale-[1.05] hover:shadow-md"
                            style="background-image: url(https://baodaklak.vn/file/fb9e3a03798789de0179a1704dea238e/fb9e3a03798789de017a33ac13630993/082021/img-5545_20210821224544.jpg)"></a>
                        <a href="#">
                            <span class="block text-center mt-2 text-sm font-medium text-gray-700 hover:text-blue-600">
                                SIÊU THỊ GẠO NGON
                            </span>
                            <span class="block text-center mt-2 text-sm text-gray-500 hover:text-blue-600">
                                26 PHÚC DIỄN - BẮC TỪ LIÊM - HN
                                ĐT: 04 66 88 33 22/Mobi 094 2222 866
                            </span>
                        </a>
                    </div>
                    <div>
                        <a href="#" target="_blank"
                            class="flex h-52 w-64 flex-none cursor-pointer snap-center snap-always items-center justify-center rounded-md bg-green-200 bg-cover bg-center bg-no-repeat text-2xl font-semibold text-white shadow transition hover:rotate-1 hover:scale-[1.05] hover:shadow-md"
                            style="background-image: url(https://baodaklak.vn/file/fb9e3a03798789de0179a1704dea238e/fb9e3a03798789de017a3373ebd4791a/092021/1a_20210909203955.jpg)"></a>
                        <a href="#">
                            <span class="block text-center mt-2 text-sm font-medium text-gray-700 hover:text-blue-600">
                                SIÊU THỊ GẠO NGON HOÀNG CÔNG CHẤT - NAM TỪ LIÊM
                            </span>
                            <span class="block text-center mt-2 text-sm text-gray-500 hover:text-blue-600">
                            </span>
                        </a>
                    </div>
                </div>
                <div class="absolute left-0 flex h-full w-10 items-center justify-center">
                    <span onclick="prev('partners')"
                        class="ml-2 cursor-pointer rounded-full bg-lime-500 p-2 text-white hover:bg-lime-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                    </span>
                </div>
                <div class="absolute right-0 flex h-full w-10 items-center justify-center">
                    <span onclick="next('partners')"
                        class="mr-2 cursor-pointer rounded-full bg-lime-500 p-2 text-white hover:bg-lime-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
                </div>
            </div>
            <script>
                function prev(el) {
                    document.getElementById(el).scrollLeft -= 300;
                }

                function next(el) {
                    document.getElementById(el).scrollLeft += 300;
                }
            </script>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var splide = new Splide('.banners', {
                        type: 'loop',
                        autoplay: 'play',
                        perPage: 1,
                    });
                    splide.mount();
                });
            </script>
        </div>
    </main>

    <x-admin.alerts.toast />
    <x-website.footer />
    <!-- Back to top button -->
    <button type="button" data-twe-ripple-init data-twe-ripple-color="light"
        class="z-50 !fixed bottom-5 end-5 !left-5 hidden rounded-full bg-[#4ba600] p-3 text-xs font-medium uppercase w-[44px] text-white shadow-md transition duration-150 ease-in-out hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg"
        id="btn-back-to-top">
        <span class="[&>svg]:w-4">
            <i class="far fa-long-arrow-up text-xl"></i>
        </span>
    </button>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const btnBackToTop = document.getElementById("btn-back-to-top");

            // Hiển thị nút khi người dùng cuộn xuống 200px
            window.addEventListener("scroll", () => {
                if (window.scrollY > 200) {
                    btnBackToTop.classList.remove("hidden");
                } else {
                    btnBackToTop.classList.add("hidden");
                }
            });

            // Cuộn lên đầu khi nhấp vào nút
            btnBackToTop.addEventListener("click", () => {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });
        });
    </script>

    @stack('bottom_scripts')

    <style>
        .tudongchat-icon.svelte-3x3xt4.svelte-3x3xt4 {
            padding: 8px;
            background-color: #ffffff !important;
        }

        .tudongchat-icon-logo.svelte-3x3xt4.svelte-3x3xt4 {
            width: 40px;
            height: 40px;
        }
    </style>

    <script>
        window.iconChatbotUrl = "{{ asset('homepage/icon/icon_chatbot.png') }}";
    </script>
    <script src="{{ asset('homepage/chatbox.js') }}"></script>
    <script>
        const tudong_chatbox = new TuDongChat('-vsl3dLiHTBmTki_faWsI')
        tudong_chatbox.initial()
    </script>

    <script>
        const scrollContainerDocument = document.getElementById('scroll-container-document')
        let isScrollingDown = true
        let isMouseOver = false

        scrollContainerDocument.addEventListener('mouseenter', function() {
            isMouseOver = true
        })

        scrollContainerDocument.addEventListener('mouseleave', function() {
            isMouseOver = false
        })

        function scroll() {
            if (!isMouseOver) {
                if (scrollContainerDocument.scrollTop === scrollContainerDocument.scrollHeight - scrollContainerDocument
                    .offsetHeight) {
                    isScrollingDown = false
                } else if (scrollContainerDocument.scrollTop === 0) {
                    isScrollingDown = true
                }

                if (isScrollingDown) {
                    scrollContainerDocument.scrollTop += 1
                } else {
                    scrollContainerDocument.scrollTop -= 1
                }
            }

            setTimeout(scroll, 50)
        }

        scroll()
    </script>
</body>

</html>
