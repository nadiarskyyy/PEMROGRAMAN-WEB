<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
 return view('index');
});

Route::get('/home', function () {
 return view('home');
});

Route::get('/produk', function () {
 return view('produk');
});

Route::get('/about', function () {
 return view('about');
});

Route::get('/halo', function () {
 return 'Halo Laravel!';
});