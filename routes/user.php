<?php

use App\Http\Controllers\user\UserDashboardController;
use Illuminate\Support\Facades\Route;


Route::prefix('/User')->name('User.')->middleware('Auth','admin')->group(function(){

    Route::get('/Dashboard',[UserDashboardController::class,'index'])->name('Dashboard');

});
