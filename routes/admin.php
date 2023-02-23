<?php

use App\Http\Controllers\admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;


Route::prefix('/Admin')->name('Admin.')->middleware('Auth','user')->group(function(){

    Route::get('/Dashboard',[AdminDashboardController::class,'index'])->name('Dashboard');

});
