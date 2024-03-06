<?php

use App\Http\Controllers\WebController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\UserController;
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

Route::prefix('admin/')->middleware(['web', 'auth'])->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('dashboard', 'dashboard')->name('admin.dashboard');
    });
    Route::controller(UserController::class)->group(function () {
        Route::get('staffs', 'index')->name('admin.manage.staff');
        Route::get('staff/create', 'create')->name('admin.staff.create');
        Route::post('staff/create', 'store')->name('admin.staff.save');
        Route::get('staff/edit/{id}', 'edit')->name('admin.staff.edit');
        Route::put('staff/edit/{id}', 'update')->name('admin.staff.update');
        Route::get('staff/delete/{id}', 'destroy')->name('admin.staff.delete');
    });
});
