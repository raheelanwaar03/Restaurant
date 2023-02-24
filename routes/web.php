<?php

use App\Http\Controllers\landingpage\LandingPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Landing page Routes
Route::get('/',[LandingPageController::class,'index'])->name('Welcome');
Route::get('/About-Us',[LandingPageController::class,'aboutUs'])->name('Welcome.About-Us');
Route::get('/Contact-Us',[LandingPageController::class,'contactUs'])->name('Welcome.Contact-Us');
Route::get('/Find/Table',[LandingPageController::class,'findTable'])->name('Welcome.Find.Table');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/user.php';
