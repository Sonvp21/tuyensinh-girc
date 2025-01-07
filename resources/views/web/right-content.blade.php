<div class="col-span-8 space-y-3 md:col-span-2 lg:block">
    <div>
        <div class="gap-2 px-0 font-semibold uppercase text-red-500 text-left">
            <h3 class="0 p-2">
                <a href="{{ route('web.notifies.index') }}">
                    Thông báo
                </a>
            </h3>
        </div>
        <div class="bg-gradient-to-r from-blue-400 via-blue-500 via-60% to-red-500 h-0.5"></div>
        <style>
            /* Ẩn thanh cuộn, nhưng vẫn cho phép cuộn nội dung */
            .scrollable-content {
                overflow-y: auto;
                /* Cho phép cuộn dọc */
                -ms-overflow-style: none;
                /* Ẩn thanh cuộn trên IE */
                scrollbar-width: none;
                /* Ẩn thanh cuộn trên Firefox */
            }

            .scrollable-content::-webkit-scrollbar {
                display: none;
                /* Ẩn thanh cuộn trên Webkit browsers (Chrome, Safari, Edge) */
            }
        </style>

        <!-- Đặt overflow cho phần chứa thông báo -->
        <div class="h-80 border border-[#7a7abe] border-t-0 overflow-y-auto scrollable-content text-gray-500">
            <div class="flex">
                <ul class="flex flex-col px-2">
                    @php
                        $notifications = \App\Models\Admin\Notify::orderBy('updated_at', 'desc')
                            ->where('is_visible', true)
                            ->get();
                    @endphp

                    @foreach ($notifications as $notification)
                        <li>
                            <a href="{{ route('web.notifies.show', ['slugNotify' => $notification->slug]) }}"
                                class="inline-block gap-2 py-2 text-xs hover:text-red-600">
                                <h3
                                    class="line-clamp-2 italic text-sm text-justify font-normal leading-4 tracking-normal">
                                    {{ $notification->title }}
                                </h3>
                            </a>
                        </li>
                        <div class="w-full border-b border-dashed border-gray-300"></div>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- Khung 2 --}}
        <div class="h-auto overflow-hidden">
            <div class="main-content flex-1 mt-3 pb-2 md:pb-2">
                <div class="flex flex-wrap gap-2">
                    <div class="w-full p-2">
                        <a href="{{ auth()->check() ? route('web.dossier.kythuat') : 'javascript:void(0)' }}"
                            onclick="{{ auth()->check() ? '' : 'saveRedirectUrl(\'' . route('web.dossier.kythuat') . '\'); document.getElementById(\'registerModal\').checked = true;' }}">
                            <div
                                class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-3 bg-green-600">
                                            <img class="rounded-full size-12"
                                                src="{{ asset('homepage/icon_sangtaokythuat.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text-gray-600">Đăng ký thi hội thi sáng tạo kỹ
                                            thuật</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="w-full p-2">
                        <a href="{{ auth()->check() ? route('web.dossier.sangkien') : 'javascript:void(0)' }}"
                            onclick="{{ auth()->check() ? '' : 'saveRedirectUrl(\'' . route('web.dossier.sangkien') . '\'); document.getElementById(\'registerModal\').checked = true;' }}">
                            <div
                                class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-3 bg-yellow-600">
                                            <img class="rounded-full size-12"
                                                src="{{ asset('homepage/icon_sangkien.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text-gray-600">Đăng ký thi Sáng kiến</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- DaisyUI Modal -->
                    <input type="checkbox" id="registerModal" class="modal-toggle">
                    <div class="modal">
                        <div class="modal-box">
                            <h3 class="font-bold text-lg">Vui lòng đăng nhập hoặc đăng ký</h3>
                            <p class="py-4">Bạn cần đăng nhập hoặc đăng ký tài khoản để tiếp tục thực hiện thao tác
                                này.</p>
                            <div class="modal-action">
                                <a href="{{ route('login') }}" class="btn btn-primary">Đăng nhập</a>
                                <a href="{{ route('register') }}" class="btn btn-secondary">Đăng ký</a>
                                <label for="registerModal" class="btn">Đóng</label>
                            </div>
                        </div>
                    </div>

                    <script>
                        // Lưu lại URL cần redirect vào session khi người dùng chưa đăng nhập
                        function saveRedirectUrl(url) {
                            // Gửi URL cần redirect vào backend
                            fetch('/save-redirect-url', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}', // Token CSRF bảo vệ
                                },
                                body: JSON.stringify({
                                    redirect_url: url
                                })
                            });
                        }
                    </script>
                    <div class="w-full p-2">
                        <a href="{{ auth()->check() ? route('web.intellectual_property.report.create') : 'javascript:void(0)' }}"
                            onclick="{{ auth()->check() ? '' : 'saveRedirectUrl(\'' . route('web.intellectual_property.report.create') . '\'); document.getElementById(\'registerModal\').checked = true;' }}">
                            <div
                                class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-500 rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-1 bg-blue-600">
                                            <img src="{{ asset('homepage/icon_canhbao.jpg') }}"
                                                style="width: 66px; border-radius: 999px; height: 66px;" alt="">
                                        </div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text-gray-600">Gửi phản ánh xâm phạm tài sản sở
                                            hữu trí tuệ</h5>

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="w-full p-2">
                        <a href="{{ route('web.api.index') }}">
                            <div
                                class="bg-gradient-to-b from-red-200 to-red-100 border-b-4 border-red-500 rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-3 bg-red-600"><i
                                                class="fas fa-inbox fa-2x fa-inverse"></i>
                                        </div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text-gray-600">API cung cấp thông tin</h5>

                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
        <div class="h-auto mt-5 overflow-hidden">
            <div class="main-content flex-1 p-3 mt-5 pb-2 md:pb-2">
                <div class="flex flex-row items-center ml-1">
                    <div class="flex-shrink pr-4">
                        <div class="p-1">
                            <img class="size-10"
                                src="{{ asset('homepage/icon_right_content_home/icon_document.png') }}" alt="">
                        </div>
                    </div>
                    <div class="flex-1">
                        <a href="" target="_blank"
                            class="text-sm font-bold uppercase text-gray-600 hover:text-blue-900">CÁC MẪU TỜ KHAI
                        </a>
                    </div>
                </div>
                <div class="bg-base-content/10 mx-1 my-3 h-px"></div>

                <div class="flex flex-row items-center ml-1">
                    <div class="flex-shrink pr-4">
                        <div class="p-1">
                            <img class="size-10"
                                src="{{ asset('homepage/icon_right_content_home/icon_công_báo.png') }}" alt="">
                        </div>
                    </div>
                    <div class="flex-1">
                        <a href="" target="_blank"
                            class="text-sm font-bold uppercase text-gray-600 hover:text-blue-900">CÔNG BÁO SỞ HỮU CÔNG
                            NGHIỆP
                        </a>
                    </div>
                </div>
                <div class="bg-base-content/10 mx-1 my-3 h-px"></div>

                <div class="flex flex-row items-center ml-1">
                    <div class="flex-shrink pr-4">
                        <div class="p-1">
                            <img class="size-10"
                                src="{{ asset('homepage/icon_right_content_home/icon_nghiên cứu.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="flex-1">
                        <a href="" target="_blank"
                            class="text-sm font-bold uppercase text-gray-600 hover:text-blue-900">NGHIÊN CỨU - ĐÀO TẠO
                            - TUYÊN TRUYỀN VỀ SỞ HỮU TRÍ TUỆ
                        </a>
                    </div>
                </div>
                <div class="bg-base-content/10 mx-1 my-3 h-px"></div>

                <div class="flex flex-row items-center ml-1">
                    <div class="flex-shrink pr-4">
                        <div class="p-1">
                            <img class="size-10"
                                src="{{ asset('homepage/icon_right_content_home/icon_thông tin.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="flex-1">
                        <a href="" target="_blank"
                            class="text-sm font-bold uppercase text-gray-600 hover:text-blue-900">THÔNG TIN VỀ HỘI THẢO
                            - TẬP HUÂN
                        </a>
                    </div>
                </div>
                <div class="bg-base-content/10 mx-1 my-3 h-px"></div>

                <div class="flex flex-row items-center ml-1">
                    <div class="flex-shrink pr-4">
                        <div class="p-1">
                            <img class="size-10" src="{{ asset('homepage/icon_right_content_home/icon_sách.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="flex-1">
                        <a href="" target="_blank"
                            class="text-sm font-bold uppercase text-gray-600 hover:text-blue-900">SÁCH, TẠP CHÍ VÀ TÀI
                            LIỆU THAM KHẢO
                        </a>
                    </div>
                </div>
                <div class="bg-base-content/10 mx-1 my-3 h-px"></div>

                <div class="flex flex-row items-center ml-1">
                    <div class="flex-shrink pr-4">
                        <div class="p-1">
                            <img class="rounded-full size-10"
                                src="{{ asset('homepage/icon_right_content_home/icon_phat trien tai san shtt.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="flex-1">
                        <a href="" target="_blank"
                            class="text-sm font-bold uppercase text-gray-600 hover:text-blue-900">PHÁT TRIỂN TÀI SẢN
                            TRÌ TUỆ
                        </a>
                    </div>
                </div>
                <div class="bg-base-content/10 mx-1 my-3 h-px"></div>

                <div class="flex flex-row items-center ml-1">
                    <div class="flex-shrink pr-4">
                        <div class="p-1">
                            <img class="rounded-full size-10"
                                src="{{ asset('homepage/icon_right_content_home/icon_đại diện sở hữu cn.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="flex-1">
                        <a href="" target="_blank"
                            class="text-sm font-bold uppercase text-gray-600 hover:text-blue-900">ĐẠI DIỆN SỞ HỮU CÔNG
                            NGHIỆP
                        </a>
                    </div>
                </div>
                <div class="bg-base-content/10 mx-1 my-3 h-px"></div>

                <div class="flex flex-row items-center ml-1">
                    <div class="flex-shrink pr-4">
                        <div class="p-1">
                            <img class="size-10"
                                src="{{ asset('homepage/icon_right_content_home/icon_giám định sở hữu cn.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="flex-1">
                        <a href="" target="_blank"
                            class="text-sm font-bold uppercase text-gray-600 hover:text-blue-900">GIÁM ĐỊNH SỞ HỮU CÔNG
                            NGHIỆP
                        </a>
                    </div>
                </div>
                <div class="bg-base-content/10 mx-1 my-3 h-px"></div>
                <div class="cursor-pointer" onclick="">
                    <img src="{{ asset('homepage/icon_right_content_home/icon_nhieu sach.jpg') }}"
                        style="width:  -webkit-fill-available;" />
                    <a class="text-xs font-bold uppercase text-gray-600 hover:text-blue-900">Sách, tài liệu nghiệp vụ
                        về sở hữu trí tuệ
                    </a>
                </div>

                <div class="relative mt-3 space-y-3">
                    <div class="gap-2 px-0 font-semibold uppercase bg-[#4792d3] text-blue-700"
                    style="border-top-right-radius: 6px; border-top-left-radius: 6px;">

                        <div class="inline-block relative py-2 px-4">
                            <h3 class="relative z-20 text-white uppercase whitespace-nowrap">
                                Liên kết trang
                            </h3>
                        </div>

                    </div>
                    <div class="bg-gradient-to-r from-blue-400 via-blue-500 via-70% to-red-500 h-0.5 !m-0"></div>
                    <div class="relative grid grid-cols-1 p-3 !m-0" style="border: 1px solid rgb(191, 191, 191); border-top: none; border-bottom-right-radius: 6px; border-bottom-left-radius: 6px;">
                        <select class="select select-bordered select-sm w-full max-w-xs py-0" style="border-radius: 0px;">
                            <option disabled selected>Bộ, Ngành, Địa phương</option>
                            <option>Small Apple</option>
                            <option>Small Orange</option>
                            <option>Small Tomato</option>
                          </select>
                          <select class="select select-bordered select-sm w-full max-w-xs mt-5 py-0" style="border-radius: 0px;">
                            <option disabled selected>Các đơn vị, tổ chức thuộc Bộ</option>
                            <option>Small Apple</option>
                            <option>Small Orange</option>
                            <option>Small Tomato</option>
                          </select>
                    </div>

                </div>

                <div class="cursor-pointer" onclick="">
                    <img src="{{ asset('homepage/icon_right_content_home/icon_chart.jpg') }}"
                        style="width:  -webkit-fill-available;" />
                </div>
            </div>
        </div>

    </div>

</div>
