<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/about', function () {
    return view('about');
});