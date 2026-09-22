<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Layanan - TechInfo</title>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>

<nav class="navbar">

    <div class="logo">
        TechInfo
    </div>

    <div class="nav-menu">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('tentang') }}">about</a>
        <a href="{{ route('layanan') }}">Layanan</a>
        <a href="{{ route('profile') }}">Profile</a>
        <a href="{{ route('kontak') }}">contact</a>
    </div>

</nav>

<div class="container">

    <h1>Layanan Kami</h1>

    <div class="cards">

        <div class="card">
            <h2>Website</h2>

            <p>
                Membuat website sederhana untuk kebutuhan
                informasi dan bisnis.
            </p>
        </div>

        <div class="card">
            <h2>Teknologi</h2>

            <p>
                Memberikan informasi mengenai perkembangan
                teknologi digital.
            </p>
        </div>

        <div class="card">
            <h2>Konsultasi</h2>

            <p>
                Membantu memberikan solusi sederhana
                mengenai teknologi informasi.
            </p>
        </div>

    </div>

</div>

<footer>
    <p>© 2026 Teknologi Informasi</p>
</footer>

<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>