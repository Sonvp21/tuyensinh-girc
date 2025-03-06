<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuyển Sinh 2025 - Đại học Nông Lâm Thái Nguyên</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daisyui@2.51.6/dist/full.css">
    <link href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css" rel="stylesheet">
    {{-- icon liên hệ lơ lửng  --}}
    <link rel='stylesheet' id='pzf-style-css' href='{{ asset('newhome/zalostyle.css') }}' type='text/css'
        media='all' />
    {{-- icon liên hệ lơ lửng  --}}

    {{-- swiper --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

</head>

<body>

    <!-- Header -->
    <header class="text-white text-center">
        <img src="{{ asset('newhome/header.png') }}" class="relative w-full" alt="">
    </header>

    <section class="container mx-auto px-12 relative hidden md:flex">
        <!-- Hình ảnh nền -->
        <img src="{{ asset('newhome/frame techono.png') }}" alt="Tech Frame" class="w-full h-auto">

        <!-- Chữ chồng lên ảnh -->
        <div class="absolute inset-0 mx-4 flex flex-col items-center justify-center p-6 space-y-1 text-justify">
            <!-- Đoạn 1 -->
            <div class="ml-8 pr-12 text-sm md:text-sm lg:text-lg leading-relaxed flex">
                <img src="{{ asset('newhome/bullet.png') }}" class="size-8" alt="">
                <p>
                    <strong>Nghị quyết số 57-NQ/TW </strong> ngày 22/12/2024 của Bộ Chính trị xác định phát triển khoa
                    học, công nghệ, đổi mới sáng tạo và chuyển đổi số quốc gia là đột phá quan trọng hàng đầu, nhằm tạo
                    động lực chính để phát triển lực lượng sản xuất hiện đại, hoàn thiện quan hệ sản xuất, đổi mới quản
                    trị quốc gia, phát triển kinh tế - xã hội, ngăn chặn nguy cơ tụt hậu và đưa đất nước phát triển bứt
                    phá trong kỷ nguyên mới.
                </p>
            </div>

            <!-- Đoạn 2 -->
            <div class="ml-8 pr-12 text-sm md:text-sm lg:text-lg leading-relaxed flex">
                <img src="{{ asset('newhome/bullet.png') }}" class="size-8" alt="">
                <p>
                    <strong>Quyết định số 749/QĐ-TTg </strong>
                    ngày 03/06/2020 phê duyệt "Chương trình Chuyển đổi số quốc gia đến năm 2025, định hướng đến năm
                    2030" với mục tiêu phát triển chính phủ số, kinh tế số, xã hội số, hình thành các doanh nghiệp số
                    tiên phong và nâng cao năng lực cạnh tranh quốc gia trong kỷ nguyên số.
                </p>
            </div>

            <!-- Đoạn 3 -->
            <div class="ml-8 pr-12 text-sm md:text-sm lg:text-lg leading-relaxed flex">
                <img src="{{ asset('newhome/bullet.png') }}" class="size-8" alt="">
                <p>
                    <strong>Quyết định số 942/QĐ-TTg </strong>
                    ngày 15/6/2021 của Thủ tướng Chính phủ về việc phê duyệt Chiến lược phát triển Chính phủ điện tử
                    hướng tới Chính phủ số giai đoạn 2021-2025, định hướng đến năm 2030.
                </p>
            </div>
        </div>
    </section>
    {{-- mobile  --}}
    <section class="container mx-auto px-2 relative flex md:hidden">
        <!-- Hình ảnh nền -->
        <img src="{{ asset('newhome/frame techono.png') }}" alt="Tech Frame" class="w-full h-auto">

        <!-- Chữ chồng lên ảnh -->
        <div class="absolute inset-0 flex flex-col items-center justify-center px-2 space-y-2 text-justify">
            <!-- Đoạn 1 -->
            <div class="mx-2 text-xs leading-relaxed flex">
                <img src="{{ asset('newhome/bullet.png') }}" class="size-6" alt="">
                <p>
                    <strong>Nghị quyết số 57-NQ/TW </strong> ngày 22/12/2024 của Bộ Chính trị xác định phát triển khoa
                    học, công nghệ, đổi mới sáng tạo và chuyển đổi số quốc gia là đột phá quan trọng hàng đầu...
                </p>
            </div>
        </div>
    </section>
    <section class="container mx-auto px-2 relative  flex md:hidden">
        <!-- Hình ảnh nền -->
        <img src="{{ asset('newhome/frame techono.png') }}" alt="Tech Frame" class="w-full h-auto">

        <!-- Chữ chồng lên ảnh -->
        <div class="absolute inset-0 flex flex-col items-center justify-center px-2 space-y-2 text-justify">
            <!-- Đoạn 2 -->
            <div class="mx-2 text-xs leading-relaxed flex">
                <img src="{{ asset('newhome/bullet.png') }}" class="size-6" alt="">
                <p>
                    <strong>Quyết định số 749/QĐ-TTg </strong>
                    ngày 03/06/2020 phê duyệt "Chương trình Chuyển đổi số quốc gia đến năm 2025, định hướng đến năm
                    2030" với mục tiêu phát triển chính phủ số, kinh tế số, xã hội số...
                </p>
            </div>
        </div>
    </section>
    <section class="container mx-auto px-2 relative  flex md:hidden">
        <!-- Hình ảnh nền -->
        <img src="{{ asset('newhome/frame techono.png') }}" alt="Tech Frame" class="w-full h-auto">
        <div class="absolute inset-0 flex flex-col items-center justify-center px-2 space-y-2 text-justify">
            <!-- Đoạn 3 -->
            <div class="mx-2 text-xs leading-relaxed flex">
                <img src="{{ asset('newhome/bullet.png') }}" class="size-6" alt="">
                <p>
                    <strong>Quyết định số 942/QĐ-TTg </strong>
                    ngày 15/6/2021 của Thủ tướng Chính phủ về việc phê duyệt Chiến lược phát triển Chính phủ điện tử
                    hướng tới Chính phủ số giai đoạn 2021-2025, định hướng đến năm 2030.
                </p>
            </div>
        </div>
    </section>
    {{-- end mobile  --}}


    <!-- Giới thiệu ngành học -->
    <section class="relative bg-[#019bc8]">
        <div class="container mx-auto px-12 justify-self-center ">
            <div class="bg-[#037ca5]">
                <!-- Tiêu đề ở giữa -->
                <div class="text-center text-white text-xl md:text-2xl font-bold p-4">
                    CHUYÊN NGÀNH ĐÀO TẠO CÔNG NGHỆ THÔNG TIN, CHUYỂN ĐỔI SỐ
                </div>

                <!-- Chứa ảnh theo hàng ngang -->
                <div class="md:flex flex-col items-center justify-center">
                    <div class="grid grid-cols-1 md:grid-cols-3 md:gap-20">
                        <!-- ảnh 1 -->
                        <div class="relative flex justify-center">
                            <img src="{{ asset('newhome/nganh 1.png') }}" class="md:w-80 h-auto" alt="">
                            <p
                                class="absolute bottom-0 left-0 right-0 text-center text-black mb-9 font-bold italic text-base">
                                Mã ngành 7320205
                            </p>
                        </div>

                        <!-- ảnh 2 -->
                        <div class="relative flex justify-center">
                            <img src="{{ asset('newhome/nganh 2.png') }}" class="md:w-80 h-auto" alt="">
                            <p
                                class="absolute bottom-0 left-0 right-0 text-center text-black mb-9 font-bold italic text-base">
                                Mã ngành 7480201
                            </p>
                        </div>

                        <!-- ảnh 3 -->
                        <div class="relative flex justify-center">
                            <img src="{{ asset('newhome/nganh 3.png') }}" class="md:w-80 h-auto" alt="">
                            <p
                                class="absolute bottom-0 left-0 right-0 text-center text-black mb-9 font-bold italic text-base">
                                Mã ngành 7480201
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section
        class="flex flex-col container mx-auto px-2 md:px-12 md:flex-row items-start md:items-center justify-between gap-20">
        <!-- Phương thức xét tuyển -->
        <div class="w-full md:w-1/2 text-white rounded-lg md:mt-0 mt-4">
            <!-- Tiêu đề với nền xanh -->
            <div class="relative inline-block">
                <!-- Nền xanh và chữ -->
                <h2 class="text-white font-bold uppercase text-lg px-4 py-2 bg-blue-900 inline-block">
                    PHƯƠNG THỨC XÉT TUYỂN
                </h2>
                <div class="absolute top-0 -right-2 w-4 h-full bg-blue-900 skew-x-[-20deg]"></div>
                <!-- Vạt góc cam -->
                <div class="absolute top-0 -right-10 w-4 h-full bg-orange-500 skew-x-[-20deg]"></div>
            </div>


            <!-- Danh sách xét tuyển -->
            <ul class="mt-3 space-y-2 md:leading-10 w-[90%] md:w-full">
                <li class="flex items-center text-orange-600 font-bold">
                    <span class="mr-2"><img src="{{ asset('newhome/bullet 2.png') }}" class="size-5 md:size-5"
                            alt="">
                    </span> XÉT TUYỂN SỬ DỤNG KẾT QUẢ THI TỐT NGHIỆP THPT
                </li>
                <li class="flex items-center text-orange-600 font-bold">
                    <span class="mr-2"><img src="{{ asset('newhome/bullet 2.png') }}" class="size-5 md:size-5"
                            alt="">
                    </span> XÉT TUYỂN SỬ DỤNG KẾT QUẢ HỌC TẬP CẤP THPT ( HỌC BẠ )
                </li>
                <li class="flex items-center text-orange-600 font-bold">
                    <span class="mr-2"><img src="{{ asset('newhome/bullet 2.png') }}" class="size-5 md:size-5"
                            alt="">
                    </span> XÉT TUYỂN THẲNG THEO QUY ĐỊNH CỦA QUY CHẾ TUYỂN SINH
                </li>
            </ul>
        </div>


        <!-- Tổ hợp xét tuyển -->
        <div class="w-full md:w-1/2 text-white rounded-lg ">
            <div class="flex items-start">
                <img src="{{ asset('newhome/to_hop.png') }}" alt="icon" class="">

            </div>
        </div>
    </section>

    {{-- 100% SINH VIÊN CÓ CƠ HỘI NHẬN ĐƯỢC HỌC <br> BỔNG GIÁ TRỊ LÊN ĐẾN 150 TRIỆU ĐỒNG --}}
    <section class="relative bg-[#def0fe]">
        <!-- Chứa ảnh theo hàng ngang -->
        <div class="container mx-auto md:px-12 md:flex flex-col justify-self-center items-center">
            <div class="flex">
                <!-- Danh sách Nghị quyết -->
                <div class="relative justify-center">
                    <div
                        class="text-center text-xl md:text-2xl font-bold md:p-4 p-2 
                            bg-gradient-to-b from-blue-600 to-purple-600 
                            text-transparent bg-clip-text 
                            italic inline-block">
                        100% SINH VIÊN CÓ CƠ HỘI NHẬN ĐƯỢC HỌC
                        BỔNG GIÁ TRỊ LÊN ĐẾN 150 TRIỆU ĐỒNG
                    </div>

                    <div class="md:ml-8 ml-4 text-sm md:text-sm lg:text-lg leading-relaxed">
                        <div class="flex items-center">
                            <img src="{{ asset('newhome/bullet.png') }}" class="size-6 md:size-8" alt="">
                            <p class="ml-2">Miễn tiền ký túc xá năm đầu.</p>
                        </div>
                        <div class="flex items-center">
                            <img src="{{ asset('newhome/bullet.png') }}" class="size-6 md:size-8" alt="">
                            <p class="ml-2">Đào tạo miễn phí 450 giờ học Tiếng Anh và Tiếng Trung.</p>
                        </div>
                        <div class="flex items-center">
                            <img src="{{ asset('newhome/bullet.png') }}" class="size-6 md:size-8" alt="">
                            <p class="ml-2">Tham quan học tập 2 lần/kỳ tại các công ty phần mềm.</p>
                        </div>
                        <div class="flex items-center">
                            <img src="{{ asset('newhome/bullet.png') }}" class="size-6 md:size-8" alt="">
                            <p class="ml-2">Trang bị máy tính để bàn, máy tính xách tay.</p>
                        </div>
                        <div class="flex items-center">
                            <img src="{{ asset('newhome/bullet.png') }}" class="size-6 md:size-8" alt="">
                            <p class="ml-2">Học bổng nhà nước.</p>
                        </div>
                        <div class="flex items-center">
                            <img src="{{ asset('newhome/bullet.png') }}" class="size-6 md:size-8" alt="">
                            <p class="ml-2">Học bổng Trường Đại học Nông Lâm.</p>
                        </div>
                        <div class="flex items-center">
                            <img src="{{ asset('newhome/bullet.png') }}" class="size-6 md:size-8" alt="">
                            <p class="ml-2">Học bổng Trung tâm Nghiên cứu Địa tin học.</p>
                        </div>
                        <div class="flex items-center">
                            <img src="{{ asset('newhome/bullet.png') }}" class="size-6 md:size-8" alt="">
                            <p class="ml-2">Học bổng giáo sư Đài Loan.</p>
                        </div>
                        <div class="flex items-center">
                            <img src="{{ asset('newhome/bullet.png') }}" class="size-6 md:size-8" alt="">
                            <p class="ml-2">01 học kỳ thực tập tại và học lên Thạc sĩ tại Đài Loan.</p>
                        </div>
                    </div>

                </div>

                <!-- Ảnh minh họa -->
                <div class="relative md:flex justify-center hidden">
                    <img src="{{ asset('newhome/boy&girl.png') }}" class="h-auto" alt="">
                </div>
            </div>
        </div>
    </section>


    <!-- video cam kết sv -->
    <section class="relative container mx-auto md:px-12 px-2 justify-self-center">
        <div class="md:flex flex-col items-center justify-center">
            <div class="relative max-w-5xl mx-auto py-10 overflow-hidden">
                <div class="relative flex transition-transform duration-500 ease-in-out" id="carousel">
                    <div class="w-full flex-shrink-0">
                        <video class="w-full md:h-96 h-56 rounded-xl shadow-lg" controls>
                            <source src="{{ asset('videos/Program Overview (1920 x 1080 px) (Video)-2.mp4') }}"
                                type="video/mp4">
                            Trình duyệt của bạn không hỗ trợ video.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Swiper 1 Môi trường học tập-->
    <section class="container mx-auto md:px-12 px-1 relative">
        <div
            class="text-center text-xl md:text-2xl font-bold py-4 uppercase
            bg-gradient-to-b from-blue-400 to-blue-900
            text-transparent bg-clip-text 
            italic inline-block">
            MÔI TRƯỜNG HỌC TẬP
        </div>
        <div class="relative max-w-3xl mx-auto">
            <button
                class="absolute left-0 size-9 top-1/2 -translate-y-1/2 z-10 bg-gradient-to-b from-yellow-400 to-orange-500 
            text-white text-center rounded-full shadow-lg text-2xl transition-all duration-300 swiper-button-prev-1">
                ❮
            </button>

            <div class="swiper mySwiper1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="https://via.placeholder.com/300x200" alt="Slide 1"
                            class="w-full rounded-lg shadow-md"></div>
                    <div class="swiper-slide"><img src="https://via.placeholder.com/300x200" alt="Slide 2"
                            class="w-full rounded-lg shadow-md"></div>
                    <div class="swiper-slide"><img src="https://via.placeholder.com/300x200" alt="Slide 3"
                            class="w-full rounded-lg shadow-md"></div>
                    <div class="swiper-slide"><img src="https://via.placeholder.com/300x200" alt="Slide 4"
                            class="w-full rounded-lg shadow-md"></div>
                    <div class="swiper-slide"><img src="https://via.placeholder.com/300x200" alt="Slide 5"
                            class="w-full rounded-lg shadow-md"></div>
                    <div class="swiper-slide"><img src="https://via.placeholder.com/300x200" alt="Slide 11"
                            class="w-full rounded-lg shadow-md"></div>
                    <div class="swiper-slide"><img src="https://via.placeholder.com/300x200" alt="Slide 12"
                            class="w-full rounded-lg shadow-md"></div>
                    <div class="swiper-slide"><img src="https://via.placeholder.com/300x200" alt="Slide 13"
                            class="w-full rounded-lg shadow-md"></div>
                    <div class="swiper-slide"><img src="https://via.placeholder.com/300x200" alt="Slide 14"
                            class="w-full rounded-lg shadow-md"></div>
                    <div class="swiper-slide"><img src="https://via.placeholder.com/300x200" alt="Slide 15"
                            class="w-full rounded-lg shadow-md"></div>
                </div>
            </div>

            <button
                class="absolute right-0 size-9 top-1/2 -translate-y-1/2 z-10 bg-gradient-to-b from-yellow-400 to-orange-500 
            text-white text-center rounded-full shadow-lg text-2xl transition-all duration-300 swiper-button-next-1">
                ❯
            </button>
        </div>
    </section>

    <!-- Swiper 2 -->
    <div class="relative max-w-3xl mx-auto mt-10">
        <button
            class="absolute left-0 size-9 top-1/2 -translate-y-1/2 z-10 bg-gradient-to-b from-yellow-400 to-orange-500 
            text-white text-center rounded-full shadow-lg text-2xl transition-all duration-300 swiper-button-prev-2">
            ❮
        </button>

        <div class="swiper mySwiper2">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="https://via.placeholder.com/300x200" alt="Slide 11"
                        class="w-full rounded-lg shadow-md"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/300x200" alt="Slide 12"
                        class="w-full rounded-lg shadow-md"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/300x200" alt="Slide 13"
                        class="w-full rounded-lg shadow-md"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/300x200" alt="Slide 14"
                        class="w-full rounded-lg shadow-md"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/300x200" alt="Slide 15"
                        class="w-full rounded-lg shadow-md"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/300x200" alt="Slide 11"
                        class="w-full rounded-lg shadow-md"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/300x200" alt="Slide 12"
                        class="w-full rounded-lg shadow-md"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/300x200" alt="Slide 13"
                        class="w-full rounded-lg shadow-md"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/300x200" alt="Slide 14"
                        class="w-full rounded-lg shadow-md"></div>
                <div class="swiper-slide"><img src="https://via.placeholder.com/300x200" alt="Slide 15"
                        class="w-full rounded-lg shadow-md"></div>
            </div>
        </div>

        <button
            class="absolute right-0 size-9 top-1/2 -translate-y-1/2 z-10 bg-gradient-to-b from-yellow-400 to-orange-500 
            text-white text-center rounded-full shadow-lg text-2xl transition-all duration-300 swiper-button-next-2">
            ❯
        </button>
    </div>

    <!-- Initialize Swiper -->
    <script>
        var swiper1 = new Swiper(".mySwiper1", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next-1",
                prevEl: ".swiper-button-prev-1",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1
                }, // Màn hình rất nhỏ (điện thoại)
                640: {
                    slidesPerView: 2
                }, // Tablet nhỏ
                1024: {
                    slidesPerView: 5
                }, // Laptop trở lên
            }
        });

        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next-2",
                prevEl: ".swiper-button-prev-2",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                640: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 5
                },
            }
        });
    </script>

    <!-- Môi trường học tập -->
    <section class="container mx-auto md:px-12 px-1 relative">
        <div
            class="text-center text-xl md:text-2xl font-bold py-4 uppercase
            bg-gradient-to-b from-blue-200 via-blue-400 via-40% to-blue-800
            text-transparent bg-clip-text 
            italic inline-block">
            MÔI TRƯỜNG HỌC TẬP
        </div>
        <div class="grid md:grid-cols-5 gap-4">
            <div class="relative flex justify-center">
                <img src="{{ asset('newhome/album/kí-túc-xá-trường-nông-lâm.jpg') }}" class="md:w-80 h-auto"
                    alt="">
                <p class="absolute bottom-0 left-0 right-0 text-center text-white font-bold italic text-base p-1"
                    style="background: linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%);
                           transition: background 0.3s ease;"
                    onmouseover="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 1) 0%, rgba(21, 88, 132, 1) 100%)'"
                    onmouseout="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%)'">
                    Ký túc xá
                </p>
            </div>
            <div class="relative flex justify-center">
                <img src="{{ asset('newhome/album/giảng đường.jfif') }}" class="md:w-80 h-auto" alt="">
                <p class="absolute bottom-0 left-0 right-0 text-center text-white font-bold italic text-base p-1"
                    style="background: linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%);
                           transition: background 0.3s ease;"
                    onmouseover="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 1) 0%, rgba(21, 88, 132, 1) 100%)'"
                    onmouseout="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%)'">
                    Giảng đường
                </p>
            </div>
            <div class="relative flex justify-center">
                <img src="{{ asset('newhome/album/thư viện.jpg') }}" class="md:w-80 h-auto" alt="">
                <p class="absolute bottom-0 left-0 right-0 text-center text-white font-bold italic text-base p-1"
                    style="background: linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%);
                           transition: background 0.3s ease;"
                    onmouseover="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 1) 0%, rgba(21, 88, 132, 1) 100%)'"
                    onmouseout="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%)'">
                    Thư viện
                </p>
            </div>
            <div class="relative flex justify-center">
                <img src="{{ asset('newhome/album/phòng máy.png') }}" class="md:w-80 h-auto" alt="">
                <p class="absolute bottom-0 left-0 right-0 text-center text-white font-bold italic text-base p-1"
                    style="background: linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%);
                           transition: background 0.3s ease;"
                    onmouseover="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 1) 0%, rgba(21, 88, 132, 1) 100%)'"
                    onmouseout="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%)'">
                    Phòng máy tính
                </p>
            </div>
            <div class="relative flex justify-center">
                <img src="{{ asset('newhome/album/sân-cỏ-nhân-tạo.jpg') }}" class="md:w-80 h-auto" alt="">
                <p class="absolute bottom-0 left-0 right-0 text-center text-white font-bold italic text-base p-1"
                    style="background: linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%);
                           transition: background 0.3s ease;"
                    onmouseover="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 1) 0%, rgba(21, 88, 132, 1) 100%)'"
                    onmouseout="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%)'">
                    Nhà thể thao
                </p>
            </div>
        </div>
    </section>

    <!-- HOẠT ĐỘNG CỦA SINH VIÊN -->
    <section class="container mx-auto md:px-12 px-1 relative">
        <div
            class="text-center text-xl md:text-2xl font-bold py-4 uppercase
                bg-gradient-to-b from-yellow-400 to-orange-700
                text-transparent bg-clip-text 
                italic inline-block">
            HOẠT ĐỘNG CỦA SINH VIÊN
        </div>
        <div class="grid md:grid-cols-5 gap-4">
            <div class="relative flex justify-center">
                <img src="{{ asset('newhome/album/nhập học.JPG') }}" class="md:w-80 h-auto" alt="">
                <p class="absolute bottom-0 left-0 right-0 text-center text-white font-bold italic text-base p-1"
                    style="background: linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%);
                           transition: background 0.3s ease;"
                    onmouseover="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 1) 0%, rgba(21, 88, 132, 1) 100%)'"
                    onmouseout="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%)'">
                    Nhập học
                </p>
            </div>
            <div class="relative flex justify-center">
                <img src="{{ asset('newhome/album/học tiếng anh.jpg') }}" class="md:w-80 h-auto" alt="">
                <p class="absolute bottom-0 left-0 right-0 text-center text-white font-bold italic text-base p-1"
                    style="background: linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%);
                           transition: background 0.3s ease;"
                    onmouseover="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 1) 0%, rgba(21, 88, 132, 1) 100%)'"
                    onmouseout="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%)'">
                    Học ngoại ngữ
                </p>
            </div>
            <div class="relative flex justify-center">
                <img src="{{ asset('newhome/album/chuc tết.jfif') }}" class="md:w-80 h-auto" alt="">
                <p class="absolute bottom-0 left-0 right-0 text-center text-white font-bold italic text-base p-1"
                    style="background: linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%);
                           transition: background 0.3s ease;"
                    onmouseover="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 1) 0%, rgba(21, 88, 132, 1) 100%)'"
                    onmouseout="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%)'">
                    Chúc tết sinh viên
                </p>
            </div>
            <div class="relative flex justify-center">
                <img src="{{ asset('newhome/album/thể thao.jpg') }}" class="md:w-80 h-auto" alt="">
                <p class="absolute bottom-0 left-0 right-0 text-center text-white font-bold italic text-base p-1"
                    style="background: linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%);
                           transition: background 0.3s ease;"
                    onmouseover="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 1) 0%, rgba(21, 88, 132, 1) 100%)'"
                    onmouseout="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%)'">
                    Hoạt động thể thao
                </p>
            </div>
            <div class="relative flex justify-center">
                <img src="{{ asset('newhome/album/văn nghệ.jpg') }}" class="md:w-80 h-auto" alt="">
                <p class="absolute bottom-0 left-0 right-0 text-center text-white font-bold italic text-base p-1"
                    style="background: linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%);
                           transition: background 0.3s ease;"
                    onmouseover="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 1) 0%, rgba(21, 88, 132, 1) 100%)'"
                    onmouseout="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%)'">
                    Văn nghệ
                </p>
            </div>
        </div>
    </section>

    <!-- KHOA HỌC & CÔNG NGHỆ -->
    <section class="container mx-auto md:px-12 px-1 relative">
        <div
            class="text-xl md:text-2xl py-4 font-bold uppercase italic 
               bg-gradient-to-b from-yellow-400 via-lime-400 via-40% to-green-800
               bg-clip-text text-transparent">
            KHOA HỌC & CÔNG NGHỆ
        </div>


        <div class="grid md:grid-cols-5 gap-4">
            <div class="relative flex justify-center">
                <img src="{{ asset('newhome/album/hợp tác quốc tế.jpg') }}" class="md:w-80 h-auto" alt="">
                <p class="absolute bottom-0 left-0 right-0 text-center text-white font-bold italic text-base p-1"
                    style="background: linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%);
                           transition: background 0.3s ease;"
                    onmouseover="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 1) 0%, rgba(21, 88, 132, 1) 100%)'"
                    onmouseout="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%)'">
                    Hợp tác quốc tế
                </p>
            </div>
            <div class="relative flex justify-center">
                <img src="{{ asset('newhome/album/dự án.jpg') }}" class="md:w-80 h-auto" alt="">
                <p class="absolute bottom-0 left-0 right-0 text-center text-white font-bold italic text-base p-1"
                    style="background: linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%);
                           transition: background 0.3s ease;"
                    onmouseover="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 1) 0%, rgba(21, 88, 132, 1) 100%)'"
                    onmouseout="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%)'">
                    Triển khai dự án
                </p>
            </div>
            <div class="relative flex justify-center">
                <img src="{{ asset('newhome/album/điều tra.jpg') }}" class="md:w-80 h-auto" alt="">
                <p class="absolute bottom-0 left-0 right-0 text-center text-white font-bold italic text-base p-1"
                    style="background: linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%);
                           transition: background 0.3s ease;"
                    onmouseover="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 1) 0%, rgba(21, 88, 132, 1) 100%)'"
                    onmouseout="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%)'">
                    Điều tra thực địa
                </p>
            </div>
            <div class="relative flex justify-center">
                <img src="{{ asset('newhome/album/tạp huấn.jpg') }}" class="md:w-80 h-auto" alt="">
                <p class="absolute bottom-0 left-0 right-0 text-center text-white font-bold italic text-base p-1"
                    style="background: linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%);
                           transition: background 0.3s ease;"
                    onmouseover="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 1) 0%, rgba(21, 88, 132, 1) 100%)'"
                    onmouseout="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%)'">
                    Tập huấn công nghệ
                </p>
            </div>
            <div class="relative flex justify-center">
                <img src="{{ asset('newhome/album/nghiên cứu khoa học.jpg') }}" class="md:w-80 h-auto"
                    alt="">
                <p class="absolute bottom-0 left-0 right-0 text-center text-white font-bold italic text-base p-1"
                    style="background: linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%);
                           transition: background 0.3s ease;"
                    onmouseover="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 1) 0%, rgba(21, 88, 132, 1) 100%)'"
                    onmouseout="this.style.background='linear-gradient(270deg, rgba(85, 172, 57, 0.8) 0%, rgba(21, 88, 132, 0.8) 100%)'">
                    Nghiên cứu khoa học
                </p>
            </div>
        </div>
    </section>

    <!-- Thông tin liên hệ -->
    <footer id="footer" class="text-white bg-cover bg-center mt-5"
        style="background-image: url('{{ asset('/newhome/bg_footer.jpg') }}');">

        <div class="grid md:grid-cols-4 container mx-auto md:px-12 px-2 gap-5">
            <div class="md:col-span-2 mt-5">
                <div id="text-3" class="col pb-0 widget widget_text">
                    <span class="font-semibold text-xl uppercase">Trung tâm nghiên cứu Địa tin học</span>
                    <div class="is-divider small"></div>
                    <div class="mt-3">
                        <ul class="leading-7">
                            <li>
                                <strong><i class="far fa-map-marker-alt"></i> Địa chỉ:</strong>
                                <span>Trường Đại học Nông Lâm, Đại học Thái Nguyên</span>
                                <span class="block md:ml-[76px]">Tổ 10, Xã Quyết Thắng, Thành phố Thái Nguyên, Tỉnh
                                    Thái Nguyên</span>
                            </li>

                            <li><strong><i class="far fa-phone-alt"></i> Hotline:</strong> 0904031103</li>
                            <li><strong><i class="far fa-envelope"></i> Email: </strong> girc.tuaf@gmail.com</li>
                            <li><strong><i class="far fa-globe"></i> Website:</strong> girc.tuaf.edu.vn</li>
                        </ul>
                    </div>
                </div>

                <div class="my-5">
                    <ul class="flex gap-5 items-center">
                        <li class="">
                            <a title="Facebook" href="https://www.facebook.com/girctuaf" rel="nofollow"
                                target="_blank">
                                <img alt="Fanpage" class="size-7"
                                    src="https://httmaster.edu.vn/wp-content/plugins/zalo/img/Facebook.png">
                            </a>
                        </li>
                        <li class="">
                            <a title="Twitter" href="https://zalo.me/0904031103" rel="nofollow" target="_blank">
                                <img alt="Zalo" class="size-7 rounded-lg bg-blue-500"
                                    src="https://httmaster.edu.vn/wp-content/plugins/zalo/img/zalo.png"></a>
                        </li>
                        <li>
                            <a title="Youtube" href="https://www.youtube.com/@girctuaf" rel="nofollow"
                                target="_blank">
                                <img alt="youtube" class="size-8 rounded-full"
                                    src="https://banner2.cleanpng.com/20190827/hfk/transparent-youtube-icon-1713873095633.webp">
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-span-1 hidden md:flex">
                <div class="">
                    <iframe class="w-[292px] md:mt-16"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3709.7968399958504!2d105.8082287107248!3d21.59385188011803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313527142d4a273b%3A0x93ac520307150ed8!2zVHJ1bmcgdMOibSBOZ2hpw6puIGPhu6l1IMSQ4buLYSB0aW4gaOG7jWMgLSBHSVJD!5e0!3m2!1svi!2s!4v1741098932000!5m2!1svi!2s"
                        style="border-radius: 10px; border: 6px solid rgba(255, 255, 255, 0.3); overflow: hidden;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                </div>
            </div>
            {{-- <div class="col-span-1">
                <div class="mt-5">
                    <span class="font-semibold text-xl uppercase">Danh mục</span>
                    <div class="is-divider small"></div>
                    <div class="mt-3">
                        <ul class="leading-8">
                            <li>
                                <a class="hover:text-orange-400" href="#">
                                    <i class="fas fa-chevron-right mr-2"></i>Trang chủ</a>
                            </li>
                            <li>
                                <a class="hover:text-orange-400" href="#">
                                    <i class="fas fa-chevron-right mr-2"></i>Giới thiệu</a>
                            </li>
                            <li>
                                <a class="hover:text-orange-400" href="#">
                                    <i class="fas fa-chevron-right mr-2"></i>Học bổng - Ưu đãi</a>
                            </li>
                            <li>
                                <a class="hover:text-orange-400" href="#">
                                    <i class="fas fa-chevron-right mr-2"></i>Chương trình đào tạo</a>
                            </li>
                            <li>
                                <a class="hover:text-orange-400" href="#">
                                    <i class="fas fa-chevron-right mr-2"></i>Hoạt động sinh viên</a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="mt-5">
                    <span class="font-semibold text-xl uppercase">Chính sách</span>
                    <div class="is-divider small"></div>
                    <div class="mt-3">
                        <ul class="leading-8">
                            <li>
                                <a class="hover:text-orange-400" href="#">
                                    <i class="fas fa-chevron-right mr-2"></i>Chính sách và quy định chung</a>
                            </li>
                            <li>
                                <a class="hover:text-orange-400" href="#">
                                    <i class="fas fa-chevron-right mr-2"></i>Cam kết việc làm</a>
                            </li>
                            <li>
                                <a class="hover:text-orange-400" href="#">
                                    <i class="fas fa-chevron-right mr-2"></i>Cam kết học phí</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div> --}}
            <div class="col-span-1 hidden md:flex">
                <div class="md:mt-5">
                    <span class="font-semibold text-xl uppercase mt-5">Fanpage</span>
                    <div class="is-divider small"></div>
                    <div class="fb-page mt-4" data-href="https://www.facebook.com/girctuaf" data-tabs="timeline"
                        data-width="500" data-height="149" data-small-header="false"
                        data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"
                        style="border-radius: 10px; border: 6px solid rgba(255, 255, 255, 0.3); overflow: hidden;">
                    </div>

                    <!-- Script Facebook SDK -->
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v17.0">
                    </script>
                </div>


            </div>
        </div>
        <div class="container mx-auto px-12 gap-5">
            <hr class="border-t-2">
            <p class=" py-1">© 2025 GeoInformatics Research Center</p>

        </div>
    </footer>

    <!-- Popup Đăng ký -->
    <div id="popup" class="fixed inset-0 bg-black bg-opacity-50 flex z-50 items-center justify-center hidden">
        <div class="bg-white p-6 rounded-lg max-w-4xl relative">
            <!-- Nút đóng -->
            <button id="closePopup" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 text-xl">
                ✖
            </button>

            <div class="flex flex-col md:flex-row gap-2">
                <!-- Hình ảnh -->
                <div class="w-full md:flex hidden md:w-[130%]">
                    <img src="{{ asset('newhome/form dk.jpg') }}" alt="Banner" class="w-full rounded-lg">
                </div>

                <!-- Form Đăng Ký -->
                <div class="w-full">
                    <h2 class="text-2xl font-bold text-center mb-2 text-green-600">ĐĂNG KÝ NGAY</h2>
                    <p class="text-sm text-center mb-4">Vui lòng điền đầy đủ thông tin vào biểu mẫu dưới đây. Chúng tôi
                        sẽ liên hệ với bạn sớm nhất</p>

                    <form action="{{ route('dangky.store') }}" method="POST" class="space-y-3">
                        @csrf

                        <input type="text" name="name" id="name" placeholder="Họ và Tên*"
                            class="input input-bordered w-full">
                        <p id="error-name" class="text-red-500 text-sm hidden"></p>

                        <input type="tel" name="phone" id="phone" placeholder="Số điện thoại*"
                            class="input input-bordered w-full">
                        <p id="error-phone" class="text-red-500 text-sm hidden"></p>

                        <label class="block text-sm font-medium">Ngày sinh <span class="text-red-500">*</span></label>
                        <input type="date" name="birthday" id="birthday" class="input input-bordered w-full">
                        <p id="error-birthday" class="text-red-500 text-sm hidden"></p>


                        <input type="text" name="address" id="address" placeholder="Địa chỉ"
                            class="input input-bordered w-full">


                        <!-- Chọn tỉnh -->

                        <!-- Select2 CSS -->
                        <link href="{{ asset('select2/select2.min.css') }}" rel="stylesheet" />
                        <div class="grid grid-cols-2 gap-2">
                            <!-- Chọn tỉnh -->
                            <div class="mb-4">
                                <label class="block text-sm font-medium">Chọn tỉnh <span
                                        class="text-red-500">*</span></label>
                                <select id="province" name="province" class="select select-bordered w-full select2">
                                    <option value="" disabled selected>Chọn tỉnh</option>
                                </select>
                                <p id="error-province" class="text-red-500 text-sm hidden"></p>
                            </div>

                            <!-- Chọn trường THPT -->
                            <div class="mb-4">
                                <label class="block text-sm font-medium">Chọn trường THPT <span
                                        class="text-red-500">*</span></label>
                                <select id="highSchool" name="high_school"
                                    class="select select-bordered w-full select2">
                                    <option value="" disabled selected>Chọn trường</option>
                                </select>
                                <p id="error-highSchool" class="text-red-500 text-sm hidden"></p>
                            </div>
                        </div>

                        <select id="major" name="major" class="select select-bordered w-full">
                            <option value="" disabled selected>Chọn ngành học</option>
                            <option>Công nghệ và đổi mới sáng tạo</option>
                            <option>Ứng dụng trí tuệ nhân tạo</option>
                            <option>Quản lý thông tin</option>
                        </select>
                        <p id="error-major" class="text-red-500 text-sm hidden"></p>

                        <input type="text" name="facebook_link" placeholder="Link Facebook của bạn"
                            class="input input-bordered w-full" value="{{ old('facebook_link') }}">

                        <button type="submit" id="submitBtn" class="btn btn-primary w-full" disabled>Gửi</button>

                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                const formFields = {
                                    "name": {
                                        required: true
                                    },
                                    "phone": {
                                        required: true,
                                        regex: /^0[0-9]{9}$/
                                    },
                                    "birthday": {
                                        required: true
                                    },
                                    "province": {
                                        required: true
                                    },
                                    "highSchool": {
                                        required: true
                                    },
                                    "major": {
                                        required: true
                                    }
                                };

                                function validateField(id, rules) {
                                    const input = document.getElementById(id);
                                    const errorMsg = document.getElementById("error-" + id);

                                    if (!input) return true; // Bỏ qua nếu input không tồn tại

                                    let value = input.value.trim();
                                    let isValid = true;
                                    let errorMessage = ""; // Thông báo lỗi mặc định

                                    if (rules.required && !value) {
                                        isValid = false;
                                        switch (id) {
                                            case "name":
                                                errorMessage = "Vui lòng nhập họ và tên.";
                                                break;
                                            case "phone":
                                                errorMessage = "Số điện thoại không được để trống.";
                                                break;
                                            case "birthday":
                                                errorMessage = "Bạn cần chọn ngày sinh.";
                                                break;
                                            case "province":
                                                errorMessage = "Vui lòng chọn tỉnh/thành phố.";
                                                break;
                                            case "highSchool":
                                                errorMessage = "Vui lòng chọn trường THPT.";
                                                break;
                                            case "major":
                                                errorMessage = "Bạn phải chọn ngành học mong muốn.";
                                                break;
                                            default:
                                                errorMessage = "Trường này không được để trống.";
                                        }
                                    } else if (rules.regex && !rules.regex.test(value)) {
                                        isValid = false;
                                        if (id === "phone") {
                                            errorMessage = "Số điện thoại phải có 10 chữ số và bắt đầu bằng số 0.";
                                        } else {
                                            errorMessage = "Giá trị nhập không hợp lệ.";
                                        }
                                    }

                                    if (!isValid) {
                                        if (errorMsg) {
                                            errorMsg.textContent = errorMessage;
                                            errorMsg.classList.remove("hidden");
                                        }
                                        input.classList.add("border-red-500");
                                    } else {
                                        if (errorMsg) errorMsg.classList.add("hidden");
                                        input.classList.remove("border-red-500");
                                    }

                                    return isValid;
                                }


                                function checkFormValidity() {
                                    let isValid = Object.keys(formFields).every(id => validateField(id, formFields[id]));
                                    document.getElementById("submitBtn").disabled = !isValid;
                                }

                                Object.keys(formFields).forEach(id => {
                                    let input = document.getElementById(id);
                                    if (input) { // Kiểm tra nếu input tồn tại
                                        input.addEventListener("input", () => {
                                            validateField(id, formFields[id]);
                                            checkFormValidity();
                                        });
                                    }
                                });

                                async function loadProvincesAndHighSchools() {
                                    try {
                                        const response = await fetch('/highschools.json');
                                        window.highSchoolsData = await response.json();

                                        const provinceSelect = $("#province");
                                        const highSchoolSelect = $("#highSchool");

                                        provinceSelect.empty().append('<option value="" disabled selected>Chọn tỉnh</option>');
                                        highSchoolSelect.empty().append('<option value="" disabled selected>Chọn trường</option>');

                                        Object.keys(window.highSchoolsData).forEach(province => {
                                            provinceSelect.append(new Option(province, province));
                                        });

                                        // Áp dụng Select2
                                        $(".select2").select2({
                                            width: "100%",
                                            placeholder: "Chọn...",
                                            allowClear: true
                                        });

                                        // Khi chọn tỉnh -> Cập nhật danh sách trường
                                        provinceSelect.on("change", function() {
                                            let selectedProvince = provinceSelect.val();
                                            highSchoolSelect.empty().append(
                                                '<option value="" disabled selected>Chọn trường</option>');

                                            if (window.highSchoolsData[selectedProvince]) {
                                                window.highSchoolsData[selectedProvince].forEach(school => {
                                                    highSchoolSelect.append(new Option(school, school));
                                                });
                                            }

                                            highSchoolSelect.trigger("change");
                                            checkFormValidity();
                                        });

                                        highSchoolSelect.on("change", checkFormValidity);
                                    } catch (error) {
                                        console.error("Lỗi khi tải dữ liệu:", error);
                                    }
                                }

                                $(document).ready(loadProvincesAndHighSchools);
                            });
                        </script>

                    </form>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const popup = document.getElementById("popup");
                const closePopup = document.getElementById("closePopup");
                const popupKey = "popup_last_shown"; // Key lưu trong localStorage
                const popupInterval = 6 * 60 * 60 * 1000; // 6 giờ (milliseconds)

                // Kiểm tra nếu đã hiển thị popup trong khoảng thời gian quy định
                const lastShown = localStorage.getItem(popupKey);
                const now = new Date().getTime();

                if (!lastShown || now - lastShown > popupInterval) {
                    // Hiển thị popup
                    setTimeout(() => {
                        popup.classList.remove("hidden");
                        // Lưu timestamp lần hiển thị cuối
                        localStorage.setItem(popupKey, now);
                    }, 1000);
                }

                // Đóng popup khi nhấn nút "X"
                closePopup.addEventListener("click", function() {
                    popup.classList.add("hidden");
                });

                // Đóng popup khi nhấn bên ngoài nội dung
                popup.addEventListener("click", function(event) {
                    if (event.target === popup) {
                        popup.classList.add("hidden");
                    }
                });
            });
        </script>
    </div>

    <!-- Nút hình ảnh lơ lửng với hiệu ứng -->
    <div id="floatingButton" class="fixed top-1/2 right-5 transform -translate-y-1/2 z-50 cursor-pointer">
        <div class="relative">
            <!-- Vòng tròn hiệu ứng tỏa ra -->
            <span class="absolute inset-0 w-full h-full rounded-full"></span>
            <span class="absolute inset-0 w-full h-full rounded-full"></span>

            <!-- Hình ảnh đăng ký -->
            <img src="{{ asset('newhome/đăng ký nhận H.png') }}" alt="Đăng ký ngay"
                class="w-48 h-w-40 transition-transform animate-pulse hover:scale-125 duration-100">
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const floatingButton = document.getElementById("floatingButton");
                const popup = document.getElementById("popup");

                // Khi click vào hình ảnh -> Hiển thị popup
                floatingButton.addEventListener("click", function() {
                    popup.classList.remove("hidden");
                });
            });
        </script>
    </div>

    <!-- thông báo toast -->
    <x-admin.alerts.toast />
    <!-- End thông báo toast -->

    <!-- icon liên hệ lơ lửng -->
    <div id="button-contact-vr" class="">
        <div id="gom-all-in-one">
            <!-- fanpage -->
            <div id="fanpage-vr" class="button-contact">
                <div class="phone-vr">
                    <div class="phone-vr-circle-fill"></div>
                    <div class="phone-vr-img-circle">
                        <a target="_blank" href="https://www.facebook.com/girctuaf">
                            <img alt="Fanpage"
                                src="https://httmaster.edu.vn/wp-content/plugins/zalo/img/Facebook.png" />
                        </a>
                    </div>
                </div>
            </div>
            <!-- end fanpage -->
            <!-- youtube -->
            <div id="youtube-vr" class="button-contact">
                <div class="phone-vr">
                    <div class="phone-vr-circle-fill"></div>
                    <div class="phone-vr-img-circle">
                        <a target="_blank" href="https://www.youtube.com/@girctuaf">
                            <img alt="youtube"
                                src="https://httmaster.edu.vn/wp-content/plugins/zalo/img/youtube.png" />
                        </a>
                    </div>
                </div>
            </div>
            <!-- end youtube -->
            <!-- zalo -->
            <div id="zalo-vr" class="button-contact">
                <div class="phone-vr">
                    <div class="phone-vr-circle-fill"></div>
                    <div class="phone-vr-img-circle">
                        <a target="_blank" href="https://zalo.me/0904031103" class="zalo_loading">
                            <img alt="Zalo" src="https://httmaster.edu.vn/wp-content/plugins/zalo/img/zalo.png" />
                            <span style="display:none;">https://zalo.me/0904031103</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end zalo -->
            <!-- Phone -->
            <div id="phone-vr" class="button-contact">
                <div class="phone-vr">
                    <div class="phone-vr-circle-fill"></div>
                    <div class="phone-vr-img-circle">
                        <a href="tel:0904031103">
                            <img alt="Phone"
                                src="https://httmaster.edu.vn/wp-content/plugins/zalo/img/phone.png" />
                        </a>
                    </div>
                </div>
            </div>
            <!-- end phone -->
        </div><!-- end v3 class gom-all-in-one -->
    </div>
    <!-- End icon liên hệ lơ lửng -->

    <!-- Back to top -->
    <a href="#top" class="hover:bg-red-700 bg-red-500 invert fixed z-1 circle rounded-full" id="top-link"
        aria-label="Go to top">
        <i class="fas fa-arrow-up"></i>
        <style>
            #top-link {
                display: none;
                position: fixed;
                width: 46px;
                height: 46px;
                border: 2px solid red;
                right: 20px;
                bottom: 140px;
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
            window.addEventListener('scroll', () => {
                if (window.scrollY > 200) { // Nếu cuộn quá 200px
                    backToTopBtn.classList.add('show');
                } else {
                    backToTopBtn.classList.remove('show');
                }
            });
            backToTopBtn.addEventListener('click', (e) => {
                e.preventDefault(); // Ngăn chặn hành vi mặc định
                window.scrollTo({
                    top: 0, // Cuộn về đầu trang
                    behavior: 'smooth' // Cuộn mượt mà
                });
            });
        </script>
    </a>
    <!-- End Back to top -->

    <!-- Chat trực tuyến -->
    <script src="https://app.tudongchat.com/js/chatbox.js"></script>
    <script>
        const tudong_chatbox = new TuDongChat('_eyUyr4r_GvLn10OhaRSw')
        tudong_chatbox.initial()
    </script>
    <!-- End Chat trực tuyến -->

</body>

</html>
