<aside class="bg-base-100 min-h-screen">
    <div data-sveltekit-preload-data
        class="bg-base-100 sticky h-12 top-0 z-20 hidden items-center gap-2 bg-opacity-90 px-4 py-2 backdrop-blur lg:flex shadow-md">
        <a href="#" aria-current="page" aria-label="Homepage" class="flex-0 btn btn-ghost px-2">
            <div class="font-title inline-flex text-lg md:text-2xl">Bentre-shtt</div>
        </a>
    </div>
    <div class="h-4"></div>
    <ul class="menu py-0">
        <li><a href="{{ route('dashboard') }}"
                class="group font-semibold {{ Request::routeIs('dashboard') ? 'active' : '' }}">
                <i class="fab fa-dashcube"></i>Bảng điều khiển
            </a>
        </li>

        <li><a href="{{ route('admin.abouts.index') }}" {{-- <li><a href="{{ route('admin.abouts.edit', 1) }}" --}}
                class="group font-semibold {{ Request::routeIs('admin.abouts.*') ? 'active' : '' }}">
                <i class="fad fa-address-card"></i>Thông tin giới thiệu
            </a>
        </li>

        <li>
            <a href="{{ route('admin.posts.index') }}"
                class="group font-semibold {{ Request::routeIs('admin.posts.*') ? 'active' : '' }}">
                <i class="fal fa-newspaper"></i>
                Tin tức sự kiện
            </a>
        </li>

        <li><a href="{{ route('admin.notifies.index') }}"
                class="group font-semibold {{ Request::routeIs('admin.notifies.*') ? 'active' : '' }}">
                <i class="fad fa-bell-exclamation"></i>Thông báo
            </a>
        </li>
        <li></li>
        <li>
            <details {{ Request::routeIs('admin.districts.*') || Request::routeIs('admin.communes.*') ? 'open' : '' }}>
                <summary class="font-semibold group">
                    <i class="fad fa-map"></i>Hành chính
                </summary>
                <ul>
                    <li>
                        <a href="{{ route('admin.districts.index') }}"
                            class="group font-semibold {{ Request::routeIs('admin.districts.*') ? 'active' : '' }}">
                            <i class="far fa-map-marked"></i>
                            Huyện
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.communes.index') }}"
                            class="group font-semibold {{ Request::routeIs('admin.communes.*') ? 'active' : '' }}">
                            <i class="far fa-map-marked-alt"></i>
                            Xã
                        </a>
                    </li>
                </ul>
            </details>
        </li>
        <li>
            <details
                {{ Request::routeIs('admin.patents.*') || Request::routeIs('admin.patent_types.*') ? 'open' : '' }}>
                <summary class="font-semibold group">
                    <i class="fab fa-creative-commons-remix"></i>Sáng chế toàn văn
                </summary>
                <ul>
                    <li>
                        <a href="{{ route('admin.patents.index') }}"
                            class="group font-semibold {{ Request::routeIs('admin.patents.*') ? 'active' : '' }}">
                            <i class="fad fa-registered"></i>
                            Danh sách sáng chế
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.patent_types.index') }}"
                            class="group font-semibold {{ Request::routeIs('admin.patent_types.*') ? 'active' : '' }}">
                            <i class="fad fa-bookmark"></i>
                            Lĩnh vực
                        </a>
                    </li>
                </ul>
            </details>
        </li>
        <li>
            <details
                {{ Request::routeIs('admin.trademarks.*') || Request::routeIs('admin.trademark_types.*') ? 'open' : '' }}>
                <summary class="font-semibold group">
                    <i class="fad fa-trademark"></i>Bảo hộ nhãn hiệu
                </summary>
                <ul>
                    <li>
                        <a href="{{ route('admin.trademarks.index') }}"
                            class="group font-semibold {{ Request::routeIs('admin.trademarks.*') ? 'active' : '' }}">
                            <i class="fad fa-registered"></i>
                            Danh sách nhãn hiệu
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.trademark_types.index') }}"
                            class="group font-semibold {{ Request::routeIs('admin.trademark_types.*') ? 'active' : '' }}">
                            <i class="fad fa-bookmark"></i>
                            Nhóm ngành
                        </a>
                    </li>
                </ul>
            </details>
        </li>

        <li>
            <details
                {{ Request::routeIs('admin.industrial_designs.*') || Request::routeIs('admin.industrial_design_types.*') ? 'open' : '' }}>
                <summary class="font-semibold group">
                    <i class="fab fa-wizards-of-the-coast"></i>Kiểu dáng công nghiệp
                </summary>
                <ul>
                    <li>
                        <a href="{{ route('admin.industrial_designs.index') }}"
                            class="group font-semibold {{ Request::routeIs('admin.industrial_designs.*') ? 'active' : '' }}">
                            <i class="fas fa-stream"></i>
                            Danh sách KDCN
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.industrial_design_types.index') }}"
                            class="group font-semibold {{ Request::routeIs('admin.industrial_design_types.*') ? 'active' : '' }}">
                            <i class="fad fa-bookmark"></i>
                            Nhóm ngành
                        </a>
                    </li>
                </ul>
            </details>
        </li>

        <li>
            <details
                {{ Request::routeIs('admin.tieu_chi_sang_kien.index') || Request::routeIs('admin.initiatives.*') || Request::routeIs('admin.initiative_dossiers.*') || Request::routeIs('admin.initiative_evaluates*') || Request::routeIs('admin.initiative_rating*') ? 'open' : '' }}>
                <summary class="font-semibold group">
                    <i class="far fa-magic"></i>Sáng kiến
                </summary>
                <ul>
                    <li>
                        <a href="{{ route('admin.initiatives.index') }}"
                            class="group font-semibold {{ Request::routeIs('admin.initiatives.*') ? 'active' : '' }}">
                            <i class="fas fa-tasks-alt"></i>
                            Danh sách sáng kiến
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.initiative_dossiers.index') }}"
                            class="group font-semibold {{ Request::routeIs('admin.initiative_dossiers.*') ? 'active' : '' }}">
                            <i class="fas fa-file-alt"></i>
                            Hồ sơ sáng kiến
                        </a>
                    </li>
                    <li></li>
                    {{-- <a class="font-bold">Cuộc thi sáng kiến</a> --}}
                    <li>
                        <a href="{{ route('admin.tieu_chi_sang_kien.index') }}"
                            class="group font-semibold {{ Request::routeIs('admin.tieu_chi_sang_kien.index') ? 'active' : '' }}">
                            <i class="far fa-clipboard-list-check"></i>
                            Quản lý tiêu chí đánh giá
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.initiative_evaluates.index') }}"
                            class="group font-semibold {{ Request::routeIs('admin.initiative_evaluates.*') ? 'active' : '' }}">
                            <i class="far fa-user-check"></i>
                            Hội đồng thông qua
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.initiative_rating.index') }}"
                            class="group font-semibold {{ Request::routeIs('admin.initiative_rating.*') || Request::routeIs('admin.initiative_rating.rate') ? 'active' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75">
                                </path>
                            </svg>
                            Đánh giá
                        </a>
                    </li>
                </ul>
            </details>
        </li>

        <li>
            <details
                {{ Request::routeIs('admin.technical_innovation_dossiers.*') || Request::routeIs('admin.technical_innovation_committees.*') || Request::routeIs('admin.technical_innovation_results.*') || Request::routeIs('admin.tieu_chi_htstkt.index') || Request::routeIs('admin.technical_innovation_committee_rating.*') ? 'open' : '' }}>
                <summary class="font-semibold group">
                    <i class="fad fa-bezier-curve"></i>Sáng tạo kỹ thuật
                </summary>
                <ul>
                    <li>
                        <a href="{{ route('admin.tieu_chi_htstkt.index') }}"
                            class="group font-semibold {{ Request::routeIs('admin.tieu_chi_htstkt.index') ? 'active' : '' }}">
                            <i class="far fa-clipboard-list-check"></i>
                            Quản lý tiêu chí đánh giá
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.technical_innovation_dossiers.index') }}"
                            class="group font-semibold {{ Request::routeIs('admin.technical_innovation_dossiers.*') ? 'active' : '' }}">
                            <i class="fas fa-file-alt"></i>
                            Hồ sơ
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.technical_innovation_committees.index') }}"
                            class="group font-semibold {{ Request::routeIs('admin.technical_innovation_committees.*') ? 'active' : '' }}">
                            <i class="fas fa-users"></i>
                            Hội đồng
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.technical_innovation_committee_rating.index') }}"
                            class="group font-semibold {{ Request::routeIs('admin.technical_innovation_committee_rating.*') || Request::routeIs('admin.technical_innovation_committees.rate') ? 'active' : '' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75">
                                </path>
                            </svg>
                            Đánh giá
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.technical_innovation_results.index') }}"
                            class="group font-semibold {{ Request::routeIs('admin.technical_innovation_results.*') ? 'active' : '' }}">
                            <i class="far fa-user-check"></i>
                            Kết quả
                        </a>
                    </li>
                </ul>
            </details>
        </li>

        <li><a {{ Request::routeIs('admin.geographical_indications.*') ? 'open' : '' }}
                href="{{ route('admin.geographical_indications.index') }}"
                class="group font-semibold {{ Request::routeIs('admin.geographical_indications.*') ? 'active' : '' }}">
                <i class="fas fa-atlas"></i>Chỉ dẫn địa lý
            </a>
        </li>

        <li><a {{ Request::routeIs('admin.products.*') ? 'open' : '' }} href="{{ route('admin.products.index') }}"
                class="group font-semibold {{ Request::routeIs('admin.products.*') ? 'active' : '' }}">
                <i class="fab fa-product-hunt"></i>Sản phẩm đăng ký xây dựng, phát triển thương hiệu
            </a>
        </li>
        <li><a {{ Request::routeIs('admin.science_innovations.*') ? 'open' : '' }}
                href="{{ route('admin.science_innovations.index') }}"
                class="group font-semibold {{ Request::routeIs('admin.science_innovations.*') ? 'active' : '' }}">
                <i class="fad fa-telescope"></i> NCKH và đổi mới sáng tạo
            </a>
        </li>
        <li><a {{ Request::routeIs('image.upload') ? 'open' : '' }} href="{{ route('image.upload') }}"
                class="group font-semibold {{ Request::routeIs('image.upload') ? 'active' : '' }}">
                <i class="fad fa-print-search"></i>search image
            </a>
        </li>

        <li>
            <details
                {{ Request::routeIs('admin.advisory_supports.*') || Request::routeIs('admin.advisory_supports.categories.*') || Request::routeIs('admin.advisory_support_videos.*') ? 'open' : '' }}>
                <summary class="font-semibold group">
                    <i class="fad fa-headset"></i>Thông tin hỗ trợ, tư vấn
                </summary>
                <ul>
                    <li>
                        <a href="{{ route('admin.advisory_supports.categories.index') }}"
                            class="group font-semibold {{ Request::routeIs('admin.advisory_supports.categories.*') ? 'active' : '' }}">
                            <i class="fas fa-file-alt"></i>
                            Danh mục
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.advisory_supports.index') }}"
                            class="group font-semibold {{ Request::routeIs('admin.advisory_supports.*') && !Request::routeIs('admin.advisory_supports.categories.*') ? 'active' : '' }}">
                            <i class="fad fa-comment-alt-edit"></i>
                            Thông tin hỗ trợ, tư vấn
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.advisory_support_videos.index') }}"
                            class="group font-semibold {{ Request::routeIs('admin.advisory_support_videos.*') ? 'active' : '' }}">
                            <i class="fad fa-play-circle"></i>
                            Video hướng dẫn
                        </a>
                    </li>
                </ul>
            </details>
        </li>

        <li><a {{ Request::routeIs('admin.infringements.*') ? 'open' : '' }}
                href="{{ route('admin.infringements.index') }}"
                class="group font-semibold {{ Request::routeIs('admin.infringements.*') ? 'active' : '' }}">
                <i class="fad fa-exclamation-triangle"></i>Vi phạm
            </a>
        </li>

        <li><a {{ Request::routeIs('admin.intellectual_property.*') ? 'open' : '' }}
            href="{{ route('admin.intellectual_property.index') }}"
            class="group font-semibold {{ Request::routeIs('admin.intellectual_property.*') ? 'active' : '' }}">
            <i class="fad fa-exclamation-triangle"></i>Cảnh báo và phản ánh xâm phạm
        </a>
    </li>

        <li>
            <a {{ Request::routeIs('admin.contacts.*') ? 'open' : '' }} href="{{ route('admin.contacts.index') }}"
                class="group font-semibold {{ Request::routeIs('admin.contacts.*') ? 'active' : '' }}">
                <i class="far fa-mail-bulk"></i>Liên hệ
            </a>
        </li>

        <li>
            <a {{ Request::routeIs('admin.faqs.*') ? 'open' : '' }} href="{{ route('admin.faqs.index') }}"
                class="group font-semibold {{ Request::routeIs('admin.faqs.*') ? 'active' : '' }}">
                <i class="fad fa-question"></i>Hỏi đáp
            </a>
        </li>

        <li>
            <details
                {{ Request::routeIs('admin.users.*') || Request::routeIs('admin.roles.*') || Request::routeIs('admin.permissions*') ? 'open' : '' }}>
                <summary class="group font-semibold">
                    <i class="fal fa-file-user"></i>Tài khoản
                </summary>
                <ul>
                    <li>
                        <a href="{{ route('admin.users.index') }}"
                            class="group font-semibold {{ Request::routeIs('admin.users.*') ? 'active' : '' }}">
                            <i class="fas fa-users"></i>
                            Danh sách tài khoản
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.roles.index') }}"
                            class="group font-semibold {{ Request::routeIs('admin.roles.*') ? 'active' : '' }}">
                            <i class="fas fa-users"></i>
                            Danh sách vai trò
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.permissions.create') }}"
                            class="group font-semibold {{ Request::routeIs('admin.permissions.*') ? 'active' : '' }}">
                            <i class="far fa-user-lock"></i>
                            Thêm quyền
                        </a>
                    </li>
                </ul>
            </details>
        </li>
        <li></li>
        <li><a target="_blank" href="{{ route('home') }}" class="font-semibold group">
                <i class="fad fa-home-alt"></i>
                Trang chủ
            </a>
        </li>

        <li><a href="{{ route('users.activity') }}"
                class="font-semibold group {{ Request::routeIs('users.activity') ? 'active' : '' }}">
                <i class="fal fa-journal-whills"></i>
                Nhật ký hoạt động
            </a>
        </li>
    </ul>
    <div
        class="bg-base-100 pointer-events-none sticky bottom-0 flex h-40 [mask-image:linear-gradient(transparent,#000000)]">
    </div>
    <script>
        function scrollToOpenMenu() {
            const openDetails = document.querySelector('details[open]');
            if (openDetails) {
                openDetails.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }
        }

        // Tự động thêm sự kiện onclick cho tất cả các <a> trong menu
        document.querySelectorAll('aside .menu a').forEach(link => {
            link.addEventListener('click', scrollToOpenMenu);
        });

        // Cuộn đến menu mở khi trang tải
        window.addEventListener('load', scrollToOpenMenu);

        // Hàm cuộn đến phần tử được đánh dấu là "active"
        function scrollToActiveMenu() {
            const activeLink = document.querySelector('aside .menu a.active');

            if (activeLink) {
                // Cuộn đến liên kết active với hành vi mượt mà
                activeLink.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }
        }

        // Tự động cuộn đến mục "active" khi trang tải
        window.addEventListener('load', scrollToActiveMenu);
    </script>

</aside>
