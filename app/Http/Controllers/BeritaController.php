<?php

namespace App\Http\Controllers;

use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->get();

        return view('berita', [
            'title' => 'Daftar Berita',
            'beritas' => $beritas,
        ]);
    }

    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();

        return view('beritatunggal', [
            'title' => $berita->judul,
            'berita' => $berita,
        ]);
    }

    public function statistik()
    {
        $beritas = Berita::all();

        return view('statistik-berita', [
            'jumlahBerita' => $beritas->count(),
            'daftarJudul' => $beritas->pluck('judul'),
            'beritaTerbaru' => $beritas->sortByDesc('created_at'),
        ]);
    }
}