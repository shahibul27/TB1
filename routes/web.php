<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/tentang-kami', function () {
    return view('tentangkami');
});

Route::get('/artikel', function () {
    return view('artikel');
});