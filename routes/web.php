<?php

use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(Homecontroller::class)->group(function () {
    Route::post('/login', 'login')->name('login');
    Route::get('/home/{nama}', 'home')->name('home');
});