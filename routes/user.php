<?php

use App\Http\Controllers\user\UserDashboardController;
use Illuminate\Support\Facades\Route;


Route::prefix('/User')->name('User.')->middleware('auth','user')->group(function(){

    Route::get('/Dashboard',[UserDashboardController::class,'index'])->name('Dashboard');

    // Add to Cart food
    Route::post('/Add/To/Cart/{id}',[UserDashboardController::class,'addToCart'])->name('Add.To.Cart');
    Route::get('/All/Cart/Items',[UserDashboardController::class,'allCartItems'])->name('All.Cart.Items');
    Route::post('/Update/Cart/{id}',[UserDashboardController::class,'updateCart'])->name('Update.Cart.Item');
    Route::get('/Delete/Cart/{id}',[UserDashboardController::class,'deleteCart'])->name('Delete.Cart.Item');

    // Order system

    Route::get('/Order/{id}',[UserDashboardController::class,'storeOrder'])->name('Store.Order');
    Route::get('/All/Orders',[UserDashboardController::class,'allOrder'])->name('All.Orders');
    Route::get('/Cancel/Order/{id}',[UserDashboardController::class,'destroyOrder'])->name('Cancel.Order');

});
