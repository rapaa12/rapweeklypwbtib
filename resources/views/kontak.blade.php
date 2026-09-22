<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kontak - TechInfo</title>

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

<div class="form-box">

    <h1>Hubungi Kami</h1>

    <form id="contactForm">

        <label>Nama</label>

        <input
            type="text"
            placeholder="Masukkan nama"
            required
        >

        <label>Email</label>

        <input
            type="email"
            placeholder="Masukkan email"
            required
        >

        <label>Pesan</label>

        <textarea
            placeholder="Masukkan pesan"
            required
        ></textarea>

        <button type="submit" class="button">
            Kirim Pesan
        </button>

    </form>

</div>

<footer>
    <p>© 2026 Teknologi Informasi</p>
</footer>

<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>