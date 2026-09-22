<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tentang - TechInfo</title>

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

    <h1>Tentang TechInfo</h1>

    <div class="card">

        <p>
             TechInfo adalah website sederhana yang membahas
            perkembangan teknologi informasi dalam kehidupan
            sehari-hari
            Teknologi informasi memiliki peran penting dalam
            membantu manusia berkomunikasi, bekerja, belajar,
            dan mendapatkan informasi dengan lebih cepat.
        </p>

    </div>

</div>

<footer>
    <p>© 2026 Teknologi Informasi</p>
</footer>

<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>