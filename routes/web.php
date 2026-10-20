<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Models\Berita;

Route::get('/', function () {
    return redirect('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home', [
    "title" => "home"
])->name('home');

Route::get('/berita', [BeritaController::class, 'index'])
    ->name('berita');

Route::get('/berita/{slug}', [BeritaController::class, 'show'])
    ->name('berita.detail');

Route::get('/statistik-berita', [BeritaController::class, 'statistik'])
    ->name('berita.statistik');

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

