<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\BackendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class,'index'])->name('frontend.index');
Route::get('/cart', [FrontendController::class,'cart'])->name('frontend.cart');
Route::get('/about', [FrontendController::class,'about'])->name('frontend.about');
Route::get('/shop', [FrontendController::class,'shop'])->name('frontend.shop');
Route::get('/singleProduct', [FrontendController::class,'singleProduct'])->name('frontend.singleProduct');
Route::get('/checkout', [FrontendController::class,'checkout'])->name('frontend.checkout');
Route::get('/contact', [FrontendController::class,'contact'])->name('frontend.contact');

Auth::routes(['verify' => true]);

Route::group(['prefix'=>'admin', 'as'=>'admin.'], function(){
  Route::group(['middleware'=>'guest'], function(){
    Route::get('/login', [BackendController::class,'login'])->name('login');
    Route::get('/blank', [BackendController::class,'blank'])->name('blank');
    Route::get('/forgot-password', [BackendController::class,'forgot_password'])->name('forgot-password');
  });
  
  Route::group(['middleware'=> ['roles', 'role:admin|supervisor']], function(){
    Route::get('/', [BackendController::class,'index'])->name('index_route');
    Route::get('/index', [BackendController::class,'index'])->name('index');
  });

});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
