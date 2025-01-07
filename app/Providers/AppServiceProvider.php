<?php

namespace App\Providers;

use App\Models\Admin\Notify;
use App\Models\Admin\Post;
use App\Models\Admin\Product;
use App\Observers\NotifyObserver;
use App\Observers\PostObserver;
use App\Observers\ProductObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Product::observe(ProductObserver::class);
        Post::observe(PostObserver::class);
        Notify::observe(NotifyObserver::class);
    }
}
