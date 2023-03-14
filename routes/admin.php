<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\FoodContoller;
use Illuminate\Support\Facades\Route;


Route::prefix('/Admin')->name('Admin.')->middleware('auth','admin')->group(function(){
    Route::get('/Dashboard',[AdminDashboardController::class,'index'])->name('Dashboard');
    Route::get('/Book/Table',[AdminDashboardController::class,'bookTable'])->name('Book.Table');
    // order system
    Route::get('/All/Orders',[AdminDashboardController::class,'allOrders'])->name('All.Orders');
    Route::get('/Cancel/Order/{id}',[AdminDashboardController::class,'cancelOrder'])->name('Cancel.Order');
    Route::get('/Deliver/Order/{id}',[AdminDashboardController::class,'deliverOrder'])->name('Deliver.Order');
    Route::get('/All/Cancel/Order',[AdminDashboardController::class,'cancelledOrder'])->name('All.Cancel.Order');
    Route::get('/All/Delivered/Order',[AdminDashboardController::class,'deliveredOrders'])->name('All.Delivered.Order');
    // category routes
    Route::get('/Add/Category',[CategoryController::class,'add'])->name('Add.Category');
    Route::post('/Store/Category',[CategoryController::class,'store'])->name('Store.Category');
    Route::get('/All/Category',[CategoryController::class,'index'])->name('All.Category');
    Route::get('/Show/Category/{slug}',[CategoryController::class,'show'])->name('Show.Category');
    Route::get('/Destroy/Category/{id}',[CategoryController::class,'destroy'])->name('Destroy.Category');
    Route::get('/Edit/Category/{slug}',[CategoryController::class,'Edit'])->name('Edit.Category');
    Route::post('/Update/Category/{slug}',[CategoryController::class,'update'])->name('Update.Category');
    // food routes
    Route::get('/Add/Food',[FoodContoller::class,'add'])->name('Add.Food');
    Route::post('/Store/Food',[FoodContoller::class,'store'])->name('Store.Food');
    Route::get('/All/Food',[FoodContoller::class,'index'])->name('All.Food');
    Route::get('Show/Food/{slug}',[FoodContoller::class,'show'])->name('Show.Food');
    Route::get('Destroy/Food/{id}',[FoodContoller::class,'destroy'])->name('Destroy.Food');
    Route::get('Edit/Food/{slug}',[FoodContoller::class,'edit'])->name('Edit.Food');
    Route::post('Update/Food/{slug}',[FoodContoller::class,'update'])->name('Update.Food');

});
