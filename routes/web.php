<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomPageController;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\HomeController;

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

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');

// ---------- GLOBAL ROUTES ---------- //
Route::get('goback', [GlobalController::class, 'goBack'])->name('goback');

// ---------- USER ROUTES ----------- //
Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth']], function() {
    Route::get('dashboard', [HomeController::class, 'index'])->name('home');
});

// ---------- ADMIN ROUTES ---------- //
Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth']], function() {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

// ---------- CUSTOM PAGES ROUTES ---------- //
Route::group(['prefix' => 'page', 'middleware' => ['auth']], function() {
    Route::get('restricted', [CustomPageController::class, 'restricted'])->name('page.restricted');
});
