<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
})->name('home', [
    "title" => "home"
]);

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/profile', function () {
    return view('profile', [
        "nama" => "Muhammad Raihan Rafananda",
        "nim" => "13242520056",
        "prodi" => "Teknologi Informasi"
    ]);
})->name('profile');

