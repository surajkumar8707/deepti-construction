<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::group(["middleware" => ["guest:admin"]], function() {
        Route::controller(LoginController::class)->group(function() {
            Route::get('/login', 'showAdminLoginForm')->name('login_page');
            Route::post('/login', 'adminLogin')->name('login');
        });
    });
    Route::group(["middleware" => "auth:admin"], function () {
        Route::controller(HomeController::class)->group(function() {
            Route::get("/dashboard", "index")->name("dashboard");
        });
        Route::post('/logout', [LoginController::class, 'adminLogout'])->name('logout');
        //---users---
        Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
            Route::controller(UserController::class)->group(function() {
                Route::get("/", "index")->name("index");
            });
        });
    });
});
