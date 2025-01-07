
<li class="hover:text-white flex gap-1 items-center justify-center">
    <div class="inline-flex items-center gap-1 w-max">
        <?php echo e(svg('heroicon-c-chart-bar', 'size-4 flex-none animate-pulse')); ?>

        <small class="flex-grow contents">Đang online: <?php echo e($current); ?></small>
    </div>
</li>
<li class="hover:text-white flex gap-1 items-center justify-center ml-3">
    <div class="inline-flex items-center gap-1 w-max">
        <?php echo e(svg('heroicon-o-clock', 'size-4 flex-none')); ?>

        <small class="flex-grow contents">Hôm nay: <?php echo e($today); ?></small>
    </div>
</li>
<li class="hover:text-white flex gap-1 items-center justify-center ml-3">
    <div class="inline-flex items-center gap-1 w-max">
        <?php echo e(svg('heroicon-o-users', 'flex-none size-4')); ?>

        <small class="flex-grow w-max contents">Tổng lượt truy cập: <?php echo e($total); ?></small>
    </div>
</li>
<?php /**PATH D:\ADMIN GIRC-projects\daklak-krongana\resources\views/components/website/counter.blade.php ENDPATH**/ ?>