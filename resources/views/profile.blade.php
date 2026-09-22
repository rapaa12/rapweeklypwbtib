<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile - TechInfo</title>

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

<div class="profile">

    <div class="profile-photo">
        TI
    </div>

    <h1>TechInfo</h1>

    <p>
        TechInfo merupakan website sederhana yang dibuat
        untuk memberikan informasi mengenai teknologi
        informasi dan perkembangan teknologi digital.
    </p>

    <br>

    <p>
        Website ini dibuat menggunakan framework Laravel
        dengan Blade sebagai template engine.
    </p>

    <br>

    <p>
        <strong>Bidang:</strong> Teknologi Informasi
    </p>

</div>

<footer>
    <p>© 2026 Teknologi Informasi</p>
</footer>

<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>