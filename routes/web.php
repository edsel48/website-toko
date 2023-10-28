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
    return redirect(route('user.index'));
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
use App\Http\Controllers\Inventory\SupplierController;

Route::prefix("admin-resource")->group(function () {
    Route::resource("/", AdminController::class);
    Route::resource("/product", ProductController::class);
    Route::resource("/promo", PromoController::class);
    Route::resource("/category", CategoryController::class);
    Route::resource("/supplier", SupplierController::class);
});

use App\Http\Controllers\CartController;

// Carting Stuff
Route::get("/user/mycart", [CartController::class, "myCart"])->name("my-cart");
Route::post("/user/{product_id}", [CartController::class, "addProduct"]);


//4. User Main Page
use App\Http\Controllers\user\UserController;

Route::resource("/user", UserController::class);


use App\Http\Controllers\test\TestController;

Route::resource("/test", TestController::class);

use App\Http\Controllers\test\AdminTestController;

Route::prefix("admin")->group(function(){
    Route::get("/", [AdminTestController::class, "landing"])->name("admin-rework.index");
    Route::get("/dashboard", [AdminTestController::class, "index"])->name("admin-rework.dashboard");
    Route::get("/product", [AdminTestController::class, "product"])->name("admin-rework.product");
    Route::get("/category", [AdminTestController::class, "category"])->name("admin-rework.category");
    Route::get("/promo", [AdminTestController::class, "promo"])->name("admin-rework.promo");
    Route::get("/supplier", [AdminTestController::class, "supplier"])->name("admin-rework.supplier");
    Route::get("/cart", [AdminTestController::class, "index"])->name("admin-rework.cart");
    Route::get("/user", [AdminTestController::class, "index"])->name("admin-rework.user");
});

