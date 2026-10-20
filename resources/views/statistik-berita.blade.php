@extends('layouts.main')

@section('content')

<div class="container mt-5">

    <h1>Statistik Berita</h1>

    <p>
        Jumlah berita:
        <strong>{{ $jumlahBerita }}</strong>
    </p>

    <h3>Daftar Judul Berita</h3>

    <ul>
        @forelse ($daftarJudul as $judul)
            <li>{{ $judul }}</li>
        @empty
            <li>Belum ada berita.</li>
        @endforelse
    </ul>

    <h3>Berita Berdasarkan Waktu Terbaru</h3>

    @forelse ($beritaTerbaru as $berita)
        <p>{{ $berita->judul }}</p>
    @empty
        <p>Belum ada berita.</p>
    @endforelse

</div>

@endsection