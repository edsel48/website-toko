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
    return view('testing');
});

//1. REGISTER
use App\Http\Controllers\Auth\RegisterController;

Route::resource("/register", RegisterController::class);

//2. Login
use App\Http\Controllers\Auth\LoginController;

Route::resource('/login', LoginController::class);
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);


//-69 Test
use App\Http\Controllers\TestController;

Route::resource('/test', TestController::class);
