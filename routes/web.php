<?php

use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

//mật khẩu
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', HomeController::class)->name('home');
});

Route::get('/test', function() {
    return view('web.home');
});

// Route::get('/', HomeController::class)->name('home');

Route::get('/dangky', [HomeController::class, 'register'])->name('dangky');

Route::post('/dangky', [HomeController::class, 'storeRegister'])->name('dangky.store');

Route::get('/danhsachdangky', [HomeController::class, 'list'])->name('list.dangky');

require __DIR__.'/admin.php';
