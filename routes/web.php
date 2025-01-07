<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\FaqController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\MapController;
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\Web\SearchController;
use App\Http\Controllers\Web\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('/gioi-thieu', [HomeController::class, 'about'])->name('web.abouts.index');

Route::get('/chi-tiet-san-pham', [HomeController::class, 'showProduct'])->name('web.products.show');

Route::get('/tin-tuc-su-kien', [HomeController::class, 'index'])->name('web.posts.index');
Route::get('/tin-tuc-su-kien/{slug}', [HomeController::class, 'show'])->name('web.posts.show');

Route::get('/thong-bao', [HomeController::class, 'indexNotify'])->name('web.notifies.index');
Route::get('/thong-bao/{slugNotify}', [HomeController::class, 'showNotify'])->name('web.notifies.show');

Route::get('/api/cung-cap-thong-tin', [HomeController::class, 'apiIndex'])->name('web.api.index');

//Đăng ký nộp hồ sơ hội thi stkt và sáng kiến
Route::middleware(['auth'])->group(function () {
    Route::get('/thong-tin-ca-nhan/htkhkt/{dossier}/edit', [UserController::class, 'editTechnicalInnovationDossier'])->name('web.dossier.kythuat.edit');
    Route::put('/thong-tin-ca-nhan/htkhkt/{dossier}', [UserController::class, 'updateTechnicalInnovationDossier'])->name('web.dossier.kythuat.update');
    Route::get('/thong-tin-ca-nhan/sang-kien/{initiative}/edit', [UserController::class, 'editSangKienDossier'])->name('web.dossier.sangkien.edit');
    Route::put('/thong-tin-ca-nhan/sang-kien/{initiative}', [UserController::class, 'updateSangKienDossier'])->name('web.dossier.sangkien.update');

    Route::get('/thong-tin-ca-nhan', [UserController::class, 'show'])->name('web.profile.show');
    Route::get('/thong-tin-ca-nhan/{user}/edit', [UserController::class, 'edit'])->name('web.users.edit');
    Route::put('/thong-tin-ca-nhan/{user}', [UserController::class, 'update'])->name('web.users.update');

});

// Định nghĩa route để lưu URL
Route::post('/save-redirect-url', [AuthenticatedSessionController::class, 'saveUrl'])->name('save.redirect.url');


// map 
Route::get('/map', [MapController::class, 'index'])->name('map');
Route::get('/map/{layer}.geojson', [MapController::class, 'layer']);

////Tra cứu- thống kê
//Sản phẩm
Route::get('/thong-ke-tra-cuu/san-pham', [ProductController::class, 'search'])->name('web.searchs.products.index');
Route::match(['get', 'post'], '/thong-ke-tra-cuu/san-pham/ajax_list', [ProductController::class, 'ajaxList'])->name('web.searchs.products.ajax_list');
Route::get('/thong-ke-tra-cuu/san-pham/{id}', [ProductController::class, 'show'])->name('web.searchs.products.show');

Route::get('/lien-he', [ContactController::class, 'index'])->name('web.contacts.index');
Route::post('/lien-he', [ContactController::class, 'store'])->name('web.contacts.store');

Route::get('/hoi-dap', [FaqController::class, 'index'])->name('web.faqs.index');
Route::post('/hoi-dap', [FaqController::class, 'store'])->name('web.faqs.store');
Route::get('hoi-dap/search', [FaqController::class, 'search'])->name('web.faqs.search');

Route::get('/search', [SearchController::class, 'index'])->name('search.index');

Route::get('/locale/{lang}', [LocalizationController::class, 'setLocale']);

require __DIR__.'/admin.php';
