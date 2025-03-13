
<li class="ml-auto hover:text-white flex gap-1 items-center md:justify-center">
    <div class="inline-flex items-center gap-1 w-max">
        {{ svg('heroicon-c-chart-bar', 'size-4 flex-none animate-pulse') }}
        <p class="flex-grow contents">Đang online: {{ (int) $current + 230 }}</p>
    </div>
</li>
<li class="hover:text-white flex gap-1 items-center md:justify-center ml-3">
    <div class="inline-flex items-center gap-1 w-max">
        {{ svg('heroicon-o-clock', 'size-4 flex-none') }}
        <p class="flex-grow contents">Hôm nay: {{ (int) $today + 1262 }}</p>
    </div>
</li>
<li class="hover:text-white flex gap-1 items-center md:justify-center ml-3">
    <div class="inline-flex items-center gap-1 w-max">
        {{ svg('heroicon-o-users', 'flex-none size-4') }}
        <p class="flex-grow w-max contents">Tổng lượt truy cập: {{ (int) $total + 68568 }}</p>
    </div>
</li>
