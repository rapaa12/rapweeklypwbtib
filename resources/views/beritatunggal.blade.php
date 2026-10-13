@extends('layouts.main')

@section('content')

<div class="container mt-5">

    <article>

        <h1 class="text-center mb-3">
            {{ $berita['judul'] }}
        </h1>

        <p class="text-center text-muted">
            Ditulis oleh {{ $berita['penulis'] }}
        </p>

        <hr>

        <div class="text-justify">
            <p>{{ $berita['konten'] }}</p>
        </div>

        <hr>

        <a href="{{ route('berita') }}"> ← Kembali ke Daftar Berita
        </a>

    </article>

</div>

@endsection