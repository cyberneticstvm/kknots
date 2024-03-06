<?php

use App\Http\Controllers\WebController;
use App\Http\Controllers\admin\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['web'])->group(function () {
    Route::controller(WebController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/login', 'login')->name('login');
        Route::get('/register', 'register')->name('register');
    });

    Route::controller(AuthController::class)->group(function () {
        Route::post('/login', 'authenticate')->name('user.authenticate');
        Route::post('/register', 'register')->name('user.register');
    });
});

Route::middleware(['web', 'auth'])->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/logout', 'logout')->name('logout');
    });
});
