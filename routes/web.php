<?php

use Illuminate\Support\Facades\Route;

// Rute untuk halaman utama (Home)
Route::get('/', function () {
    return view('home'); // Pastikan ada file home.blade.php di resources/views
});

// Rute untuk halaman "Tentang Kami"
Route::get('/tentangKami', function () {
    return view('tentangKami'); // Pastikan ada file tentangKami.blade.php di resources/views
});



// Rute untuk halaman "Artikel"
Route::get('/artikel', function () {
    return view('artikel'); // Ganti dengan nama file view yang sesuai
});

// Rute untuk halaman "Hubungi Kami"
Route::get('/hubungi-kami', function () {
    return view('hubungiKami'); // Ganti dengan nama file view yang sesuai
});
