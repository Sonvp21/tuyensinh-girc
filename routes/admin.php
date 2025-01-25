<?php

use Illuminate\Support\Facades\Route;

// Route::get('/admin', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {
        ////Giới thiệu
        // Route::get('abouts', [AboutController::class, 'index'])->middleware('can:index,App\Models\Admin\About')->name('abouts.index');
        // Route::get('abouts/create', [AboutController::class, 'create'])->middleware('can:create,App\Models\Admin\About')->name('abouts.create');
        // Route::post('abouts', [AboutController::class, 'store'])->middleware('can:create,App\Models\Admin\About')->name('abouts.store');
        // Route::get('abouts/{about}/edit', [AboutController::class, 'edit'])->middleware('can:edit,App\Models\Admin\About')->name('abouts.edit');
        // Route::put('abouts/{about}', [AboutController::class, 'update'])->middleware('can:edit,App\Models\Admin\About')->name('abouts.update');
        // Route::delete('abouts/{about}', [AboutController::class, 'destroy'])->middleware('can:destroy,App\Models\Admin\About')->name('abouts.destroy');
        // /*
        //  *  KEEP THESE AT THE END OF THE FILE
        //  */
        // Route::post('tinymce-attachment', TinymceController::class)->name('tinymce.attachment');
    });
});
require __DIR__ . '/auth.php';
