<?php

use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::view('/', 'index')->name('welcome');
Route::view('/404', 'errors.404');
Route::prefix('/user')->group(function () {
    Route::get('', [UserController::class, 'index'])->name('profile');
    Route::get('/myproperties', [UserController::class, 'myProperties'])->name('my-properties');
    Route::get('/favourite-properties', [UserController::class, 'favourite'])->name('favourite-properties');
    Route::get('/add-property', [UserController::class, 'addProperty'])->name('add-properties');
});
Route::prefix('/properties')->group(function () {
    Route::get('/', [PropertyController::class, 'properties'])->name('properties');
    Route::get('/single', [PropertyController::class, 'single'])->name('single-property');
    Route::get('/add-property', [PropertyController::class, 'create'])->name('add-property');
});

Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/faq', 'pages.faq')->name('faq');
Route::view('/about', 'pages.about')->name('about');
