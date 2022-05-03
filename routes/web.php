<?php

use App\Http\Controllers\RealestateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
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

Route::view('/404', 'errors.404');
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/validation', [LoginController::class, 'store'])->name('store');
Route::put('/user-update', [UserController::class, 'update'])->name('user.update');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::prefix('/user')->group(function () {
    Route::get('', [UserController::class, 'index'])->name('profile');
    Route::get('/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::get('/myproperties', [UserController::class, 'myProperties'])->name('my-properties');
    Route::get('/favourite-properties', [UserController::class, 'favourite'])->name('favourite-properties');
    Route::get('/add-property', [UserController::class, 'addProperty'])->name('add-properties');
});

Route::prefix('/properties')->group(function () {
    Route::get('', [RealestateController::class, 'properties'])->name('properties');
    Route::get('/add-property', [RealestateController::class, 'create'])->name('add-property');
    Route::get('/single', [RealestateController::class, 'single'])->name('single-property');
    Route::post('/store', [RealestateController::class, 'store'])->name('properties.store');
});

Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/faq', 'pages.faq')->name('faq');
Route::view('/about', 'pages.about')->name('about');

Route::resources([
    'tests' => ReControler::class,
]);