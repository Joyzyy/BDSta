<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\CheckoutController;

/* Auth */
Route::get('/register', [RegisterController::class, 'Register'])->name('register');
Route::post('/register', [RegisterController::class, 'doRegister']);

Route::get('/login', [LoginController::class, 'Login'])->name('login');
Route::post('/login', [LoginController::class, 'doLogin']);

Route::get('/logout', [LogoutController::class, 'doLogout'])->name('logout');

/* Sectii */
Route::get('/barbati', [ProductController::class, 'viewProduct'])->name('barbati');

Route::get('/femei', [ProductController::class, 'viewProduct'])->name('femei');

Route::get('/accesorii', [ProductController::class, 'viewProduct'])->name('accesorii');

Route::get('/parfumuri', [ProductController::class, 'viewProduct'])->name('parfumuri');

Route::get('produs/{name}', [ProductController::class, 'doProduct'])->name('produs');


/* Cos */
Route::get('/cos', [ProductController::class, 'cartItems'])->name('cos');

Route::post('/adauga_in_cos', [ProductController::class, 'addToCart'])->name('adauga_in_cos');

/* checkout */
Route::get('/checkout', [ProductController::class, 'checkout'])->name('checkout');
Route::post('/sterge_din_cos/{cartid}', [ProductController::class, 'removeFromCart'])->name('sterge_din_cos');

Route::get('/after-checkout', function() {
    return view('categorii.after_checkout');
})->name('after-checkout');

Route::get('/after-checkout', [CheckoutController::class, 'after_checkout'])->name('after-checkout');
Route::post('/after-checkout', [CheckoutController::class, 'backend']);

Route::get('/', [HomeController::class, 'viewHome'])->name('/');

// panou administrator
Route::get('/panou_admin', [AdministratorController::class, 'viewAdmin'])->name('panou_admin');