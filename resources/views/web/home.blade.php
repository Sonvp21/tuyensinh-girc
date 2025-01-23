<x-website-layout>

    <div>
        <div id="navbar-wrapper"
            class="max-w-7xl px-16 place-self-center md:block contents fixed left-0 right-0 top-0 z-50 tw-n tw-oa tw-fb"
            x-data="{ atTop: false }"
            :class="{
                'border top-0 xl:mt-4 mt-0 xl:rounded-full z-20 bg-base-100 lg:bg-opacity-95 border-base-content/10': atTop,
                'border-transparent':
                    !atTop
            }"
            @scroll.window="atTop = (window.pageYOffset < 30) ? false: true">
            <div>
                <nav class="tw-ef gap-3 px-0">
                    <div class="tw-ib tw-eg gap-2 w-3/6">
                        <div class="tw-yc tw-fd">
                            <label for="my-drawer" aria-label="open sidebar" class="tw-dh tw-hc tw-vc">
                                <i class="fad fa-bars"></i>
                            </label>
                        </div>
                        <!-- Navbar Brand logo -->
                        <a href="#" class="text-brand-gradient tw-he tw-ad tw-s"><img
                                src="{{ asset('home/logo GIRC co chu.jpg') }}" style="width: 260px;"
                                alt="Tuyển sinh-GIRC" /></a>
                    </div>

                    <div class="tw-oc tw-bf tw-lf gap-3 tw-je tw-be hidden md:flex">
                        <ul class="tw-ng tw-z tw-le tw-rf tw-tc contents !w-max">
                            <li class="tw-sb"><a href="#home">Giới thiệu</a></li>
                            <li class="tw-sb"><a href="#whychoose">Tại sao nên chọn?</a></li>
                            <li class="tw-sb"><a href="#timeline">Lộ trình đào tạo</a></li>
                            <li class="tw-sb"><a href="#tuyensinh">Tuyển sinh ngành</a></li>
                            <li class="tw-sb"><a href="#hocbong">Học bổng</a></li>
                        </ul>
                        <a class="btn border-2 uppercase border-none bg-gradient-to-b text-black font-bold shadow-lg"
                            style="min-height: 2rem; height: 2rem; ;background-image: linear-gradient(rgb(254, 244, 18), rgb(243, 140, 1));"
                            href="#dangky">Đăng ký</a>
                    </div>
                </nav>

                <!-- sm screen menu (drawer) -->
                <div class="tw-we">
                    <input id="my-drawer" type="checkbox" class="tw-ta" />
                    <div class="tw-rb z-[60]">
                        <label for="my-drawer" aria-label="close sidebar" class="tw-da"></label>

                        <ul class="tw-ng tw-nc tw-bh gap-2 bg-base-100 tw-gh tw-m">
                            <li class="tw-sb"><a href="#home">Giới thiệu</a></li>
                            <li class="tw-sb"><a href="#whychoose">Tại sao nên chọn?</a></li>
                            <li class="tw-sb"><a href="#timeline">Lộ trình đào tạo</a></li>
                            <li class="tw-sb"><a href="#tuyensinh">Tuyển sinh ngành</a></li>
                            <li class="tw-sb"><a href="#hocbong">Học bổng</a></li>
                            <li class="tw-sb"><a href="#dangky">Đăng ký</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <section class="relative md:py-20" id="home">
            <div class="tw-pd tw-ke tw-qd tw-uc tw-bb tw-pc tw-u"
                style="background-image: url('https://mobile-landing.daisyui.com/assets/bg-gradient-D4iqufZU.png')">
            </div>
            <div class="relative z-10">
                <div class="relative bg-cover bg-right h-[600px] md:h-[400px] sm:h-[300px]"
                    style="background-image: url('{{ asset('home/banner ladipage.png') }}');">
                    <div
                        class="absolute animated slide-in-top inset-0 flex items-center justify-center h-fit w-fit 
                top-[450px] md:top-[460px] sm:top-[200px] left-36 md:left-20 sm:left-10">
                        <a href="#dangky"
                            class="btn border-2 px-12 uppercase border-none bg-gradient-to-b 
            text-black font-bold rounded-full shadow-lg
            transition duration-300 animate-scale"
                            style="background-image: linear-gradient(rgb(254, 244, 18), rgb(243, 140, 1));">
                            Đăng Kí Ngay
                        </a>
                    </div>
                </div>

                <style>
                    /* Default styles for the background */
                    .relative {
                        width: 100%;
                        height: 600px;
                        /* Default height */
                        background-size: cover;
                        background-position: right;
                    }

                    /* Adjustments for medium screens (tablets, small desktops) */
                    @media (max-width: 1024px) {
                        .relative {
                            height: 400px;
                        }

                        .absolute {
                            top: 300px;
                            left: 20px;
                        }
                    }

                    /* Adjustments for small screens (mobile devices) */
                    @media (max-width: 768px) {
                        .relative {
                            height: 300px;
                            background-position: center;
                        }

                        .absolute {
                            top: 220px;
                            left: 10px;
                        }
                    }


                    @keyframes scale {

                        0%,
                        100% {
                            transform: scale(1);
                            /* Kích thước bình thường */
                        }

                        50% {
                            transform: scale(1.1);
                            /* Phóng to */
                        }
                    }

                    .animate-scale {
                        animation: scale 1s infinite;
                        /* Thời gian 2 giây, chạy vô hạn */
                    }
                </style>
            </div>
        </section>
        <section class="relative md:pt-20 justify-items-center !h-full">
            <div class="max-w-[58rem] gap-6 grid grid-cols-2 md:grid-cols-4 md:-mt-4 z-10 relative !h-max">
                <div class="bg-base-100 shadow-xl h-64 animated bounce-in-up">
                    <div class="px-10 pt-5 text-center place-self-center">
                        <div class="w-fit p-1 rounded-full " style="border: 1px solid #e8e8e8">
                            <i class="text-4xl text-orange-400 h-[60px] bg-[#e8e8e8] p-2 rounded-full penci-ibox-icon--i fa fa-graduation-cap"
                                aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="card-body items-center text-center">
                        <h2 class="card-title uppercase text-xl text-red-500">100%</h2>
                        <p class="text-base">Sinh viên tốt nghiệp có kiến thức chuyên sâu</p>

                    </div>
                </div>
                <div class="bg-base-100 shadow-xl h-64 animated bounce-in-up">
                    <div class="px-10 pt-5 text-center place-self-center">
                        <div class="w-fit p-1 rounded-full " style="border: 1px solid #e8e8e8">
                            <i class="text-4xl text-orange-400 h-[60px] bg-[#e8e8e8] p-2 rounded-full fas fa-handshake"
                                aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="card-body items-center text-center">
                        <h2 class="card-title uppercase text-xl text-red-500">100%</h2>
                        <p class="text-base">Sinh viên năm thứ 3 được tham gia dự án thực tế.</p>
                    </div>
                </div>
                <div class="bg-base-100 shadow-xl h-64 animated bounce-in-up">
                    <div class="px-10 pt-5 text-center place-self-center">
                        <div class="w-fit p-1 rounded-full " style="border: 1px solid #e8e8e8">
                            <svg class="place-self-center bg-[#e8e8e8] p-2 rounded-full" style="width: 56px;"
                                version="1.2" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500"
                                overflow="visible" xml:space="preserve">
                                <g>
                                    <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="5.3918"
                                        y1="326.3235" x2="219.7421" y2="326.3235">
                                        <stop offset="0" style="stop-color:#E93E3A"></stop>
                                        <stop offset="0.1124" style="stop-color:#ED683C"></stop>
                                        <stop offset="0.3315" style="stop-color:#F3903F"></stop>
                                        <stop offset="0.7191" style="stop-color:#FDC70C"></stop>
                                        <stop offset="0.8036" style="stop-color:#FDCA10"></stop>
                                        <stop offset="0.8829" style="stop-color:#FED51B"></stop>
                                        <stop offset="0.9599" style="stop-color:#FEE72E"></stop>
                                        <stop offset="1" style="stop-color:#FFF33B"></stop>
                                    </linearGradient>
                                    <path fill="url(#SVGID_1_)" d="M170.6,316.3l-0.9-0.8c12-13.5,19.5-31.1,19.5-50.6c0-42.3-34.3-76.6-76.6-76.6
                                    C70.3,188.4,36,222.7,36,265c0,19.5,7.5,37.1,19.5,50.6l-0.9,0.7c-27.9,22.2-43.9,37.8-49.2,101.8c0,8.2,3.4,20,19.8,29.5
                                    c19.2,11.1,53.3,16.6,87.4,16.6c34.1,0,68.2-5.5,87.4-16.6c16.3-9.4,19.8-21.2,19.7-30.7C214.5,354.1,198.5,338.5,170.6,316.3z
                                     M112.6,219.1c25.3,0,45.9,20.6,45.9,45.9s-20.6,45.9-45.9,45.9c-25.3,0-45.9-20.6-45.9-45.9S87.3,219.1,112.6,219.1z M112.6,433.5
                                    c-46.6,0-72.7-10.1-76.5-15.7c4.5-51.1,14.9-59.5,37.5-77.5l7.2-5.8c8.1,3.7,17,5.8,26.3,6.5l10.6,15.9l-20.4,51l19.1,25.4
                                    C115.1,433.4,113.9,433.5,112.6,433.5L112.6,433.5z M140.4,432.1l18.1-24.1l-20.4-51L150,339l1.5,1.2c22.6,18,33.1,26.4,37.5,77.5
                                    C186.1,422.1,169.5,429.1,140.4,432.1z"></path>
                                    <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="281.0414"
                                        y1="326.3235" x2="495.3918" y2="326.3235">
                                        <stop offset="0" style="stop-color:#E93E3A"></stop>
                                        <stop offset="0.1124" style="stop-color:#ED683C"></stop>
                                        <stop offset="0.3315" style="stop-color:#F3903F"></stop>
                                        <stop offset="0.7191" style="stop-color:#FDC70C"></stop>
                                        <stop offset="0.8036" style="stop-color:#FDCA10"></stop>
                                        <stop offset="0.8829" style="stop-color:#FED51B"></stop>
                                        <stop offset="0.9599" style="stop-color:#FEE72E"></stop>
                                        <stop offset="1" style="stop-color:#FFF33B"></stop>
                                    </linearGradient>
                                    <path fill="url(#SVGID_2_)" d="M446.3,316.3l-0.9-0.7c12-13.5,19.5-31.1,19.5-50.6c0-42.3-34.3-76.6-76.6-76.6
                                    s-76.6,34.3-76.6,76.6c0,19.5,7.5,37,19.5,50.6l-0.9,0.8c-27.9,22.2-43.9,37.8-49.2,101.8c0,8.2,3.4,20,19.8,29.4
                                    c19.2,11.1,53.3,16.6,87.4,16.6c34.1,0,68.2-5.5,87.4-16.6c16.4-9.5,19.8-21.2,19.7-30.7C490.2,354.1,474.1,338.5,446.3,316.3z
                                     M388.2,219.1c25.3,0,45.9,20.6,45.9,45.9s-20.6,45.9-45.9,45.9c-25.3,0-45.9-20.6-45.9-45.9S362.9,219.1,388.2,219.1z
                                     M349.3,340.3l1.5-1.2l11.9,17.8l-20.4,51l18.1,24.1c-29.1-2.9-45.7-10-48.6-14.3C316.2,366.6,326.7,358.3,349.3,340.3z
                                     M388.3,433.5c-1.3,0-2.5-0.1-3.8-0.1l19.1-25.4l-20.4-51l10.6-15.9c9.3-0.7,18.2-2.8,26.3-6.5l7.2,5.8
                                    c22.6,18,33.1,26.4,37.5,77.5C460.9,423.3,434.9,433.5,388.3,433.5z"></path>
                                    <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="189.1658"
                                        y1="111.8619" x2="219.7936" y2="111.8619">
                                        <stop offset="0" style="stop-color:#E93E3A"></stop>
                                        <stop offset="0.1124" style="stop-color:#ED683C"></stop>
                                        <stop offset="0.3315" style="stop-color:#F3903F"></stop>
                                        <stop offset="0.7191" style="stop-color:#FDC70C"></stop>
                                        <stop offset="0.8036" style="stop-color:#FDCA10"></stop>
                                        <stop offset="0.8829" style="stop-color:#FED51B"></stop>
                                        <stop offset="0.9599" style="stop-color:#FEE72E"></stop>
                                        <stop offset="1" style="stop-color:#FFF33B"></stop>
                                    </linearGradient>
                                    <circle fill="url(#SVGID_3_)" cx="204.5" cy="111.9" r="15.3"></circle>
                                    <linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="235.1075"
                                        y1="111.8619" x2="265.7352" y2="111.8619">
                                        <stop offset="0" style="stop-color:#E93E3A"></stop>
                                        <stop offset="0.1124" style="stop-color:#ED683C"></stop>
                                        <stop offset="0.3315" style="stop-color:#F3903F"></stop>
                                        <stop offset="0.7191" style="stop-color:#FDC70C"></stop>
                                        <stop offset="0.8036" style="stop-color:#FDCA10"></stop>
                                        <stop offset="0.8829" style="stop-color:#FED51B"></stop>
                                        <stop offset="0.9599" style="stop-color:#FEE72E"></stop>
                                        <stop offset="1" style="stop-color:#FFF33B"></stop>
                                    </linearGradient>
                                    <circle fill="url(#SVGID_4_)" cx="250.4" cy="111.9" r="15.3"></circle>
                                    <linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="281.0491"
                                        y1="111.8619" x2="311.6768" y2="111.8619">
                                        <stop offset="0" style="stop-color:#E93E3A"></stop>
                                        <stop offset="0.1124" style="stop-color:#ED683C"></stop>
                                        <stop offset="0.3315" style="stop-color:#F3903F"></stop>
                                        <stop offset="0.7191" style="stop-color:#FDC70C"></stop>
                                        <stop offset="0.8036" style="stop-color:#FDCA10"></stop>
                                        <stop offset="0.8829" style="stop-color:#FED51B"></stop>
                                        <stop offset="0.9599" style="stop-color:#FEE72E"></stop>
                                        <stop offset="1" style="stop-color:#FFF33B"></stop>
                                    </linearGradient>
                                    <circle fill="url(#SVGID_5_)" cx="296.4" cy="111.9" r="15.3"></circle>
                                    <linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="127.9104"
                                        y1="127.1758" x2="372.9323" y2="127.1758">
                                        <stop offset="0" style="stop-color:#E93E3A"></stop>
                                        <stop offset="0.1124" style="stop-color:#ED683C"></stop>
                                        <stop offset="0.3315" style="stop-color:#F3903F"></stop>
                                        <stop offset="0.7191" style="stop-color:#FDC70C"></stop>
                                        <stop offset="0.8036" style="stop-color:#FDCA10"></stop>
                                        <stop offset="0.8829" style="stop-color:#FED51B"></stop>
                                        <stop offset="0.9599" style="stop-color:#FEE72E"></stop>
                                        <stop offset="1" style="stop-color:#FFF33B"></stop>
                                    </linearGradient>
                                    <path fill="url(#SVGID_6_)" d="M372.9,111.9c0-42.3-54.8-76.6-122.5-76.6c-67.7,0-122.5,34.3-122.5,76.6c0,32.1,31.7,59.6,76.6,71
                                    l0,5.6v30.6l45.9-30.6C318.1,188.4,372.9,154.1,372.9,111.9z M250.4,157.8c-6,0-12,1.8-17,5.1l-3.8,2.5
                                    c-4.1-5.9-10.3-10.4-17.7-12.3c-31-7.8-53.5-25.2-53.5-41.3c0-21.7,39.3-45.9,91.9-45.9c52.6,0,91.9,24.3,91.9,45.9
                                    C342.3,133.5,303,157.8,250.4,157.8z"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="card-body items-center text-center">
                        <h2 class="card-title uppercase text-xl text-red-500">100%</h2>
                        <p class="text-base">SV có khả năng giao tiếp tốt tiếng Anh và tiếng Trung.</p>
                    </div>
                </div>
                <div class="bg-base-100 shadow-xl h-64 animated bounce-in-up">
                    <div class="px-10 pt-5 text-center place-self-center">
                        <div class="w-fit p-1 rounded-full " style="border: 1px solid #e8e8e8">
                            <i class="text-4xl text-orange-400 h-[60px] bg-[#e8e8e8] p-2 rounded-full penci-ibox-icon--i fa fa-sitemap"
                                aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="card-body items-center text-center">
                        <h2 class="card-title uppercase text-xl text-red-500">100%</h2>
                        <p class="text-base">SV tốt nghiệp được giới thiệu việc làm.</p>

                    </div>
                </div>
            </div>
        </section>

        <section id="whychoose" class="relative mt-10 md:py-10 justify-items-center !h-full bg-gray-50">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="card bg-base-100 w-96 shadow-xl animated fade-in">
                    <div class="card-body p-0"
                        style="background-image: linear-gradient(255deg, rgb(255, 90, 94), rgb(232, 36, 77));
                            border-radius: 20px 20px 0 0;">
                        <h1 class="px-8 py-4 card-title block text-center">
                            <span class="font-bold uppercase text-2xl text-white">
                                Tại sao nên chọn học
                            </span>
                            <span class="uppercase text-white text-xl font-semibold">
                                CN&ĐMST và QLTT?
                            </span>
                        </h1>
                    </div>
                    <div class="text-base text-black text-justify p-4">
                        <ul>
                            <li class="inline-flex items-center justify-center mb-3">
                                <div class="me-3">
                                    <i class="fas fa-check text-red-500"></i>
                                </div>
                                <div class="text-left">
                                    <p>Sinh viên khi tốt nghiệp có kiến thức chuyên sâu về công nghệ thông tin, có
                                        kỹ năng lập trình phần mềm ứng dụng chuyên nghiệp, có kiến thức và kỹ năng thành
                                        thạo về quản trị và đổi mới sáng tạo</p>
                                </div>
                            </li>

                            <li class="inline-flex items-center justify-center mb-3">
                                <div class="me-3">
                                    <i class="fas fa-check text-red-500"></i>
                                </div>
                                <div class="text-left">
                                    <p>Sinh viên tốt nghiệp có cơ hội làm tại các công ty vốn trong nước và nước ngoài,
                                        công ty tài chính, sở/ngành
                                        địa phương, viện nghiên cứu và trường đại học.</p>
                                </div>
                            </li>
                            <li class="inline-flex items-center justify-center mb-3">
                                <div class="me-3">
                                    <i class="fas fa-check text-red-500"></i>
                                </div>
                                <div class="text-left">
                                    <p>Thực tập từ năm thứ 3 đại học và được tham gia dự án công nghệ thông tin và đổi
                                        mới
                                        sáng tạo.</p>
                                </div>
                            </li>
                            <li class="inline-flex items-center justify-center mb-3">
                                <div class="me-3">
                                    <i class="fas fa-check text-red-500"></i>
                                </div>
                                <div class="text-left">
                                    <p>Cơ hội việc làm toàn cầu: Sinh viên đại học Nông Lâm được đào tạo giao tiếp tốt
                                        bằng tiếng Anh sau năm thứ 2, tiếng Trung sau năm thứ 4</p>
                                </div>
                            </li>
                            <li class="inline-flex items-center justify-center mb-3">
                                <div class="me-3">
                                    <i class="fas fa-check text-red-500"></i>
                                </div>
                                <div class="text-left">
                                    <p>50% sinh viên được cử sang các trường Đại học của Đài Loan 6 tháng.</p>
                                </div>
                            </li>
                            <li class="inline-flex items-center justify-center mb-3">
                                <div class="me-3">
                                    <i class="fas fa-check text-red-500"></i>
                                </div>
                                <div class="text-left">
                                    <p>Sinh viên tốt nghiệp từ loại giỏi được nhận học bổng chương trình Thạc sĩ 2 năm
                                        tại các Trường Đại học của Đài Loan.</p>
                                </div>
                            </li>

                        </ul>

                        <div class="text-center">
                            <a href="#dangky"
                                class="btn border-2 px-12 uppercase border-none bg-gradient-to-b text-black font-bold rounded-full shadow-lg transition duration-300 animate-scale"
                                style="background-image: linear-gradient(rgb(254, 244, 18), rgb(243, 140, 1));">
                                Đăng Kí Ngay
                            </a>
                        </div>

                    </div>
                </div>

                <div class="w-96 animated slide-in-right">
                    <div>
                        <figure class="rounded-lg" style="border: 8px solid #e56161;">
                            <iframe width="100%" height="224"
                                src="https://www.youtube.com/embed/ZuBJcLpy_Rs?si=qfT2ZtTlvMdbqzQZ"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </figure>
                        <div class="mt-3 italic items-center text-center">
                            <p>Khoa học, công nghệ và đổi mới sáng tạo - Khơi dậy khát vọng, kiến tạo tương lai</p>
                        </div>
                    </div>

                    <div>
                        <figure class="rounded-lg mt-10" style="border: 8px solid #e56161;">
                            <iframe width="100%" height="224"
                                src="https://www.youtube.com/embed/_NdaJlLPFDs?si=zFV1IkNax4gR9jHP"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </figure>
                        <div class="mt-3 italic items-center text-center">
                            <p>Ngành Quản lý thông tin Chất lượng cao Xã hội hóa (Information Management)</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section id="timeline" class="relative mt-5 md:py-10 justify-items-center !h-full bg-gray-50">
            <p class="text-3xl uppercase font-bold">Lộ trình đào tạo</p>
            <hr class="bg-gray-100 w-36 h-1">
            <div class="bg-base-100 card-bordered mt-3 shadow-xl rounded-lg">
                <div class="card-body">
                    <div class="mt-1 space-y-1 overflow-auto">
                        <ul class="timeline">
                            <li>
                                <div class="timeline-start timeline-box font-semibold text-base"><i
                                        class="far fa-user-friends"></i>
                                    Sinh viên năm 1, 2</div>
                                <div class="timeline-middle text-primary"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                            clip-rule="evenodd"></path>
                                    </svg></div>
                                <hr class="bg-primary">
                            </li>

                            <li>
                                <hr class="bg-primary">
                                <div class="timeline-middle text-primary"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                            clip-rule="evenodd"></path>
                                    </svg></div>
                                <div class="timeline-end timeline-box">
                                    - Sáng học đại cương <br>
                                    - Chiều học nghề <br>
                                    - Tối học ngoại ngữ

                                </div>
                                <hr class="bg-primary">
                            </li>
                            <li>
                                <hr class="bg-primary">
                                <div class="timeline-start timeline-box font-semibold text-base"><i
                                        class="fad fa-users-crown"></i>
                                    Sinh viên năm 3, 4</div>
                                <div class="timeline-middle text-primary"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                            clip-rule="evenodd"></path>
                                    </svg></div>
                                <hr class="bg-primary">
                            </li>
                            <li>
                                <hr class="bg-primary">
                                <div class="timeline-middle text-primary"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                            clip-rule="evenodd"></path>
                                    </svg></div>
                                <div class="timeline-end timeline-box">
                                    - Sáng học lý thuyết <br>
                                    - Chiều rèn nghề <br>
                                    - Tối tham gia dự án
                                </div>
                                <hr class="bg-primary">
                            </li>
                            <li>
                                <hr class="bg-primary">
                                <div class="timeline-start timeline-box  font-semibold text-base"><i
                                        class="fad fa-user-graduate"></i>
                                    Sinh viên năm cuối</div>
                                <div class="timeline-middle text-primary"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                            clip-rule="evenodd"></path>
                                    </svg></div>
                                <div class="timeline-end timeline-box">
                                    - Kỳ học nước ngoài <br>
                                    - Làm đồ án tốt nghiệp <br>
                                    - Tham gia hội thảo quốc tế
                                </div>
                            </li>
                            <li>
                                <i class="fal fa-plane-departure"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="tuyensinh" class="relative mt-5 md:py-10 justify-items-center !h-full bg-gray-50">
            <p class="text-3xl uppercase font-bold">Tuyển sinh</p>
            <p class="text-xl uppercase font-semibold">Các chuyên ngành</p>
            <hr class="bg-gray-100 w-36 h-1">
            <div class="carousel-container relative overflow-hidden mt-3 md:mx-48">
                <div class="carousel-inner md:flex contents transition-transform duration-500 ease-in-out p-4">
                    <!-- Slide 1 -->
                    <div
                        class="carousel-item w-full flex-shrink-0 flex text-base text-black text-justify grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="bg-base-100 card-bordered mt-3 shadow-xl rounded-lg md:mx-48">
                            <div class="text-base text-black text-justify p-4 grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div class="card-body p-0">
                                    <h1 class="p-2 w-fit card-title block text-center"
                                        style="background-image: linear-gradient(255deg, rgb(255, 90, 94), rgb(232, 36, 77));
                                        border-radius:0 8px 8px 8px;">
                                        <span class="font-bold uppercase text-2xl text-white">
                                            Công nghệ và đổi mới sáng tạo
                                        </span>
                                    </h1>
                                    <ul>
                                        <h2 class="text-red-500 font-bold text-xl uppercase">Số lượng tuyển sinh 2025
                                        </h2>
                                        <li class="inline-flex items-center justify-center mb-3">
                                            <div class="me-3">
                                                <i class="fas fa-check text-red-500"></i>
                                            </div>
                                            <div class="text-left">
                                                <p>100 chỉ tiêu</p>
                                            </div>
                                        </li>

                                        <h2 class="text-red-500 font-bold text-xl uppercase">Ngành CN & ĐMST tại GIRC:
                                        </h2>
                                        <li class="inline-flex items-center justify-center mb-3">
                                            <div class="me-3">
                                                <i class="fas fa-check text-red-500"></i>
                                            </div>
                                            <div class="text-left">
                                                <p><strong>Cơ hội thực hành chuyên sâu: </strong>Sinh viên được hỗ trợ
                                                    tham gia các
                                                    dự án thực tế và hưởng trợ cấp học nghề từ 900 - 1.300 Euro mỗi
                                                    tháng, tạo điều
                                                    kiện tích lũy kinh nghiệm ngay trong quá trình học.

                                                </p>
                                            </div>
                                        </li>
                                        <li class="inline-flex items-center justify-center mb-3">
                                            <div class="me-3">
                                                <i class="fas fa-check text-red-500"></i>
                                            </div>
                                            <div class="text-left">
                                                <p><strong>Làm thêm linh hoạt: </strong>Được phép làm thêm ngoài giờ 21
                                                    giờ/tuần,
                                                    với thu nhập hấp dẫn từ 9 - 15 Euro/giờ, giúp tăng thu nhập và phát
                                                    triển kỹ
                                                    năng.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="inline-flex items-center justify-center mb-3">
                                            <div class="me-3">
                                                <i class="fas fa-check text-red-500"></i>
                                            </div>
                                            <div class="text-left">
                                                <p><strong>Cam kết việc làm: </strong>Đảm bảo cơ hội việc làm ngay sau
                                                    tốt nghiệp,
                                                    với mức lương khởi điểm hấp dẫn từ 2.300 - 2.500 Euro/tháng.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="inline-flex items-center justify-center mb-3">
                                            <div class="me-3">
                                                <i class="fas fa-check text-red-500"></i>
                                            </div>
                                            <div class="text-left">
                                                <p><strong>Môi trường học tập hiện đại: </strong>Được tiếp cận với các
                                                    công nghệ
                                                    tiên tiến và phương pháp giảng dạy đổi mới.</p>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="text-center">
                                        <a href="#dangky"
                                            class="btn border-2 px-12 uppercase border-none bg-gradient-to-b text-black font-bold rounded-full shadow-lg transition duration-300 animate-scale"
                                            style="background-image: linear-gradient(rgb(254, 244, 18), rgb(243, 140, 1));">
                                            Đăng Kí Ngay
                                        </a>
                                    </div>
                                </div>
                                <div class="content-center">
                                    <img src="{{ asset('home/cong-nghe-dmst.jpeg') }}" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div
                        class="carousel-item w-full flex-shrink-0 flex text-base text-black text-justify grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="bg-base-100 card-bordered mt-3 shadow-xl rounded-lg md:mx-48">
                            <div class="text-base text-black text-justify p-4 grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div class="card-body p-0">
                                    <h1 class="p-2 w-fit card-title block text-center"
                                        style="background-image: linear-gradient(rgb(18, 244, 254), rgb(1, 140, 243));
                                        border-radius:0 8px 8px 8px;">
                                        <span class="font-bold uppercase text-2xl text-white">
                                            Quản lý thông tin
                                        </span>
                                    </h1>
                                    <ul>
                                        <h2 class="text-blue-500 font-bold text-xl uppercase">Số lượng tuyển sinh 2025
                                        </h2>
                                        <li class="inline-flex items-center justify-center mb-3">
                                            <div class="me-3">
                                                <i class="fas fa-check text-blue-500"></i>
                                            </div>
                                            <div class="text-left">
                                                <p>100 chỉ tiêu</p>
                                            </div>
                                        </li>

                                        <h2 class="text-blue-500 font-bold text-xl uppercase">Ngành quản lý thông tin
                                            tại GIRC:
                                        </h2>
                                        <li class="inline-flex items-center justify-center mb-3">
                                            <div class="me-3">
                                                <i class="fas fa-check text-blue-500"></i>
                                            </div>
                                            <div class="text-left">
                                                <p><strong>Thu nhập từ thực tập: </strong>Sinh viên ngành Quản lý Thông
                                                    tin được hỗ trợ tham gia thực tập với mức trợ cấp từ 900 - 1.300
                                                    Euro mỗi tháng, giúp tích lũy kinh nghiệm thực tế và xây dựng mạng
                                                    lưới chuyên nghiệp ngay khi còn học.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="inline-flex items-center justify-center mb-3">
                                            <div class="me-3">
                                                <i class="fas fa-check text-blue-500"></i>
                                            </div>
                                            <div class="text-left">
                                                <p><strong>Làm thêm ngoài giờ: </strong> Được phép làm thêm 21 giờ/tuần
                                                    với mức thu nhập từ 9 - 15 Euro/giờ, mang lại cơ hội gia tăng thu
                                                    nhập và trải nghiệm thực tế trong các lĩnh vực liên quan đến quản lý
                                                    thông tin.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="inline-flex items-center justify-center mb-3">
                                            <div class="me-3">
                                                <i class="fas fa-check text-blue-500"></i>
                                            </div>
                                            <div class="text-left">
                                                <p><strong>Cam kết đầu ra chất lượng: </strong>Sinh viên tốt nghiệp
                                                    ngành Quản lý Thông tin tại GIRC luôn được các doanh nghiệp săn đón
                                                    với
                                                    mức lương khởi điểm hấp dẫn từ 2.300 - 2.500 Euro/tháng, đặc biệt
                                                    trong các lĩnh vực phân tích dữ liệu, quản lý tài nguyên thông tin,
                                                    và chuyển đổi số.
                                                </p>
                                            </div>
                                        </li>
                                        <li class="inline-flex items-center justify-center mb-3">
                                            <div class="me-3">
                                                <i class="fas fa-check text-blue-500"></i>
                                            </div>
                                            <div class="text-left">
                                                <p><strong>Học tập theo xu hướng hiện đại: </strong>Chương trình đào tạo
                                                    kết hợp lý thuyết và thực hành trên các nền tảng công nghệ mới nhất,
                                                    giúp sinh viên dễ dàng thích nghi với xu thế quản lý thông tin trong
                                                    thời đại số hóa.</p>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="text-center">
                                        <a href="#dangky"
                                            class="btn border-2 px-12 uppercase border-none bg-gradient-to-b text-black font-bold rounded-full shadow-lg transition duration-300 animate-scale"
                                            style="background-image: linear-gradient(rgb(18, 244, 254), rgb(1, 140, 243));">
                                            Đăng Kí Ngay
                                        </a>
                                    </div>
                                </div>
                                <div class="content-center">
                                    <img src="{{ asset('home/hoc-vien-khoa-hoc_DIBC.jpg') }}" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Buttons -->
                <div class="absolute top-1/2 hidden md:block left-28 transform -translate-y-1/2">
                    <button id="prev-btn" class="btn btn-circle">❮</button>
                </div>
                <div class="absolute top-1/2 hidden md:block right-16 transform -translate-y-1/2">
                    <button id="next-btn" class="btn btn-circle">❯</button>
                </div>
            </div>

            <style>
                .carousel-container {
                    position: relative;
                    width: 100%;
                    height: auto;
                }

                .carousel-inner {

                    width: 200%;
                    /* Adjust based on the number of slides */
                    transform: translateX(0%);
                }

                .carousel-item {
                    width: 100%;
                }
            </style>

            <script>
                const carousel = document.querySelector('.carousel-inner');
                const prevButton = document.getElementById('prev-btn');
                const nextButton = document.getElementById('next-btn');
                let currentIndex = 0;

                prevButton.addEventListener('click', () => {
                    currentIndex = (currentIndex - 1 + 2) % 2; // Adjust for 2 slides
                    carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
                });

                nextButton.addEventListener('click', () => {
                    currentIndex = (currentIndex + 1) % 2;
                    carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
                });
            </script>
        </section>

        <section id="hocbong" class="relative md:py-10 justify-items-center !h-full bg-gray-50">
            <div class="bg-base-100 card-bordered mt-3 shadow-xl rounded-lg md:mx-48">
                <div class="text-base text-black text-justify p-8 grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="card-body p-0">
                        <h1 class="p-2 w-fit card-title block">
                            <span class="font-bold uppercase text-2xl text-blue-950">
                                Học bổng
                            </span>
                            <br>
                            <span class="font-normal uppercase text-2xl text-blue-950">
                                Ưu đãi học bổng
                            </span>
                            <div class="divider m-0"></div>
                        </h1>
                        <h1 class="p-2 card-title block w-auto"
                            style="background-image: linear-gradient(255deg, rgb(255, 90, 94), rgb(232, 36, 77));
                                        border-radius:0 4px 4px 4px;">
                            <span class="font-bold text-base text-white flex items-center">
                                <img class="w-14 rounded-full mr-2" src="{{ asset('home/icon_hocbong1.png') }}"
                                    alt="">Học bổng theo chế độ chính sách của Nhà nước
                            </span>
                        </h1>
                        <h1 class="p-2 card-title block w-auto"
                            style="background-image: linear-gradient(255deg, rgb(255, 90, 94), rgb(232, 36, 77));
                                        border-radius:0 4px 4px 4px;">
                            <span class="font-bold text-base text-white flex items-center">
                                <img class="w-14 rounded-full mr-2" src="{{ asset('home/icon_hocbong2.png') }}"
                                    alt="">Học bổng Trường Đại học Nông Lâm
                            </span>
                        </h1>
                        <h1 class="p-2 card-title block w-auto"
                            style="background-image: linear-gradient(255deg, rgb(255, 90, 94), rgb(232, 36, 77));
                                        border-radius:0 4px 4px 4px;">
                            <span class="font-bold text-base text-white flex items-center">
                                <img class="w-14 rounded-full mr-2" src="{{ asset('home/icon_hocbong3.png') }}"
                                    alt="">Học bổng của Trung tâm Nghiên cứu Địa tin học
                            </span>
                        </h1>

                    </div>
                    <div class="content-center transition duration-300 animate-scale">
                        <img src="{{ asset('home/đăng ký nhận H.png') }}" alt="">
                    </div>

                </div>
                <div class="col-span-2">
                    <img src="{{ asset('home/cơ hội học bổng.png') }}" alt="">
                </div>
            </div>
        </section>

        <section class="relative md:py-10 justify-items-center !h-full bg-gray-50">
            <div class="bg-base-100 card-bordered mt-3 shadow-xl rounded-lg md:mx-48">
                <div class="text-base text-black text-justify p-8 grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="card-body p-0 h-fit">
                        <h1 class="p-2 w-fit card-title block">
                            <span class="font-bold uppercase text-2xl text-blue-950">
                                Nộp hồ sơ
                            </span>
                            <br>
                            <span class="font-normal uppercase text-2xl text-blue-950">
                                Hồ sơ cần thiết
                            </span>
                            <div class="divider m-0"></div>
                        </h1>
                        <p>
                            Hình thức nhận hồ sơ đăng ký xét tuyển sớm theo học bạ THPT
                            Thí sinh có thể nộp 1 trong 3 hình thức sau:
                        </p>
                        <h1 class="p-2 card-title block w-auto shadow-lg">
                            <span class="text-base flex items-center">
                                <div class="bg-gray-100 w-6 text-center font-semibold mr-2 rounded-full">
                                    <span class="text-sm">1</span>
                                </div>Nộp hồ sơ online: <br>
                            </span>
                            <div class="text-sm pl-8 font-normal">
                                Thí sinh truy cập địa chỉ website: <a class="link link-hover hover:text-blue-500"
                                    href="http://tuyensinh.tuaf.edu.vn">http://tuyensinh.tuaf.edu.vn</a> và làm theo
                                hướng dẫn.
                            </div>
                        </h1>
                        <h1 class="p-2 card-title block w-auto shadow-lg">
                            <span class="text-base flex items-center">
                                <div class="bg-gray-100 w-6 text-center font-semibold mr-2 rounded-full">
                                    <span class="text-sm">2</span>
                                </div>Nộp chuyển phát nhanh qua đường bưu điện theo địa chỉ: <br>
                            </span>
                            <div class="text-sm pl-8 font-normal">
                                Trung tâm Tuyển sinh và truyền thông, Trường Đại học Nông Lâm – Đại học Thái Nguyên,
                                thành phố Thái Nguyên, tỉnh Thái Nguyên.
                            </div>
                        </h1>
                        <h1 class="p-2 card-title block w-auto shadow-lg">
                            <span class="text-base flex items-center">
                                <div class="bg-gray-100 w-10 text-center font-semibold mr-2 rounded-full">
                                    <span class="text-sm">3</span>
                                </div>Nộp trực tiếp tại Trung tâm Tuyển sinh và truyền thông, trường Đại học Nông Lâm –
                                Đại học Thái Nguyên: <br>
                            </span>
                            <div class="text-sm pl-8 font-normal">
                                Khu hành chính B trường ĐHNL, tổ 10 xã Quyết Thắng, TP Thái Nguyên.
                            </div>
                        </h1>

                        <p class="mt-4">* Hồ sơ xét tuyển theo học bạ THPT gồm:
                        </p>

                        <div class="row">

                            <div class="col pb-0 small-12 large-12">
                                <div class="col-inner">
                                    <div class="flex text-left">
                                        <div class="bg-gray-100 w-6 text-center font-semibold mr-2 rounded-full">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <div class="icon-box-text last-reset">
                                            <p> Phiếu đăng ký xét tuyển: Theo mẫu <a
                                                    class="link link-hover hover:text-blue-500"
                                                    href="https://tuyensinh.tuaf.edu.vn/uploads/files/2024/phieudk2024.pdf"
                                                    target="_blank">tại đây</a>.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="col-2021340070" class="col pb-0 small-12 large-12">
                                <div class="col-inner">
                                    <div class="flex text-left">
                                        <div
                                            class="bg-gray-100 w-14 h-fit text-center font-semibold mr-2 rounded-full">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <div class="icon-box-text last-reset">
                                            <p>Bản photo Bằng hoặc giấy chứng nhận tốt nghiệp THPT tạm thời (đối với các
                                                thí sinh tốt nghiệp THPT năm 2024, trường hợp chưa có sẽ nộp bổ sung
                                                sau).</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="col-621219163" class="col pb-0 small-12 large-12">
                                <div class="col-inner">
                                    <div class="flex text-left">
                                        <div class="bg-gray-100 w-6 text-center font-semibold mr-2 rounded-full">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <div class="icon-box-text last-reset">
                                            <p>Bản photo Học bạ THPT.</p>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="content-center">
                        <img src="{{ asset('home/QTTS2425.png') }}" alt="">
                    </div>

                </div>
            </div>
        </section>

        {{-- <section class="relative mt-5 md:py-10 justify-items-center !h-full bg-gray-50">
            <p class="text-3xl uppercase font-bold text-blue-800">Cảm nhận sinh viên và phụ huynh</p>
            <div class="divider m-0 w-80"></div>
            <div class="p-3 h-auto mt-80">
                <div class="w-96 mx-auto" style="scroll-snap-type: x mandatory;">
                    <!-- first -->
                    <div class="">
                        <input class="sr-only peer" type="radio" name="carousel" id="carousel-1" checked />
                        <!-- content #1 -->
                        <div
                            class="w-auto absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white
                             rounded-lg shadow-lg transition-all duration-300 opacity-0 peer-checked:opacity-100 peer-checked:z-10 z-0 
                             flex p-4" style="border: 10px solid #ececec;">
                            <div class="avatar self-center">
                                <div
                                    class="ring-primary ring-offset-base-100 w-28 h-28 rounded-full ring ring-offset-2">
                                    <img
                                        src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                                </div>
                            </div>
                            <div class="py-4 px-8">
                                <h1 class="hover:cursor-pointer mt-2 text-gray-900 font-bold text-2xl tracking-tight">
                                    Lorem
                                    ipsum dolor sit amet consectetur adipisicing.
                                </h1>
                                <p class="hover:cursor-pointer py-3 text-gray-600 leading-6">Lorem ipsum dolor, sit
                                    amet
                                    consectetur adipisicing elit.
                                </p>
                            </div>
                            <!-- controls -->
                            <div class="absolute top-1/2 w-full flex justify-between z-20">
                                <label for="carousel-3"
                                    class="inline-block text-red-600 cursor-pointer -translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </label>
                                <label for="carousel-2"
                                    class="inline-block text-red-600 cursor-pointer translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- second -->
                    <div class="">
                        <input class="sr-only peer" type="radio" name="carousel" id="carousel-2" />
                        <!-- content #2 -->
                        <div
                            class="w-auto absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white
                             rounded-lg shadow-lg transition-all duration-300 opacity-0 peer-checked:opacity-100 peer-checked:z-10 z-0 
                             flex p-4" style="border: 10px solid #ececec;">

                            <div class="avatar self-center">
                                <div
                                    class="ring-primary ring-offset-base-100 w-28 h-28 rounded-full ring ring-offset-2">
                                    <img
                                        src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                                </div>
                            </div>

                            <div class="py-4 px-8">
                                <h1 class="hover:cursor-pointer mt-2 text-gray-900 font-bold text-2xl tracking-tight">
                                    Scelerisque eleifend donec pretium vulputate sapien.
                                </h1>
                                <p class="hover:cursor-pointer py-3 text-gray-600 leading-6">Egestas diam in arcu
                                    cursus euismod
                                    quis. Fusce id velit ut tortor. Congue quisque egestas diam in arcu cursus euismod
                                    quis.
                                </p>
                            </div>
                            <!-- controls -->
                            <div class="absolute top-1/2 w-full flex justify-between z-20">
                                <label for="carousel-1"
                                    class="inline-block text-blue-600 cursor-pointer -translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </label>
                                <label for="carousel-3"
                                    class="inline-block text-blue-600 cursor-pointer translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- three -->
                    <div class="">
                        <input class="sr-only peer" type="radio" name="carousel" id="carousel-3" checked />
                        <!-- content #3 -->
                        <div
                            class="w-auto absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white
                             rounded-lg shadow-lg transition-all duration-300 opacity-0 peer-checked:opacity-100 peer-checked:z-10 z-0 
                             flex p-4" style="border: 10px solid #ececec;">
                            <div class="avatar self-center">
                                <div
                                    class="ring-primary ring-offset-base-100 w-28 h-28 rounded-full ring ring-offset-2">
                                    <img
                                        src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                                </div>
                            </div>
                            <div class="py-4 px-8">
                                <h1 class="hover:cursor-pointer mt-2 text-gray-900 font-bold text-2xl tracking-tight">
                                    Consectetur purus ut faucibus pulvinar elementum.
                                </h1>
                                <p class="hover:cursor-pointer py-3 text-gray-600 leading-6">Aliquam ultrices sagittis
                                    orci a
                                    scelerisque purus semper. Quisque id diam vel quam elementum pulvinar. Facilisis
                                    magna etiam
                                    tempor orci eu lobortis elementum.
                                </p>
                            </div>
                            <!-- controls -->
                            <div class="absolute top-1/2 w-full flex justify-between z-20">
                                <label for="carousel-2"
                                    class="inline-block text-yellow-600 cursor-pointer -translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </label>
                                <label for="carousel-1"
                                    class="inline-block text-yellow-600 cursor-pointer translate-x-5 bg-white rounded-full shadow-md active:translate-y-0.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <section id="dangky" class="relative md:py-10 justify-items-center !h-full bg-gray-50">
            <div class="bg-base-100 card-bordered mt-3 shadow-xl rounded-lg md:mx-48">
                <div
                    class="text-base justify-items-center text-black text-justify p-8 grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="card-body w-96 p-0 h-fit">
                        <div class="text-center p-2 rounded-lg"
                            style="background-image: linear-gradient(rgb(254, 120, 120), rgb(232, 36, 77));">
                            <form action="{{ route('dangky.store') }}" method="POST" class="space-y-4 p-4 rounded"
                                style="border: 1px solid rgba(255, 198, 198, 0.4);">
                                @csrf

                                <p class="text-white uppercase text-xl font-bold">Đăng ký ngay hôm nay <br>để nhận tư
                                    vấn miễn phí!</p>
                                <div>
                                    <input type="text" name="name" placeholder="Họ và tên" required
                                        class="w-full input input-bordered" />
                                </div>
                                <div>
                                    <input type="email" name="email" placeholder="Email (nếu có)"
                                        class="w-full input input-bordered" />
                                </div>
                                <div>
                                    <input type="text" name="phone" placeholder="Số điện thoại" required
                                        class="w-full input input-bordered" />
                                </div>
                                <div>
                                    <input type="text" name="province" placeholder="Địa chỉ" required
                                        class="w-full input input-bordered" />
                                </div>

                                <div class="text-center">
                                    <button type="submit"
                                        class="btn border-2 px-12 uppercase border-none bg-gradient-to-b text-black font-bold rounded-full shadow-lg transition duration-300 animate-scale"
                                        style="background-image: linear-gradient(rgb(254, 244, 18), rgb(243, 140, 1));">
                                        Tư vấn ngay
                                    </button>

                                </div>
                            </form>
                        </div>

                    </div>


                    <div class="card-body p-0 h-fit">
                        <h1 class="p-2 w-fit card-title block">
                            <span class="font-bold uppercase text-2xl text-blue-950">
                                Đăng ký ngay
                            </span>
                            <br>
                            <span class="font-normal uppercase text-2xl text-blue-950">
                                Để nhận học bổng và ưu đãi
                            </span>
                            <div class="divider m-0"></div>
                        </h1>
                        <h1 class="p-2 card-title block w-auto shadow-lg">
                            <span class="text-base flex items-center text-red-500">
                                <div class="bg-gray-100 w-6 text-center font-semibold mr-2 rounded-full">
                                    <span class="text-sm"><i class="fal fa-hand-point-right"></i></span>
                                </div>Miễn học phí<br>
                            </span>
                            <div class="text-sm pl-8 font-normal">
                                cho 5 sinh viên suất sắc nhất
                            </div>
                        </h1>
                        <h1 class="p-2 card-title block w-auto shadow-lg">
                            <span class="text-base flex items-center text-red-500">
                                <div class="bg-gray-100 w-6 text-center font-semibold mr-2 rounded-full">
                                    <span class="text-sm"><i class="fal fa-hand-point-right"></i></span>
                                </div>Miễn phí ký túc xá<br>
                            </span>
                            <div class="text-sm pl-8 font-normal">
                                Năm đầu
                            </div>
                        </h1>
                        <h1 class="p-2 card-title block w-auto shadow-lg">
                            <span class="text-base flex items-center text-red-500">
                                <div class="bg-gray-100 w-6 text-center font-semibold mr-2 rounded-full">
                                    <span class="text-sm"><i class="fal fa-hand-point-right"></i></span>
                                </div>Miễn phí 540 giờ<br>
                            </span>
                            <div class="text-sm pl-8 font-normal">
                                học tiếng Anh và tiếng Trung với người nước ngoài
                            </div>
                        </h1>
                    </div>

                </div>
            </div>
        </section>

        @include('web.footer')
    </div>

    {{-- hiệu ứng animation --}}
    {{-- <div class="animated fade-in">Nội dung xuất hiện từ dưới lên</div>
    <div class="animated slide-in-left">Nội dung trượt từ trái</div>
    <div class="animated slide-in-right">Nội dung trượt từ phải</div>
    <div class="animated slide-in-top">Nội dung trượt từ trên</div>
    <div class="animated zoom-in">Nội dung phóng to</div>
    <div class="animated rotate-in">Nội dung xoay</div>
    <div class="animated fade-zoom">Nội dung mờ và phóng to</div> --}}

    <style>
        /* Cấu hình cơ bản cho hiệu ứng */
        .animated {
            opacity: 0;
            transform: translate3d(0, 0, 0);
            transition: all 0.8s ease-in-out;
            will-change: transform, opacity;
        }

        .animated.show {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }

        /* Hiệu ứng fade-in */
        .fade-in {
            transform: translateY(20px);
        }

        .fade-in.show {
            transform: translateY(0);
        }

        /* Hiệu ứng slide-in từ trái */
        .slide-in-left {
            transform: translateX(-100px);
        }

        .slide-in-left.show {
            transform: translateX(0);
        }

        /* Hiệu ứng slide-in từ phải */
        .slide-in-right {
            transform: translateX(100px);
        }

        .slide-in-right.show {
            transform: translateX(0);
        }

        /* Hiệu ứng slide-in từ trên */
        .slide-in-top {
            transform: translateY(-100px);
        }

        .slide-in-top.show {
            transform: translateY(0);
        }

        /* Hiệu ứng zoom-in */
        .zoom-in {
            transform: scale(0.8);
        }

        .zoom-in.show {
            transform: scale(1);
        }

        /* Hiệu ứng rotate */
        .rotate-in {
            transform: rotate(-15deg);
        }

        .rotate-in.show {
            transform: rotate(0);
        }

        /* Hiệu ứng fade-in và zoom */
        .fade-zoom {
            transform: scale(0.8);
            opacity: 0;
        }

        .fade-zoom.show {
            transform: scale(1);
            opacity: 1;
        }

        @keyframes bounceInUp {
            0% {
                transform: translateY(50px);
                opacity: 0;
            }

            60% {
                transform: translateY(-10px);
                opacity: 1;
            }

            80% {
                transform: translateY(5px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .animated {
            animation-duration: 1.5s;
            animation-fill-mode: both;
        }

        .bounce-in-up {
            animation-name: bounceInUp;
        }

        .bounce-in-up:nth-child(1) {
            animation-delay: 0.2s;
        }

        .bounce-in-up:nth-child(2) {
            animation-delay: 0.4s;
        }

        .bounce-in-up:nth-child(3) {
            animation-delay: 0.6s;
        }

        .bounce-in-up:nth-child(4) {
            animation-delay: 0.8s;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Chọn tất cả các phần tử có class "animated"
            const animatedElements = document.querySelectorAll('.animated');

            // Tạo một IntersectionObserver để kiểm tra các phần tử trong viewport
            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            // Thêm class "show" nếu phần tử vào viewport
                            entry.target.classList.add('show');
                            // Ngừng quan sát phần tử này để tối ưu hiệu năng
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.1, // Hiển thị khi 10% phần tử vào viewport
                }
            );

            // Gắn observer cho mỗi phần tử
            animatedElements.forEach((element) => observer.observe(element));
        });
    </script>
</x-website-layout>
