<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuyển Sinh 2025 - Đại học Nông Lâm Thái Nguyên</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daisyui@2.51.6/dist/full.css">
    <link href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <!-- Header -->
    <header class="text-white text-center">
        <img src="{{ asset('newhome/header.png') }}" alt="">
    </header>

    <section class="container mx-auto p-6 relative hidden md:flex">
        <!-- Hình ảnh nền -->
        <img src="{{ asset('newhome/frame techono.png') }}" alt="Tech Frame" class="w-full h-auto">

        <!-- Chữ chồng lên ảnh -->
        <div class="absolute inset-0 mx-4 flex flex-col items-center justify-center p-6 space-y-2 text-justify">
            <!-- Đoạn 1 -->
            <div class="mx-8 text-sm md:text-sm lg:text-lg leading-relaxed flex">
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
            <div class="mx-8 text-sm md:text-sm lg:text-lg leading-relaxed flex">
                <img src="{{ asset('newhome/bullet.png') }}" class="size-8" alt="">
                <p>
                    <strong>Quyết định số 749/QĐ-TTg </strong>
                    ngày 03/06/2020 phê duyệt "Chương trình Chuyển đổi số quốc gia đến năm 2025, định hướng đến năm
                    2030" với mục tiêu phát triển chính phủ số, kinh tế số, xã hội số, hình thành các doanh nghiệp số
                    tiên phong và nâng cao năng lực cạnh tranh quốc gia trong kỷ nguyên số.
                </p>
            </div>

            <!-- Đoạn 3 -->
            <div class="mx-8 text-sm md:text-sm lg:text-lg leading-relaxed flex">
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
    <section class="relative">
        <!-- Hình ảnh nền -->
        <img src="{{ asset('newhome/frame background.png') }}" alt="Tech Frame" class="w-full h-auto">

        <!-- Tiêu đề ở giữa -->
        <div class="absolute top-0 left-0 right-0 mt-2 text-center text-white text-xl md:text-2xl font-bold p-4">
            CHUYÊN NGÀNH ĐÀO TẠO CÔNG NGHỆ THÔNG TIN, CHUYỂN ĐỔI SỐ
        </div>

        <!-- Chứa ảnh theo hàng ngang -->
        <div class="absolute inset-0 flex flex-col items-center justify-center p-6 pb-0">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-20">
                <!-- ảnh 1 -->
                <div class="relative flex justify-center">
                    <img src="{{ asset('newhome/nganh 1.png') }}" class="w-80 h-auto" alt="">
                    <p class="absolute bottom-0 left-0 right-0 text-center text-black mb-9 font-bold italic text-base">
                        Mã ngành 7320205
                    </p>
                </div>

                <!-- ảnh 2 -->
                <div class="relative flex justify-center">
                    <img src="{{ asset('newhome/nganh 2.png') }}" class="w-80 h-auto" alt="">
                    <p class="absolute bottom-0 left-0 right-0 text-center text-black mb-9 font-bold italic text-base">
                        Mã ngành 7480201
                    </p>
                </div>

                <!-- ảnh 3 -->
                <div class="relative flex justify-center">
                    <img src="{{ asset('newhome/nganh 3.png') }}" class="w-80 h-auto" alt="">
                    <p class="absolute bottom-0 left-0 right-0 text-center text-black mb-9 font-bold italic text-base">
                        Mã ngành 7480201
                    </p>
                </div>
            </div>
        </div>
    </section>



    <!-- Phương thức xét tuyển -->
    <section class="bg-white p-6 mt-6 shadow-lg">
        <h2 class="text-2xl font-bold text-center">Phương thức xét tuyển</h2>
        <ul class="list-disc px-10 mt-4">
            <li>Xét tuyển sử dụng kết quả thi THPT.</li>
            <li>Xét tuyển sử dụng học bạ cấp 3.</li>
            <li>Xét tuyển thẳng theo quy định của Bộ Giáo dục.</li>
        </ul>
    </section>

    <!-- Cam kết với sinh viên -->
    <section class="container mx-auto p-6">
        <h2 class="text-2xl font-bold text-center">Cam Kết Với Sinh Viên</h2>
        <div class="grid md:grid-cols-2 gap-6 mt-4">
            <div class="bg-blue-100 p-4 shadow-lg">
                <p>💡 Giao tiếp tốt bằng tiếng Anh, tiếng Trung.</p>
                <p>💼 Nắm vững 3 tham gia dự án có lương.</p>
                <p>🚀 Chuyên sâu về công nghệ thông tin, trí tuệ nhân tạo.</p>
            </div>
            <div class="bg-blue-100 p-4 shadow-lg">
                <p>✅ Cơ hội làm ngay sau khi tốt nghiệp.</p>
                <p>🎓 Học bổng giá trị lên đến 150 triệu đồng.</p>
            </div>
        </div>
    </section>

    <!-- Môi trường học tập -->
    <section class="p-6 bg-gray-200">
        <h2 class="text-2xl font-bold text-center">Môi Trường Học Tập</h2>
        <div class="flex flex-wrap justify-center gap-4 mt-4">
            <span class="badge badge-primary">Ký túc xá</span>
            <span class="badge badge-secondary">Thư viện</span>
            <span class="badge badge-accent">Phòng máy tính</span>
            <span class="badge badge-info">Nhà thể thao</span>
        </div>
    </section>

    <!-- Thông tin liên hệ -->
    <footer>
        <div class="bg-[#80a6f7] text-white p-6 mt-6 justify-center md:gap-60 block md:flex">
            <div class="col-span-2 justify-self-center text-lg">
                <h2 class="!text-4xl font-bold">Thông tin liên hệ</h2>
                <div class="text-black mt-3">
                    <p class="font-semibold">
                        <i class="fad fa-user-tie"></i>
                        Tiến sĩ Nguyễn Văn Hiếu
                    </p>
                    <div class="ml-5">
                        <p>Giám đốc Trung tâm Nghiên cứu Địa tin học</p>
                        <p>Trường đại học Nông Lâm, Đại học Thái Nguyên</p>

                        <p>SĐT/Zalo: 0934 001 103</p>
                    </div>

                </div>

                <p class="flex text-black font-semibold mt-4">
                    <svg class="w-5" fill="#000000" viewBox="0 0 14 14" role="img" focusable="false"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M 7,7 C 8.6570312,7 10,5.65703 10,4 10,2.34297 8.6570312,1 7,1 5.3429688,1 4,2.34297 4,4 4,5.65703 5.3429688,7 7,7 Z M 9.2453125,7.76406 8.125,12.25 7.375,9.0625 8.125,7.75 5.875,7.75 6.625,9.0625 5.875,12.25 4.7546875,7.76406 C 3.0835937,7.84375 1.75,9.21016 1.75,10.9 l 0,0.975 C 1.75,12.49609 2.2539063,13 2.875,13 l 8.25,0 c 0.621094,0 1.125,-0.50391 1.125,-1.125 l 0,-0.975 c 0,-1.68984 -1.333594,-3.05625 -3.0046875,-3.13594 z">
                            </path>
                        </g>
                    </svg>
                    Thạc sĩ Phạm Ngọc Huyền - Phụ trách chương trình đào tạo
                </p>
                <p class="text-black ml-5">SĐT/Zalo: 0329 014 816</p>

                <div class="mt-4 text-black">
                    <p class="font-semibold">
                        <i class="fad fa-map-marker-alt"></i>
                        Địa chỉ: Trường Đại học Nông Lâm, Đại học Thái Nguyên
                    </p>
                    <p class="ml-5">Tổ 10, Xã Quyết Thắng, Thành phố Thái Nguyên, Tỉnh Thái Nguyên</p>
                </div>
            </div>
            <div class="col-span-1 justify-self-center mt-3 md:mt-0">
                <iframe class="w-[375px] md:w-96"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3709.7968399958504!2d105.8082287107248!3d21.59385188011803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313527142d4a273b%3A0x93ac520307150ed8!2zVHJ1bmcgdMOibSBOZ2hpw6puIGPhu6l1IMSQ4buLYSB0aW4gaOG7jWMgLSBHSVJD!5e0!3m2!1svi!2s!4v1741098932000!5m2!1svi!2s"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="bg-[#2753ac] text-white text-center h-8 place-content-center">
            <span>
                @2025 GeoInformatics Research Center
            </span>
        </div>

    </footer>

</body>

</html>
