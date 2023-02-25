<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\CategoryController;
use Illuminate\Support\Facades\Route;


Route::prefix('/Admin')->name('Admin.')->middleware('auth','admin')->group(function(){
    Route::get('/Dashboard',[AdminDashboardController::class,'index'])->name('Dashboard');
    // category routes
    Route::get('/Add/Category',[CategoryController::class,'add'])->name('Add.Category');
    Route::post('/Store/Category',[CategoryController::class,'store'])->name('Store.Category');
    Route::get('/All/Category',[CategoryController::class,'index'])->name('All.Category');

});
