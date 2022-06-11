<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\RealestateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\test\ReControler;

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

#Welcome
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

#Login & Register
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/validation', [LoginController::class, 'store'])->name('store');
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

#Users
Route::prefix('/user')->group(function () {
    Route::get('', [UserController::class, 'index'])->name('profile');
    Route::get('/myproperties', [UserController::class, 'myProperties'])->name('my-properties');
    Route::get('/favourite-properties', [UserController::class, 'favourite'])->name('favourite-properties');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/add-property', [UserController::class, 'addProperty'])->middleware(['auth', 'verified'])->name('add-properties');
});

#Properties
Route::prefix('/properties')->group(function () {
    Route::get('', [RealestateController::class, 'properties'])->name('properties');
    Route::get('/tehran', [RealestateController::class, 'tehran'])->name('tehran-properties');
    Route::get('/isfahan', [RealestateController::class, 'isfahan'])->name('isfahan-properties');
    Route::get('/tabriz', [RealestateController::class, 'tabriz'])->name('tabriz-properties');
    Route::get('/shiraz', [RealestateController::class, 'shiraz'])->name('shiraz-properties');
    Route::get('/mashhad', [RealestateController::class, 'mashhad'])->name('mashhad-properties');
    Route::get('/add-property', [RealestateController::class, 'create'])->middleware(['auth', 'verified'])->name('add-property');
    Route::get('/{property}', [RealestateController::class, 'single'])->name('single-property');
    Route::post('/store', [RealestateController::class, 'store'])->name('properties.store');
    Route::get('ad_type/sale', [RealestateController::class, 'sale'])->name('sale');
    Route::get('ad_type/mortage', [RealestateController::class, 'mortage'])->name('mortage');
    Route::get('ad_type/rent', [RealestateController::class, 'rent'])->name('rent');
});

# Restet Password
Route::prefix('/password')->group(function () {
    Route::get('/forgot-password', [ForgotPasswordController::class, 'forgot'])->middleware('guest')->name('password.request');
    Route::post('/forgot-password-email', [ForgotPasswordController::class, 'submission'])->middleware('guest')->name('password.email');
    Route::get('/rest-password/{token}', [ForgotPasswordController::class, 'reset'])->middleware('guest')->name('password.reset');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'update'])->name('password.update');
});

#Email Verification
Route::prefix('/email')->group(function () {
    Route::get('/verify', [EmailVerificationController::class, 'notice'])->name('verification.notice');
    Route::post('/resend', [EmailVerificationController::class, 'send'])->name('verification.send');
    Route::get('/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])->name('verification.verify');
});

# views
Route::view('/404', 'errors.404');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/faq', 'pages.faq')->name('faq');
Route::view('/about', 'pages.about')->name('about');

# Resource Controllers
Route::resources([
    'facilities' => FacilityController::class,
]);
