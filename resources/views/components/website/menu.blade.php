<nav class="sticky top-0 z-50 w-full bg-green-800 shadow backdrop-blur">
    <div class="lg:hidden">
        <label class="swap swap-rotate text-white p-3 h-14">
            <input id="menu-toggle" type="checkbox" class="hidden" />
            <svg class="swap-off fill-current" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                viewBox="0 0 512 512">
                <path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z" />
            </svg>
            <svg class="swap-on fill-current !-top-8 relative" xmlns="http://www.w3.org/2000/svg" width="32"
                height="32" viewBox="0 0 512 512">
                <polygon
                    points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49" />
            </svg>
        </label>
    </div>

    <div id="menu"
        class="hidden mx-auto md:flex max-w-7xl flex-col justify-between px-3 sm:px-6 md:items-center lg:flex lg:flex-row lg:px-8">
        <ul class="text-normal flex w-full flex-col text-xs lg:flex-row lg:divide-x-0 lg:divide-y-0">
            <li>
                <a class="bg-lime-500 flex h-full w-full flex-row items-center justify-start gap-2 py-2 text-center font-semibold uppercase tracking-wider text-white hover:bg-lime-500 focus:outline-none"
                    href="{{ route('home') }}">
                    <span class="border-white px-2 lg:border-r">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                    </span>
                </a>
            </li>
            <li class="relative flex-row whitespace-nowrap">
                <a class="hover:bg-lime-500 hover:text-white py-2.5 uppercase text-white font-semibold h-full flex items-center tracking-wider justify-start"
                    href="#">
                    <span class="border-white px-2 lg:border-r">
                        Giới thiệu
                    </span>
                </a>
            </li>
            <li class="relative flex-row whitespace-nowrap">
                <a class="hover:bg-lime-500 hover:text-white py-2.5 uppercase text-white font-semibold h-full flex items-center tracking-wider justify-start"
                    href="#">
                    <span class="border-white px-2 lg:border-r">
                        Tin tức
                    </span>
                </a>
            </li>
            <li class="relative flex-row whitespace-nowrap">
                <div class="flex hover:bg-lime-500 hover:text-white">
                    <button
                        class=" flex h-full w-full flex-row items-center justify-between gap-2 py-2.5 text-center font-semibold uppercase tracking-wider text-white focus:outline-none"
                        href="#">
                        <span
                            class="flex w-full justify-between gap-2 border-white px-2 lg:w-auto lg:justify-start lg:border-r">
                            Sản phẩm
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </span>
                    </button>
                </div>
                <div class="hidden w-full origin-top-left bg-white shadow-md md:w-auto lg:absolute">
                    <ul
                        class="text-denim-600 divide-denim-400 w-full origin-top-left divide-y divide-dashed whitespace-nowrap bg-white">
                        <li class="hover:bg-black hover:bg-opacity-5">
                            <a class="flex items-center justify-start space-x-2 px-2 py-2.5 text-slate-800"
                                href="#">
                                Thực phẩm
                            </a>
                        </li>
                        <li class="hover:bg-black hover:bg-opacity-5">
                            <a class="flex items-center justify-start space-x-2 px-2 py-2.5 text-slate-800"
                                href="#">
                                Dịch vụ du lịch cộng đồng, du lịch sinh thái và điểm du lịch
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="relative flex-row whitespace-nowrap">
                <div class="flex hover:bg-lime-500 hover:text-white">
                    <button
                        class=" flex h-full w-full flex-row items-center justify-between gap-2 py-2.5 text-center font-semibold uppercase tracking-wider text-white focus:outline-none"
                        href="#">
                        <span
                            class="flex w-full justify-between gap-2 border-white px-2 lg:w-auto lg:justify-start lg:border-r">
                            Các CSDL
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </span>
                    </button>
                </div>
                <div class="hidden w-full origin-top-left bg-white shadow-md md:w-auto lg:absolute">
                    <ul
                        class="text-denim-600 divide-denim-400 w-full origin-top-left divide-y divide-dashed whitespace-nowrap bg-white">
                        <li class="hover:bg-black hover:bg-opacity-5">
                            <a class="flex items-center justify-start space-x-2 px-2 py-2.5 text-slate-800"
                                href="#">
                                DS hộ trồng lúa
                            </a>
                        </li>
                        <li class="hover:bg-black hover:bg-opacity-5">
                            <a class="flex items-center justify-start space-x-2 px-2 py-2.5 text-slate-800"
                                href="#">
                                DS cơ sở chế biến / xay xát
                            </a>
                        </li>
                        <li class="hover:bg-black hover:bg-opacity-5">
                            <a class="flex items-center justify-start space-x-2 px-2 py-2.5 text-slate-800"
                                href="#">
                                Đại lý tiêu thụ
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="relative flex-row whitespace-nowrap">
                <a class="hover:bg-lime-500 hover:text-white py-2.5 uppercase text-white font-semibold h-full flex items-center tracking-wider justify-start"
                    href="{{ route('map') }}">
                    <span class="border-white px-2 lg:border-l">
                        Bản đồ vùng trồng
                    </span>
                </a>
            </li>
        </ul>
        <div class="flex flex-row gap-3 py-4 lg:py-0">
            <form class="relative flex w-full items-center lg:w-auto" action="https://ocopbentre.girc.edu.vn/search">
                <input name="q" type="text" class="h-8 w-full border-none pl-6 lg:h-7" />
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="absolute left-1 h-4 w-4 text-slate-600">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </form>
            <div class="flex-none">
                <div class="flex items-center gap-3">
                    <a href="#en">
                        <img class="w-8" src="{{ asset('homepage/uk.png') }}" alt="" />
                    </a>
                    <a href="#vi">
                        <img class="w-8" src="{{ asset('homepage/vn.png') }}" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        //bật tắt ở mobile
        document.getElementById("menu-toggle").addEventListener("change", function() {
            const menu = document.getElementById("menu");
            if (this.checked) {
                menu.classList.remove("hidden");
                menu.classList.add("flex");
            } else {
                menu.classList.add("hidden");
                menu.classList.remove("flex");
            }
        });

        //hover menu
        document.querySelectorAll("li.relative").forEach((menuItem) => {
            const subMenu = menuItem.querySelector("div.hidden");
            menuItem.addEventListener("mouseenter", () => {
                if (subMenu) {
                    subMenu.classList.remove("hidden");
                }
            });
            menuItem.addEventListener("mouseleave", () => {
                if (subMenu) {
                    subMenu.classList.add("hidden");
                }
            });
        });
    </script>
</nav>
