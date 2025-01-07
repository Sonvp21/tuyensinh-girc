<x-website-layout>
    <div class="col-span-8 lg:col-span-6">
        <div class="flex flex-row items-center gap-1 bg-slate-100 px-4 py-2 text-xs uppercase text-slate-500">
            <a class="hover:text-slate-900 hover:underline" href="/">
                Trang chủ </a>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-4 w-4 text-slate-300">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
            </svg>
            <a class="hover:text-slate-900 hover:underline">
                Sản phẩm </a>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-4 w-4 text-slate-300">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
            </svg>
            <span class="line-clamp-1 font-bold text-lime-600">
                OCOP - Gạo Nhật Minh - Đăk Lắk
            </span>
        </div>
        <div class="mt-4 grid grid-cols-2 gap-4">
            <div class="relative col-span-2 md:col-span-1">
                <div x-data="{ imageUrl: 'https://dyh48pub5c8mm.cloudfront.net/home/store/goods/1599/20231201/alioss_1599_2023120110145628602.jpg?x-oss-process=image/resize,m_pad,w_240,h_240' }" class="h-full w-full">
                    <img :src="imageUrl" class="w-full" style="height: 430px !important" alt=""
                        src="https://dyh48pub5c8mm.cloudfront.net/home/store/goods/1599/20231201/alioss_1599_2023120110145628602.jpg?x-oss-process=image/resize,m_pad,w_240,h_240">
                    <div class="relative flex items-center overflow-hidden">
                        <div id="products"
                            class="flex snap-x snap-mandatory gap-9 overflow-x-scroll scroll-smooth bg-white p-2 scrollbar-hide">
                            <div x-on:click="imageUrl='https://dyh48pub5c8mm.cloudfront.net/home/store/goods/1599/20231201/alioss_1599_2023120110145628602.jpg?x-oss-process=image/resize,m_pad,w_240,h_240'"
                                class="flex h-16 w-16 flex-none cursor-pointer snap-center snap-always items-center justify-center overflow-hidden rounded border bg-cover bg-center bg-no-repeat text-2xl font-semibold text-white">
                                <img src="https://dyh48pub5c8mm.cloudfront.net/home/store/goods/1599/20231201/alioss_1599_2023120110145628602.jpg?x-oss-process=image/resize,m_pad,w_240,h_240"
                                    alt="2VXub7txzacbO1PYIGaulJ6503z51b-metaT0NPUC0xMDUwLmpwZw==-.jpg">
                            </div>
                            <div x-on:click="imageUrl='https://dyh48pub5c8mm.cloudfront.net/home/store/goods/1599/20231201/alioss_1599_2023120110154248432.jpg?x-oss-process=image/resize,m_pad,w_240,h_240'"
                                class="flex h-16 w-16 flex-none cursor-pointer snap-center snap-always items-center justify-center overflow-hidden rounded border bg-cover bg-center bg-no-repeat text-2xl font-semibold text-white">
                                <img src="https://dyh48pub5c8mm.cloudfront.net/home/store/goods/1599/20231201/alioss_1599_2023120110154248432.jpg?x-oss-process=image/resize,m_pad,w_240,h_240"
                                    alt="OCOP-1063.jpg">
                            </div>
                            <div x-on:click="imageUrl='https://dyh48pub5c8mm.cloudfront.net/home/store/goods/1599/20231201/alioss_1599_2023120110154528464.jpg?x-oss-process=image/resize,m_pad,w_240,h_240'"
                                class="flex h-16 w-16 flex-none cursor-pointer snap-center snap-always items-center justify-center overflow-hidden rounded border bg-cover bg-center bg-no-repeat text-2xl font-semibold text-white">
                                <img src="https://dyh48pub5c8mm.cloudfront.net/home/store/goods/1599/20231201/alioss_1599_2023120110154528464.jpg?x-oss-process=image/resize,m_pad,w_240,h_240"
                                    alt="OCOP-1066.jpg">
                            </div>
                            <div x-on:click="imageUrl='https://dyh48pub5c8mm.cloudfront.net/home/store/goods/1599/20231201/alioss_1599_2023120110154841344.jpg?x-oss-process=image/resize,m_pad,w_240,h_240'"
                                class="flex h-16 w-16 flex-none cursor-pointer snap-center snap-always items-center justify-center overflow-hidden rounded border bg-cover bg-center bg-no-repeat text-2xl font-semibold text-white">
                                <img src="https://dyh48pub5c8mm.cloudfront.net/home/store/goods/1599/20231201/alioss_1599_2023120110154841344.jpg?x-oss-process=image/resize,m_pad,w_240,h_240"
                                    alt="OCOP-1070.jpg">
                            </div>
                        </div>
                        <button onclick="prev('products')"
                            class="absolute left-0 flex h-full w-10 items-center justify-center from-white to-transparent text-slate-500 hover:bg-gradient-to-r hover:text-slate-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5">
                                </path>
                            </svg>
                        </button>
                        <button onclick="next('products')"
                            class="absolute right-0 flex h-full w-10 items-center justify-center from-white to-transparent text-slate-500 hover:bg-gradient-to-l hover:text-slate-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-2 space-y-4 md:col-span-1">
                <h1 class="text-3xl font-bold tracking-tight">
                    OCOP - Gạo Nhật Minh - Đăk Lắk
                </h1>
                <div class="rounded-xl bg-green-700 p-4 text-sm">
                    <div class="flex items-center">
                        <span class="mr-2 font-bold text-white">
                            Số sao đạt </span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="h-4 w-4 text-orange-500">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                clip-rule="evenodd"></path>
                        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="h-4 w-4 text-orange-500">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                clip-rule="evenodd"></path>
                        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="h-4 w-4 text-orange-500">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                clip-rule="evenodd"></path>
                        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="h-4 w-4 text-orange-500">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="flex items-center text-white">
                        <span class="mr-2 font-bold">
                            Chứng nhận OCOP số:
                        </span>
                        <div class="cursor-pointer hover:underline" id="show-popup">
                            3052/QĐ-UBND
                        </div>
                    </div>

                    <!-- Popup -->
                    <div id="popup-overlay"
                        class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-60 hidden">
                        <div class="relative border-4 border-green-700 shadow-xl w-3/4 max-w-lg mx-3">
                            <span id="close-popup"
                                class="absolute -right-3 -top-3 cursor-pointer rounded-full bg-orange-500 p-2 hover:bg-orange-700">
                                <svg class="h-3 w-3 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </span>
                            <img class="h-auto max-h-[calc(100vh-10rem)] w-auto" style="width: 100%; min-height: 625px;"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRomPZ4zceTlAPLhmw1fyQjDsTItzUFlE91Ug&s"
                                alt="Popup Image">
                        </div>
                    </div>
                    <script>
                        // Lấy các phần tử
                        const popupOverlay = document.getElementById('popup-overlay');
                        const showPopupButton = document.getElementById('show-popup');
                        const closePopupButton = document.getElementById('close-popup');

                        // Hiển thị popup
                        showPopupButton.addEventListener('click', () => {
                            popupOverlay.classList.remove('hidden'); // Hiện popup
                        });

                        // Ẩn popup khi nhấn vào nút đóng
                        closePopupButton.addEventListener('click', () => {
                            popupOverlay.classList.add('hidden'); // Ẩn popup
                        });

                        // Ẩn popup khi nhấn ra ngoài vùng popup
                        popupOverlay.addEventListener('click', (event) => {
                            if (event.target === popupOverlay) {
                                popupOverlay.classList.add('hidden'); // Ẩn popup
                            }
                        });
                    </script>
                    <div class="flex items-center text-white">
                        <span class="mr-2 font-bold">
                            Danh mục sản phẩm :
                        </span>
                        Thực phẩm, Thực phẩm chế biến
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-5 w-5 flex-none">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21">
                            </path>
                        </svg>
                        <a class="text-sm hover:underline">
                            HTX Dịch vụ nông nghiệp Nhật Minh
                        </a>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-5 w-5 flex-none">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path>
                        </svg>
                        <span class="text-sm">
                            Thôn 6, Xã Bình Hoà, Xã Bình Hòa, Huyện Krông A Na, Đắk Lắk
                        </span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-5 w-5 flex-none">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z">
                            </path>
                        </svg>
                        <span class="text-sm">
                            Nguyễn Văn Tưởng
                        </span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-5 w-5 flex-none">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3">
                            </path>
                        </svg>
                        <span class="text-sm">
                            +84 978813987
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4 text-justify">
            <h3 class="text-center text-2xl font-bold">
                Chi tiết sản phẩm </h3>
            <div class="text-sm">
                <p class="MsoNormal" style="text-align: justify; line-height: 150%;"><span
                        style="font-size: 14.0pt; line-height: 150%; font-family: 'Times New Roman','serif';"><span
                            style="mso-tab-count: 1;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>Hai
                        con sông KRông Ana (Sông Mẹ) và KRông Nô (Sông Cha) từ bao đời nay vẫn âm thầm chảy xuyên qua
                        không gian và thời gian, bền bỉ nhẫn nại kiến tạo nên một nền văn hóa riêng biệt đậm đà bản sắc
                        của các dân tộc Tây Nguyên, điều không thể bắt gặp ở bất kỳ nơi nào khác, với nền tảng chính, là
                        những cánh đồng màu mỡ nằm bên trên lớp trầm tích của dòng dung nham núi lửa đã từng nóng chảy
                        sục sôi cách đây hàng nghìn năm.

                        <br>

                        Cộng đồng các dân tộc cùng sinh sống ở mảnh đất này chất phác thật thà như cây rừng mọc thẳng
                        tắp giữa đại ngàn xanh thẳm, duy trì cách canh tác tuyền thống qua nhiều thế hệ. Dần dà tiếp thu
                        những tiến bộ khoa học kỹ thuật. Năng suất sản lượng tăng lên, hạt gạo làm ra giờ đây không
                        những chỉ để duy trì cuộc sống mà còn để giao thương, phát triển kinh tế. Nhưng sự cách trở về
                        địa lý và nhiều lý do khác khiến cho hạt gạo người dân làm ra khó đi xa. Và năm 2011 HTX dịch vụ
                        nông nghiệp Nhật Minh ra đời như một lẽ tất yếu với mục đích kết nối người sản xuất với người
                        tiêu dùng.

                        <br>

                        Không chỉ dừng lại ở đó. HTX Nhật Minh vẫn luôn trăn trở về cách làm nông nghiệp sạch, thân
                        thiện với môi trường, sao cho Sông Mẹ, Sông Cha giữ được vẻ đẹp tự nhiên ngàn đời vốn có. Bước
                        ngoặt đến vào năm 2018, khi HTX đã mạnh dạn áp dụng phương pháp sản xuất lúa theo hướng hữu cơ
                        trên diện tích 7 ha. Từ đây, các thành viên HTX chỉ sử dụng phân hữu cơ để bón và các loại thuốc
                        sinh học để phòng trừ sâu bệnh. Nhờ đó cây lúa phát triển tự nhiên một cách khỏe mạnh, ít bị sâu
                        bệnh. Những mùa vàng bội thu cứ thế nối tiếp nhau.

                        <br>

                        Không chỉ khâu sản xuất mà khâu chế biến thành phẩm cũng được HTX Nhật Minh quan tâm. Hạt lúa
                        mây mẩy vàng ươm màu nắng sau khi phơi khô sẽ được đem đi xay xát theo quy trình đặc biệt để thu
                        về những hạt gạo thon dài, trong, đều nhau tăm tắp mà vẫn giữ được thành phần dinh dưỡng quan
                        trọng như các vitamin, khoáng chất vốn hay bị mất đi khi làm theo cách thông thường. Cuối cùng,
                        gạo sẽ được đóng vào bao bì với khối lượng đa dạng tùy theo nhu cầu của khách hàng, hút chân
                        không để tránh sự xâm nhập của nấm mốc, vi khuẩn, côn trùng. Nhờ đó sản phẩm gạo Nhật Minh có
                        thời gian bảo quản lâu hơn hơn loại gạo được đóng gói theo cách truyền thống. Không những thế,
                        người tiêu dùng khi mở bao bì ra vẫn có thể cảm nhận được độ tươi của hạt gạo. Cơm nấu lên đậm
                        vị gạo mới, mềm dẻo thơm ngon khó mà cưỡng lại.

                        <br>

                        “Được canh tác theo phương pháp hữu cơ thân thiện với môi trường trên những cánh đồng truyền
                        thống hàng năm vẫn được bồi đắp bởi phù sa của hai con sông KRông Ana (Sông Mẹ) và KRông Nô
                        (Sông Cha) hùng vĩ. Cùng với đó là quy trình chế biến hiện đại, đóng gói hút chân không giúp hạn
                        chế sự xâm nhập của nấm mốc, vi khuẩn, côn trùng. Sản phẩm gạo Nhật Minh vì thế luôn giữ được độ
                        tươi, cơm nấu lên đậm vị gạo mới, mềm dẻo thơm ngon khó mà cưỡng lại.”



                    </span></p>
            </div>
        </div>
        <div class="my-5 ">
            <h3 class="my-2 flex items-center gap-2 font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z">
                    </path>
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path>
                </svg>
                <span>Địa chỉ</span>
            </h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124645.97562216784!2d107.9709267203333!3d12.503778470034192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3172208e847de7c7%3A0xdbe83ed47107b0fc!2zS3LDtG5nIEEgTmEsIMSQ4bqvayBM4bqvaywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1736260640568!5m2!1svi!2s"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</x-website-layout>
