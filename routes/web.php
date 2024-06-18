<?php

use App\Http\Controllers\WebController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\ProfileController as AdminProfileController;
use App\Http\Controllers\admin\ReportController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\Ajaxcontroller;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\user\ProfileController;
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
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/about', 'about')->name('about');
        Route::post('/search/profile', 'searchProfile')->name('search.profile');
        Route::get('/wedding', 'wedding')->name('wedding');
        Route::get('/gallery', 'gallery')->name('gallery');
        Route::get('/browse/profile', 'browseProfile')->name('browse.profile');
    });

    Route::controller(AuthController::class)->group(function () {
        Route::post('/login', 'authenticate')->name('user.authenticate');
        Route::post('/register', 'register')->name('user.register');

        Route::get('/forgot/password', 'forgotPassword')->name('forgot.password');
    });
});

Route::middleware(['web', 'auth'])->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/logout', 'logout')->name('logout');
    });

    Route::prefix('/ajax')->controller(Ajaxcontroller::class)->group(function () {
        Route::get('/get/ddl/{type}/{id}', 'getDDL')->name('ajax.get.ddl');
    });

    Route::prefix('user/')->controller(ProfileController::class)->group(function () {
        Route::get('dashboard', 'dashboard')->name('user.dashboard')->middleware('user');
        Route::get('profile/edit/{id}', 'editProfile')->name('user.profile.edit');
        Route::post('profile/edit/{id}', 'updateProfile')->name('user.profile.update');
        Route::get('profile/photo/remove/{uid}', 'removeProfilePhoto')->name('user.profile.photo.remove')->middleware('user');
        Route::get('other/photo/remove/{id}', 'removeOtherPhoto')->name('user.other.photo.remove')->middleware('user');
        Route::get('profile/horoscope/remove/{uid}', 'removeHoroscope')->name('user.horoscope.remove')->middleware('user');

        Route::get('profile/setting', 'settings')->name('user.profile.settings')->middleware('user');
        Route::post('profile/setting', 'settingsUpdate')->name('user.profile.settings.update')->middleware('user');
        Route::get('close/account/{id}', 'closeAccount')->name('user.close.account');
    });

    Route::prefix('user/')->controller(HelperController::class)->group(function () {
        Route::get('profile/{id}', 'profile')->name('user.profile')->middleware('user');
    });
});

Route::prefix('admin/')->middleware(['web', 'auth'])->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('dashboard', 'dashboard')->name('admin.dashboard');
    });
    Route::controller(UserController::class)->group(function () {
        Route::get('staffs', 'index')->name('admin.manage.staff')->middleware('admin');
        Route::get('staff/create', 'create')->name('admin.staff.create')->middleware('admin');
        Route::post('staff/create', 'store')->name('admin.staff.save')->middleware('admin');
        Route::get('staff/edit/{id}', 'edit')->name('admin.staff.edit')->middleware('admin');
        Route::put('staff/edit/{id}', 'update')->name('admin.staff.update')->middleware('admin');
        Route::get('staff/delete/{id}', 'destroy')->name('admin.staff.delete')->middleware('admin');
    });
    Route::controller(AdminProfileController::class)->group(function () {
        Route::get('profiles', 'index')->name('admin.manage.profile')->middleware('admin');

        Route::get('plans', 'plans')->name('admin.manage.plans')->middleware('admin');
        Route::get('plan/create', 'createPlan')->name('admin.plan.create')->middleware('admin');
        Route::get('plan/edit/{id}', 'editPlan')->name('admin.plan.edit')->middleware('admin');
        Route::put('plan/edit/{id}', 'updatePlan')->name('admin.plan.update')->middleware('admin');
        Route::get('plan/delete/{id}', 'deletePlan')->name('admin.plan.delete')->middleware('admin');

        Route::get('payments', 'payments')->name('admin.manage.payment')->middleware('admin');
        Route::get('payment/create/{id}', 'createPayment')->name('admin.payment.create')->middleware('admin');
        Route::post('payment/create/{id}', 'savePayment')->name('admin.payment.save')->middleware('admin');
        Route::get('payment/edit/{id}', 'editPayment')->name('admin.payment.edit')->middleware('admin');
        Route::put('payment/edit/{id}', 'updatePayment')->name('admin.payment.update')->middleware('admin');
        Route::get('payment/delete/{id}', 'deletePayment')->name('admin.payment.delete')->middleware('admin');
    });

    Route::prefix('/report')->controller(ReportController::class)->group(function () {
        Route::get('/registration', 'registration')->name('admin.report.registration')->middleware('admin');
        Route::post('/registration', 'registrationFetch')->name('admin.report.registration.fetch')->middleware('admin');
        Route::get('/payment', 'payment')->name('admin.report.payment')->middleware('admin');
        Route::post('/payment', 'paymentFetch')->name('admin.report.payment.fetch')->middleware('admin');
    });
});
