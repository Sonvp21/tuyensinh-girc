<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ActivityController;
use App\Http\Controllers\Admin\CommuneController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\FilePond\FilePondController;
use App\Http\Controllers\Admin\NotifyController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\Support\TinymceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ImageSearchController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {
        ////Giới thiệu
        Route::get('abouts', [AboutController::class, 'index'])->middleware('can:index,App\Models\Admin\About')->name('abouts.index');
        Route::get('abouts/create', [AboutController::class, 'create'])->middleware('can:create,App\Models\Admin\About')->name('abouts.create');
        Route::post('abouts', [AboutController::class, 'store'])->middleware('can:create,App\Models\Admin\About')->name('abouts.store');
        Route::get('abouts/{about}/edit', [AboutController::class, 'edit'])->middleware('can:edit,App\Models\Admin\About')->name('abouts.edit');
        Route::put('abouts/{about}', [AboutController::class, 'update'])->middleware('can:edit,App\Models\Admin\About')->name('abouts.update');
        Route::delete('abouts/{about}', [AboutController::class, 'destroy'])->middleware('can:destroy,App\Models\Admin\About')->name('abouts.destroy');

        ///Bài viết
        //bài viết
        Route::get('posts', [PostController::class, 'index'])->middleware('can:index,App\Models\Admin\Post')->name('posts.index');
        Route::get('posts/create', [PostController::class, 'create'])->middleware('can:create,App\Models\Admin\Post')->name('posts.create');
        Route::post('posts', [PostController::class, 'store'])->middleware('can:create,App\Models\Admin\Post')->name('posts.store');
        Route::get('posts/{post}/edit', [PostController::class, 'edit'])->middleware('can:edit,App\Models\Admin\Post')->name('posts.edit');
        Route::put('posts/{post}', [PostController::class, 'update'])->middleware('can:edit,App\Models\Admin\Post')->name('posts.update');
        Route::delete('posts/{post}', [PostController::class, 'destroy'])->middleware('can:destroy,App\Models\Admin\Post')->name('posts.destroy');

        ///Thông báo
        Route::get('notifies', [NotifyController::class, 'index'])->middleware('can:index,App\Models\Admin\Notify')->name('notifies.index');
        Route::get('notifies/create', [NotifyController::class, 'create'])->middleware('can:create,App\Models\Admin\Notify')->name('notifies.create');
        Route::post('notifies', [NotifyController::class, 'store'])->middleware('can:create,App\Models\Admin\Notify')->name('notifies.store');
        Route::get('notifies/{notify}/edit', [NotifyController::class, 'edit'])->middleware('can:edit,App\Models\Admin\Notify')->name('notifies.edit');
        Route::put('notifies/{notify}', [NotifyController::class, 'update'])->middleware('can:edit,App\Models\Admin\Notify')->name('notifies.update');
        Route::delete('notifies/{notify}', [NotifyController::class, 'destroy'])->middleware('can:destroy,App\Models\Admin\Notify')->name('notifies.destroy');

        //// Huyện
        Route::get('districts', [DistrictController::class, 'index'])->middleware('can:index,App\Models\Admin\District')->name('districts.index');
        Route::get('districts/create', [DistrictController::class, 'create'])->middleware('can:create,App\Models\Admin\District')->name('districts.create');
        Route::post('districts', [DistrictController::class, 'store'])->middleware('can:create,App\Models\Admin\District')->name('districts.store');
        Route::get('districts/{district}/edit', [DistrictController::class, 'edit'])->middleware('can:edit,App\Models\Admin\District')->name('districts.edit');
        Route::put('districts/{district}', [DistrictController::class, 'update'])->middleware('can:edit,App\Models\Admin\District')->name('districts.update');
        Route::delete('districts/{district}', [DistrictController::class, 'destroy'])->middleware('can:destroy,App\Models\Admin\District')->name('districts.destroy');
        // POST cho lọc, GET cho phân trang
        Route::match(['get', 'post'], 'districts/ajax_list', [DistrictController::class, 'ajaxList'])->name('districts.ajax_list');

        // POST cho lọc, GET cho export excel, pdf
        Route::post('districts/ajax_export', [DistrictController::class, 'ajaxExport'])->name('districts.ajax_export');
        Route::post('districts/export_excel', [DistrictController::class, 'exportExcel'])->name('districts.export_excel');
        Route::post('districts/export_pdf', [DistrictController::class, 'exportPdf'])->name('districts.export_pdf');

        //// Xã
        Route::get('communes', [CommuneController::class, 'index'])->middleware('can:index,App\Models\Admin\Commune')->name('communes.index');
        Route::get('communes/create', [CommuneController::class, 'create'])->middleware('can:create,App\Models\Admin\Commune')->name('communes.create');
        Route::post('communes', [CommuneController::class, 'store'])->middleware('can:create,App\Models\Admin\Commune')->name('communes.store');
        Route::get('communes/{commune}/edit', [CommuneController::class, 'edit'])->middleware('can:edit,App\Models\Admin\Commune')->name('communes.edit');
        Route::put('communes/{commune}', [CommuneController::class, 'update'])->middleware('can:edit,App\Models\Admin\Commune')->name('communes.update');
        Route::delete('communes/{commune}', [CommuneController::class, 'destroy'])->middleware('can:destroy,App\Models\Admin\Commune')->name('communes.destroy');

        // POST cho lọc, GET cho phân trang
        Route::match(['get', 'post'], 'communes/ajax_list', [CommuneController::class, 'ajaxList'])->name('communes.ajax_list');

        // POST cho lọc, GET cho export excel, pdf
        Route::post('communes/ajax_export', [CommuneController::class, 'ajaxExport'])->name('communes.ajax_export');
        Route::post('communes/export_excel', [CommuneController::class, 'exportExcel'])->name('communes.export_excel');
        Route::post('communes/export_pdf', [CommuneController::class, 'exportPdf'])->name('communes.export_pdf');

        ///Sản phẩm
        // Route::resource('products', ProductController::class);
        Route::get('products', [ProductController::class, 'index'])->middleware('can:index,App\Models\Admin\Product')->name('products.index');
        Route::get('products/create', [ProductController::class, 'create'])->middleware('can:create,App\Models\Admin\Product')->name('products.create');
        Route::post('products', [ProductController::class, 'store'])->middleware('can:create,App\Models\Admin\Product')->name('products.store');
        Route::get('products/{product}/edit', [ProductController::class, 'edit'])->middleware('can:edit,App\Models\Admin\Product')->name('products.edit');
        Route::put('products/{product}', [ProductController::class, 'update'])->middleware('can:edit,App\Models\Admin\Product')->name('products.update');
        Route::delete('products/{product}', [ProductController::class, 'destroy'])->middleware('can:destroy,App\Models\Admin\Product')->name('products.destroy');

        // POST cho lọc, GET cho phân trang
        Route::match(['get', 'post'], 'products/ajax_list', [ProductController::class, 'ajaxList'])->name('products.ajax_list');

        // POST cho lọc, GET cho export excel, pdf
        Route::post('products/ajax_export', [ProductController::class, 'ajaxExport'])->name('products.ajax_export');
        Route::post('products/export_excel', [ProductController::class, 'exportExcel'])->name('products.export_excel');
        Route::post('products/export_pdf', [ProductController::class, 'exportPdf'])->name('products.export_pdf');

        ///Tài khoản
        // Route::resource('users', UserController::class);
        Route::get('users', [UserController::class, 'index'])->middleware('can:index,App\Models\Admin\User')->name('users.index');
        Route::get('users/create', [UserController::class, 'create'])->middleware('can:create,App\Models\Admin\User')->name('users.create');
        Route::post('users', [UserController::class, 'store'])->middleware('can:create,App\Models\Admin\User')->name('users.store');
        Route::get('users/{user}/edit', [UserController::class, 'edit'])->middleware('can:edit,App\Models\Admin\User')->name('users.edit');
        Route::put('users/{user}', [UserController::class, 'update'])->middleware('can:edit,App\Models\Admin\User')->name('users.update');
        Route::delete('users/{user}', [UserController::class, 'destroy'])->middleware('can:destroy,App\Models\Admin\User')->name('users.destroy');

        ///Vai trò
        // Route::resource('roles', RoleController::class);
        Route::get('roles', [RoleController::class, 'index'])->middleware('can:index,App\Models\Admin\Role')->name('roles.index');
        Route::get('roles/create', [RoleController::class, 'create'])->middleware('can:create,App\Models\Admin\Role')->name('roles.create');
        Route::post('roles', [RoleController::class, 'store'])->middleware('can:create,App\Models\Admin\Role')->name('roles.store');
        Route::get('roles/{role}/edit', [RoleController::class, 'edit'])->middleware('can:edit,App\Models\Admin\Role')->name('roles.edit');
        Route::put('roles/{role}', [RoleController::class, 'update'])->middleware('can:edit,App\Models\Admin\Role')->name('roles.update');
        Route::delete('roles/{role}', [RoleController::class, 'destroy'])->middleware('can:destroy,App\Models\Admin\Role')->name('roles.destroy');

        ///Quyền
        // Route::resource('permissions', PermissionController::class);
        Route::resource('permissions', PermissionController::class)->middleware([
            'create' => 'can:create,App\Models\Admin\Role',
            'store' => 'can:create,App\Models\Admin\Role',
        ]);

        //post of category
        Route::get('category/{slug}', [PostController::class, 'index'])->name('categories.posts.index');
        Route::get('category/{category}/posts/create', [PostController::class, 'create'])->name('categories.posts.create');
        Route::post('category/{category}/posts', [PostController::class, 'store'])->name('categories.posts.store');
        Route::get('category/{category}/posts/{post}/edit', [PostController::class, 'edit'])->name('categories.posts.edit');
        Route::put('category/{category}/posts/{post}', [PostController::class, 'update'])->name('categories.posts.update');
        Route::delete('category/{category}/posts/{post}', [PostController::class, 'destroy'])->name('categories.posts.destroy');
        
        //contact
        Route::resource('contacts', ContactController::class);
        //faq
        // Route::resource('faqs', FaqController::class);
        Route::get('faqs', [FaqController::class, 'index'])->middleware('can:index,App\Models\Admin\Faq')->name('faqs.index');
        Route::get('faqs/create', [FaqController::class, 'create'])->middleware('can:create,App\Models\Admin\Faq')->name('faqs.create');
        Route::post('faqs', [FaqController::class, 'store'])->middleware('can:create,App\Models\Admin\Faq')->name('faqs.store');
        Route::get('faqs/{faq}/edit', [FaqController::class, 'edit'])->middleware('can:edit,App\Models\Admin\Faq')->name('faqs.edit');
        Route::put('faqs/{faq}', [FaqController::class, 'update'])->middleware('can:edit,App\Models\Admin\Faq')->name('faqs.update');
        Route::delete('faqs/{faq}', [FaqController::class, 'destroy'])->middleware('can:destroy,App\Models\Admin\Faq')->name('faqs.destroy');

        /*
         *  KEEP THESE AT THE END OF THE FILE
         */
        Route::post('tinymce-attachment', TinymceController::class)->name('tinymce.attachment');
    });
});

//User activity
Route::group([
    'namespace' => 'App\Http\Controllers\Admin',
    'middleware' => config('user-activity.middleware')
], function () {
    Route::get(config('user-activity.route_path'), 'ActivityController@getIndex')->name('user_activity');
    Route::post(config('user-activity.route_path'), 'ActivityController@handlePostRequest');
});
Route::get('admin/users/activity', [ActivityController::class, 'index'])->name('users.activity');

Route::get('/upload-image', [ImageSearchController::class, 'showUploadForm'])->name('image.upload');
Route::post('/upload-image', [ImageSearchController::class, 'uploadAndSearch'])->name('image.search');

///Thống kê
Route::get('admin/products/statistical', [ProductController::class, 'statistical'])->name('admin.products.statistical');

Route::post('/upload', [FilePondController::class, 'upload'])->name('admin.filepond.upload');
Route::delete('/revert', [FilePondController::class, 'revert'])->name('filepond.revert');
Route::get('/load/{directory}/{filename}', [FilepondController::class, 'load'])
    ->where('directory', '.*')  // Cho phép nhận nested directories
    ->name('filepond.load');

// routes/web.php
Route::post('/admin/faqs/{faq}/toggle-visibility', [FaqController::class, 'toggleVisibility'])->name('admin.faqs.toggle-visibility');

Route::post('/admin/posts/{post}/toggle-visibility', [PostController::class, 'toggleVisibility'])->name('admin.posts.toggleVisibility');

Route::post('/admin/notifies/{notify}/toggle-visibility', [NotifyController::class, 'toggleVisibility'])->name('admin.notifies.toggleVisibility');

require __DIR__ . '/auth.php';
