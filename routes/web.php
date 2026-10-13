<?php

use Illuminate\Support\Facades\Route;
use App\Models\Berita;

Route::get('/', function () {
    return redirect('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home', [
    "title" => "home"
])->name('home');

Route::get('/berita', function () {
    return view('berita', [
        "title" => "berita",
        "beritas" => Berita::ambilBerita(),
    ]);
})->name('berita');

Route::get('/berita/{slug}', function ($slug) {
    $berita = Berita::getBerita($slug);

    if (!$berita) {
        abort(404);
    }

    return view('beritatunggal', [
        'title' => $berita['judul'],
        'berita' => $berita,
    ]);
})->name('berita.detail');


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

