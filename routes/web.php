<?php

use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

//mật khẩu
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', HomeController::class)->name('home');
});

// Route::get('/', HomeController::class)->name('home');

Route::get('/dangky', [HomeController::class, 'register'])->name('dangky');

Route::post('/dangky', [HomeController::class, 'storeRegister'])->name('dangky.store');

require __DIR__.'/admin.php';
