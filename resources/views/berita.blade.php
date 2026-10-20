@extends('layouts.main')

@section('content')

<div class="container mt-5">

    <h1 class="mb-4">Daftar Berita</h1>

    @forelse ($beritas as $berita)

        <article class="mb-4">

            <h2>
                <a href="{{ route('berita.detail', ['slug' => $berita->slug]) }}">
                    {{ $berita->judul }}
                </a>
            </h2>

            <h5>
                Penulis: {{ $berita->penulis }}
            </h5>

            <p>
                {{ \Illuminate\Support\Str::limit($berita->konten, 150) }}
            </p>

            <a href="{{ route('berita.detail', ['slug' => $berita->slug]) }}">
                Baca selengkapnya →
            </a>

            <hr>

        </article>

    @empty

        <p>Belum ada berita yang tersedia.</p>

    @endforelse

</div>

@endsection