<?php

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Middleware\EnsureTokenIsValid;

Auth::routes();

Route::middleware([EnsureTokenIsValid::class])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('/profile' , function () {
        return view('profile');
    });

    Route::get('/dashboard' , function () {
        return "ini halaman dashboard";
    });
});
