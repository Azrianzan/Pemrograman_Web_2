<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f4f8;
        text-align: center;
        padding: 20px;
    }

    nav {
        margin-bottom: 20px;
    }

    nav a {
        text-decoration: none;
        color: #007BFF;
        margin: 0 10px;
        font-weight: bold;
    }

    h1 {
        color: #333;
    }

    p {
        font-size: 18px;
        color: #555;
    }
</style>

<nav>
    <a href="<?= base_url('/') ?>">Beranda</a> |
    <a href="<?= base_url('/beranda/profil') ?>">Profil</a>
</nav>
<h1>Halaman Beranda</h1>
<p><b>Nama:</b> <?= esc($nama)?></p>
<p><b>NIM: </b> <?= esc($nim)?></p>