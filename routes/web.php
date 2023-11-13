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
use App\Http\Controllers\CartController;

Route::resource("/register", RegisterController::class);

//2. Login
use App\Http\Controllers\test\TestController;

// Route::resource('/login', LoginController::class);

//3. Admin
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Inventory\UnitController;
use App\Http\Controllers\test\AdminTestController;
use App\Http\Controllers\Inventory\PromoController;
use App\Http\Controllers\Inventory\ProductController;
use App\Http\Controllers\Inventory\CategoryController;
use App\Http\Controllers\Inventory\SupplierController;
use App\Http\Controllers\Transaction\THeaderController;
use App\Http\Controllers\ContentManagementSystemController;



Route::prefix("admin-resource")->group(function () {
    Route::resource("/", AdminController::class);
    Route::resource("/product", ProductController::class);
    Route::resource("/promo", PromoController::class);
    Route::resource("/category", CategoryController::class);
    Route::resource("/supplier", SupplierController::class);
    Route::resource("/pos", THeaderController::class);
    Route::resource("/unit", UnitController::class);
});


// Carting Stuff
Route::get("/user/my-cart", [CartController::class, "myCart"])->name("my-cart");
Route::post("/user/cart/{product_id}", [CartController::class, "addProduct"])->name("cart.add");


//4. User Main Page

// Index
Route::get('/user', [UserController::class, "index"])->name('user.index');

// Login Stuff
Route::get('/user/login', [UserController::class, "login"])->name('login.index');

Route::post('/user/login', [UserController::class, "process"])->name('login.process');

Route::post('/user/logout', [UserController::class, "logout"])->name('login.logout');

Route::resource("/user", UserController::class);



Route::resource("/test", TestController::class);



Route::prefix("admin")->group(function(){
    Route::get("/", [AdminTestController::class, "landing"])->name("admin-rework.index");
    Route::get("/dashboard", [AdminTestController::class, "index"])->name("admin-rework.dashboard");
    Route::get("/product", [AdminTestController::class, "product"])->name("admin-rework.product");
    Route::get("/category", [AdminTestController::class, "category"])->name("admin-rework.category");
    Route::get("/promo", [AdminTestController::class, "promo"])->name("admin-rework.promo");
    Route::get("/supplier", [AdminTestController::class, "supplier"])->name("admin-rework.supplier");
    Route::get("/pos", [AdminTestController::class, "pos"])->name("admin-rework.pos");
    Route::get("/unit", [AdminTestController::class, "unit"])->name("admin-rework.unit");
    Route::get("/cart", [AdminTestController::class, "index"])->name("admin-rework.cart");
    Route::get("/user", [AdminTestController::class, "user"])->name("admin-rework.user");

    Route::get("/upgrade/{id}", [AdminTestController::class, "upgrade"])->name("admin-rework.upgrade");

    Route::get('/add/unit/{id}', [AdminTestController::class, 'addUnit'])->name('admin-rework.add.unit');
    Route::post('/edit/unit/', [AdminTestController::class, 'saveUnit'])->name('admin-rework.save.unit');
    Route::get('/delete/unit/{id}', [AdminTestController::class, 'deleteUnit'])->name('admin-rework.delete.unit');

    Route::get("/cms", [AdminTestController::class, 'cms'])->name("admin-rework.cms");

    Route::post("/cms/{id}", [ContentManagementSystemController::class, "update"])->name("cms.update");
});

