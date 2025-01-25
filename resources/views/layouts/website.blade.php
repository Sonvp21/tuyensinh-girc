<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="app-url" content="{{ config('app.url') }}">
    <link rel="shortcut icon" href="{{ asset('home/logo GIRC.jpg') }}" type="image/x-icon" />
    <link rel="icon" href="{{ asset('home/logo GIRC.jpg') }}" type="image/x-icon" />
    <title>{{ config('app.name', 'Gạo Krông Ana') }}</title>
    <meta name="description"
        content="Trung tâm nghiên cứu Địa tin học - Trường đại học Nông lâm Thái Nguyên, đại học Thái Nguyên thông báo tuyển sinh đại học năm học 2025.">
    <link href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/theme-change@2.0.2/index.js"></script>
    <script src="{{ asset('home/index.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('home/index.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body class="h-auto bg-white font-sans text-black antialiased p-2 md:p-0">
    <main id="top" class="flex-grow">
        {{ $slot }}
    </main>

    <x-admin.alerts.toast />
    <a href="#top" class="hover:bg-red-700 bg-red-500 invert fixed z-1 circle rounded-full" id="top-link"
        aria-label="Go to top"><i class="far fa-chevron-up"></i></a>
    <style>
        #top-link {
            display: none;
            /* Ẩn mặc định */
            position: fixed;
            width: 40px;
            height: 41px;
            border: 2px solid red;
            right: 20px;
            bottom: 20px;
            color: #fff;
            padding: 10px;
            text-align: center;
            cursor: pointer;
            z-index: 1000;
        }

        #top-link.show {
            display: block;
            /* Hiển thị khi cuộn */
        }
    </style>
    <script>
        // Lấy phần tử nút "Back to Top"
        const backToTopBtn = document.getElementById('top-link');

        // Theo dõi sự kiện cuộn trang
        window.addEventListener('scroll', () => {
            if (window.scrollY > 200) { // Nếu cuộn quá 200px
                backToTopBtn.classList.add('show');
            } else {
                backToTopBtn.classList.remove('show');
            }
        });

        // Sự kiện nhấp vào nút
        backToTopBtn.addEventListener('click', (e) => {
            e.preventDefault(); // Ngăn chặn hành vi mặc định
            window.scrollTo({
                top: 0, // Cuộn về đầu trang
                behavior: 'smooth' // Cuộn mượt mà
            });
        });
    </script>

    <div class="cd__main">
        <div class="fab-container">
            <div class="fab shadow">
                <div class="fab-content">
                    <i class="fas fa-headset text-white"></i>
                    <!-- Thay đổi biểu tượng này -->
                </div>
            </div>
            <div class="sub-button shadow">
                <a href="tel:0904031103" target="_blank">
                    <i class="fas fa-phone"></i>
                </a>
            </div>
            <div class="sub-button shadow">
                <a href="https://m.me/590721277776663?ref=WelcomeMessage" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8"
                        viewBox="0 0 512 512">
                        <path fill="#ffffff"
                            d="M256.6 8C116.5 8 8 110.3 8 248.6c0 72.3 29.7 134.8 78.1 177.9 8.4 7.5 6.6 11.9 8.1 58.2A19.9 19.9 0 0 0 122 502.3c52.9-23.3 53.6-25.1 62.6-22.7C337.9 521.8 504 423.7 504 248.6 504 110.3 396.6 8 256.6 8zm149.2 185.1l-73 115.6a37.4 37.4 0 0 1 -53.9 9.9l-58.1-43.5a15 15 0 0 0 -18 0l-78.4 59.4c-10.5 7.9-24.2-4.6-17.1-15.7l73-115.6a37.4 37.4 0 0 1 53.9-9.9l58.1 43.5a15 15 0 0 0 18 0l78.4-59.4c10.4-8 24.1 4.5 17.1 15.6z" />
                    </svg>
                </a>
            </div>
            <div class="sub-button shadow">
                <a href="https://zalo.me/0904031103" target="_blank">
                    <?xml version="1.0" ?><svg height="22" id="Layer_1" viewBox="0 0 460.1 436.6" width="25"
                        xmlns="http://www.w3.org/2000/svg">
                        <style>
                            .st0 {
                                fill: #fdfefe
                            }

                            .st1 {
                                fill: #ffffff
                            }

                            .st2 {
                                fill: #ffffff
                            }

                            .st3 {
                                fill: none;
                                stroke: #ffffff;
                                stroke-width: 2;
                                stroke-miterlimit: 10
                            }
                        </style>
                        <title />
                        <path class="st0"
                            d="M82.6 380.9c-1.8-.8-3.1-1.7-1-3.5 1.3-1 2.7-1.9 4.1-2.8 13.1-8.5 25.4-17.8 33.5-31.5 6.8-11.4 5.7-18.1-2.8-26.5C69 269.2 48.2 212.5 58.6 145.5 64.5 107.7 81.8 75 107 46.6c15.2-17.2 33.3-31.1 53.1-42.7 1.2-.7 2.9-.9 3.1-2.7-.4-1-1.1-.7-1.7-.7-33.7 0-67.4-.7-101 .2C28.3 1.7.5 26.6.6 62.3c.2 104.3 0 208.6 0 313 0 32.4 24.7 59.5 57 60.7 27.3 1.1 54.6.2 82 .1 2 .1 4 .2 6 .2H290c36 0 72 .2 108 0 33.4 0 60.5-27 60.5-60.3v-.6-58.5c0-1.4.5-2.9-.4-4.4-1.8.1-2.5 1.6-3.5 2.6-19.4 19.5-42.3 35.2-67.4 46.3-61.5 27.1-124.1 29-187.6 7.2-5.5-2-11.5-2.2-17.2-.8-8.4 2.1-16.7 4.6-25 7.1-24.4 7.6-49.3 11-74.8 6zm72.5-168.5c1.7-2.2 2.6-3.5 3.6-4.8 13.1-16.6 26.2-33.2 39.3-49.9 3.8-4.8 7.6-9.7 10-15.5 2.8-6.6-.2-12.8-7-15.2-3-.9-6.2-1.3-9.4-1.1-17.8-.1-35.7-.1-53.5 0-2.5 0-5 .3-7.4.9-5.6 1.4-9 7.1-7.6 12.8 1 3.8 4 6.8 7.8 7.7 2.4.6 4.9.9 7.4.8 10.8.1 21.7 0 32.5.1 1.2 0 2.7-.8 3.6 1-.9 1.2-1.8 2.4-2.7 3.5-15.5 19.6-30.9 39.3-46.4 58.9-3.8 4.9-5.8 10.3-3 16.3s8.5 7.1 14.3 7.5c4.6.3 9.3.1 14 .1 16.2 0 32.3.1 48.5-.1 8.6-.1 13.2-5.3 12.3-13.3-.7-6.3-5-9.6-13-9.7-14.1-.1-28.2 0-43.3 0zm116-52.6c-12.5-10.9-26.3-11.6-39.8-3.6-16.4 9.6-22.4 25.3-20.4 43.5 1.9 17 9.3 30.9 27.1 36.6 11.1 3.6 21.4 2.3 30.5-5.1 2.4-1.9 3.1-1.5 4.8.6 3.3 4.2 9 5.8 14 3.9 5-1.5 8.3-6.1 8.3-11.3.1-20 .2-40 0-60-.1-8-7.6-13.1-15.4-11.5-4.3.9-6.7 3.8-9.1 6.9zm69.3 37.1c-.4 25 20.3 43.9 46.3 41.3 23.9-2.4 39.4-20.3 38.6-45.6-.8-25-19.4-42.1-44.9-41.3-23.9.7-40.8 19.9-40 45.6zm-8.8-19.9c0-15.7.1-31.3 0-47 0-8-5.1-13-12.7-12.9-7.4.1-12.3 5.1-12.4 12.8-.1 4.7 0 9.3 0 14v79.5c0 6.2 3.8 11.6 8.8 12.9 6.9 1.9 14-2.2 15.8-9.1.3-1.2.5-2.4.4-3.7.2-15.5.1-31 .1-46.5z" />
                        <path class="st1"
                            d="M139.5 436.2c-27.3 0-54.7.9-82-.1-32.3-1.3-57-28.4-57-60.7 0-104.3.2-208.6 0-313C.5 26.7 28.4 1.8 60.5.9c33.6-.9 67.3-.2 101-.2.6 0 1.4-.3 1.7.7-.2 1.8-2 2-3.1 2.7-19.8 11.6-37.9 25.5-53.1 42.7-25.1 28.4-42.5 61-48.4 98.9-10.4 66.9 10.5 123.7 57.8 171.1 8.4 8.5 9.5 15.1 2.8 26.5-8.1 13.7-20.4 23-33.5 31.5-1.4.8-2.8 1.8-4.2 2.7-2.1 1.8-.8 2.7 1 3.5.4.9.9 1.7 1.5 2.5 11.5 10.2 22.4 21.1 33.7 31.5 5.3 4.9 10.6 10 15.7 15.1 2.1 1.9 5.6 2.5 6.1 6.1z" />
                        <path class="st2"
                            d="M139.5 436.2c-.5-3.5-4-4.1-6.1-6.2-5.1-5.2-10.4-10.2-15.7-15.1-11.3-10.4-22.2-21.3-33.7-31.5-.6-.8-1.1-1.6-1.5-2.5 25.5 5 50.4 1.6 74.9-5.9 8.3-2.5 16.6-5 25-7.1 5.7-1.5 11.7-1.2 17.2.8 63.4 21.8 126 19.8 187.6-7.2 25.1-11.1 48-26.7 67.4-46.2 1-1 1.7-2.5 3.5-2.6.9 1.4.4 2.9.4 4.4v58.5c.2 33.4-26.6 60.6-60 60.9h-.5c-36 .2-72 0-108 0H145.5c-2-.2-4-.3-6-.3z" />
                        <path class="st1"
                            d="M155.1 212.4c15.1 0 29.3-.1 43.4 0 7.9.1 12.2 3.4 13 9.7.9 7.9-3.7 13.2-12.3 13.3-16.2.2-32.3.1-48.5.1-4.7 0-9.3.2-14-.1-5.8-.3-11.5-1.5-14.3-7.5s-.8-11.4 3-16.3c15.4-19.6 30.9-39.3 46.4-58.9.9-1.2 1.8-2.4 2.7-3.5-1-1.7-2.4-.9-3.6-1-10.8-.1-21.7 0-32.5-.1-2.5 0-5-.3-7.4-.8-5.7-1.3-9.2-7-7.9-12.6.9-3.8 3.9-6.9 7.7-7.8 2.4-.6 4.9-.9 7.4-.9 17.8-.1 35.7-.1 53.5 0 3.2-.1 6.3.3 9.4 1.1 6.8 2.3 9.7 8.6 7 15.2-2.4 5.7-6.2 10.6-10 15.5-13.1 16.7-26.2 33.3-39.3 49.8-1.1 1.3-2.1 2.6-3.7 4.8z" />
                        <path class="st1"
                            d="M271.1 159.8c2.4-3.1 4.9-6 9-6.8 7.9-1.6 15.3 3.5 15.4 11.5.3 20 .2 40 0 60 0 5.2-3.4 9.8-8.3 11.3-5 1.9-10.7.4-14-3.9-1.7-2.1-2.4-2.5-4.8-.6-9.1 7.4-19.4 8.7-30.5 5.1-17.8-5.8-25.1-19.7-27.1-36.6-2.1-18.3 4-33.9 20.4-43.5 13.6-8.1 27.4-7.4 39.9 3.5zm-35.4 36.5c.2 4.4 1.6 8.6 4.2 12.1 5.4 7.2 15.7 8.7 23 3.3 1.2-.9 2.3-2 3.3-3.3 5.6-7.6 5.6-20.1 0-27.7-2.8-3.9-7.2-6.2-11.9-6.3-11-.7-18.7 7.8-18.6 21.9zM340.4 196.9c-.8-25.7 16.1-44.9 40.1-45.6 25.5-.8 44.1 16.3 44.9 41.3.8 25.3-14.7 43.2-38.6 45.6-26.1 2.6-46.8-16.3-46.4-41.3zm25.1-2.4c-.2 5 1.3 9.9 4.3 14 5.5 7.2 15.8 8.6 23 3 1.1-.8 2-1.8 2.9-2.8 5.8-7.6 5.8-20.4.1-28-2.8-3.8-7.2-6.2-11.9-6.3-10.8-.6-18.4 7.6-18.4 20.1zM331.6 177c0 15.5.1 31 0 46.5.1 7.1-5.5 13-12.6 13.2-1.2 0-2.5-.1-3.7-.4-5-1.3-8.8-6.6-8.8-12.9v-79.5c0-4.7-.1-9.3 0-14 .1-7.7 5-12.7 12.4-12.7 7.6-.1 12.7 4.9 12.7 12.9.1 15.6 0 31.3 0 46.9z" />
                        <path class="st0"
                            d="M235.7 196.3c-.1-14.1 7.6-22.6 18.5-22 4.7.2 9.1 2.5 11.9 6.4 5.6 7.5 5.6 20.1 0 27.7-5.4 7.2-15.7 8.7-23 3.3-1.2-.9-2.3-2-3.3-3.3-2.5-3.5-3.9-7.7-4.1-12.1zM365.5 194.5c0-12.4 7.6-20.7 18.4-20.1 4.7.1 9.1 2.5 11.9 6.3 5.7 7.6 5.7 20.5-.1 28-5.6 7.1-16 8.3-23.1 2.7-1.1-.8-2-1.8-2.8-2.9-3-4.1-4.4-9-4.3-14z" />
                        <path class="st3"
                            d="M66 1h328.1c35.9 0 65 29.1 65 65v303c0 35.9-29.1 65-65 65H66c-35.9 0-65-29.1-65-65V66C1 30.1 30.1 1 66 1z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <style>
        .fab-container {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: center;
            user-select: none;
            position: fixed;
            bottom: 30px;
            left: 30px;
            z-index: 9999;
            /* Đặt z-index cao để đảm bảo nút nổi trên các lớp khác */
        }

        .fab-container:hover {
            height: auto;
        }

        .fab-container:hover .sub-button {
            transform: translateY(-20px);
            opacity: 1;
        }

        .fab-container .sub-button {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            bottom: 20px;
            opacity: 0;
            transition: all 0.5s ease;
            height: 50px;
            width: 50px;
            background-color: #4ba2ff;
            border-radius: 50%;
            cursor: pointer;
        }

        .fab-container .sub-button:nth-child(2) {
            bottom: 60px;
        }

        .fab-container .sub-button:nth-child(3) {
            bottom: 120px;
        }

        .fab-container .sub-button:nth-child(4) {
            bottom: 180px;
        }

        .fab-container .sub-button:nth-child(5) {
            bottom: 240px;
        }

        .fab-container .fab {
            position: relative;
            height: 60px;
            width: 60px;
            background-color: #4ba2ff;
            border-radius: 50%;
            z-index: 2;
        }

        .fab-container .fab::before {
            content: " ";
            position: absolute;
            bottom: 0;
            right: 0;
            height: 35px;
            width: 35px;
            background-color: inherit;
            border-radius: 0 0 10px 0;
            z-index: -1;
        }

        .fab-container .fab .fab-content {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 100%;
            border-radius: 50%;
        }

        .fab-container .fab .fab-content .fas {
            color: white;
            font-size: 36px;
        }

        .fab-container .sub-button .fas {
            color: white;
            padding-top: 6px;
        }

        /* Media query để điều chỉnh kích thước và vị trí cho màn hình nhỏ */
        @media (max-width: 600px) {
            .fab-container {
                bottom: 20px;
                left: 20px;
            }

            .fab-container .fab {
                height: 50px;
                width: 50px;
            }

            .fab-container .sub-button {
                height: 40px;
                width: 40px;
            }

            .fab-container .sub-button:nth-child(2) {
                bottom: 50px;
            }

            .fab-container .sub-button:nth-child(3) {
                bottom: 100px;
            }

            .fab-container .sub-button:nth-child(4) {
                bottom: 150px;
            }

            .fab-container .sub-button:nth-child(5) {
                bottom: 200px;
            }
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fabContainer = document.querySelector('.fab-container');
            fabContainer.style.display = 'none';

            function checkScroll() {
                if (window.scrollY > 100) {
                    fabContainer.style.display = 'flex';
                } else {
                    fabContainer.style.display = 'none';
                }
            }

            checkScroll();
            window.addEventListener('scroll', checkScroll);
        });
    </script>
    @stack('bottom_scripts')
</body>

</html>
