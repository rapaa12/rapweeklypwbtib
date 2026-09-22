<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home - TechInfo</title>

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

<section class="hero">

    <h1>Selamat Datang di TechInfo</h1>

    <p>
        Website sederhana tentang teknologi informasi
        dan perkembangan teknologi digital.
    </p>

    <a href="{{ route('tentang') }}" class="button">
        Pelajari Lebih Lanjut
    </a>

</section>

<footer>
    <p>© 2026 Teknologi Informasi</p>
</footer>

<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>