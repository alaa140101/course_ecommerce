<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class,'index'])->name('frontend.index');
Route::get('/cart', [FrontendController::class,'cart'])->name('frontend.cart');
Route::get('/about', [FrontendController::class,'about'])->name('frontend.about');
Route::get('/shop', [FrontendController::class,'shop'])->name('frontend.shop');
Route::get('/singleProduct', [FrontendController::class,'singleProduct'])->name('frontend.singleProduct');
Route::get('/checkout', [FrontendController::class,'checkout'])->name('frontend.checkout');
Route::get('/contact', [FrontendController::class,'contact'])->name('frontend.contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
