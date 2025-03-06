<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/profile', function () {
    return 'Ini adalah halaman profile';
});

Route::get('/dashboard', function () {
    return 'Ini adalah halaman dashboard';
});
