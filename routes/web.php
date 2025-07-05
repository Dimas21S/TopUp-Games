<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/blog', function () {
    return view('artikel');
});

Route::controller('UserController')->group(function () {
    Route::get('/login', [UserController::class, 'formLogin'])->name('login');
    Route::post('/login', [UserController::class, 'processLogin'])->name('processLogin');

    Route::get('/register', [UserController::class, 'formRegister'])->name('register');
    Route::post('/register', [UserController::class, 'processRegister'])->name('processRegister');
});

Route::controller('PaymentController')->group(function () {
    Route::get('/mobile-legends-diamonds', [PaymentController::class, 'MobileLegendsDiamonds'])->name('mobileLegendsDiamonds');
    // Add other payment routes here
});
