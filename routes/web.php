<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(route('login.index'));
});

//1. REGISTER
use App\Http\Controllers\Auth\RegisterController;

Route::resource("/register", RegisterController::class);

//2. Login
use App\Http\Controllers\Auth\LoginController;

Route::resource('/login', LoginController::class);

//3. Admin
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Inventory\CategoryController;
use App\Http\Controllers\Inventory\ProductController;
use App\Http\Controllers\Inventory\PromoController;

Route::prefix("admin")->group(function () {
    Route::resource("/", AdminController::class);
    Route::resource("/product", ProductController::class);
    Route::resource("/promo", PromoController::class);
    Route::resource("/category", CategoryController::class);
});
