<?php

use App\Http\Middleware\LocalizationMiddleware;
use App\Models\Admin\Notify;
use App\Models\Admin\Post;
use App\Policies\AboutPolicy;
use App\Policies\DistrictPolicy;
use App\Policies\PermissionPolicy;
use App\Policies\ProductPolicy;
use App\Policies\FaqPolicy;
use App\Policies\RolePolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Gate;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: [
            LocalizationMiddleware::class,
        ]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
    
// Đăng ký các policies và gates sau khi tạo ứng dụng
Gate::resource('abouts', AboutPolicy::class);

Gate::resource('posts', Post::class);

Gate::resource('notifies', Notify::class);

Gate::resource('districts', DistrictPolicy::class);

Gate::resource('products', ProductPolicy::class);

Gate::resource('faqs', FaqPolicy::class);

Gate::resource('users', UserPolicy::class);
Gate::resource('roles', RolePolicy::class);
Gate::resource('permissions', PermissionPolicy::class);

