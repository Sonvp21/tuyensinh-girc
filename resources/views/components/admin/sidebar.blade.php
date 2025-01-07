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
        <li><a {{ Request::routeIs('admin.products.*') ? 'open' : '' }} href="{{ route('admin.products.index') }}"
                class="group font-semibold {{ Request::routeIs('admin.products.*') ? 'active' : '' }}">
                <i class="fab fa-product-hunt"></i>Sản phẩm
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
