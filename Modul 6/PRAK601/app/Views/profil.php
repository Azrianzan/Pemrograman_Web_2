<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f4f8;
        text-align: center;
        padding: 20px;
    }

    h1 {
        color: #444;
        margin-bottom: 20px;
    }

    p {
        font-size: 18px;
        color: #444;
    }

    a {
        display: inline-block;
        margin-top: 20px;
        text-decoration: none;
        background-color: #007BFF;
        color: white;
        padding: 8px 16px;
        border-radius: 5px;
    }

    a:hover {
        background-color: #0056b3;
    }
</style>

<h1>Halaman Profil</h1>
<img src="<?= base_url($gambar) ?>" width="200">
<p><b>Nama:</b> <?= esc($nama)?></p>
<p><b>NIM:</b> <?= esc($nim)?></p>
<p><b>Asal Prodi:</b> <?= esc($prodi)?> </p>
<p><b>Email:</b> <?= esc($email)?> </p>
<p><b>Hobi:</b> <?= esc($hobi)?> </p>
<p><b>Skill:</b> <?= esc($skill)?> </p>
<p><b>Domisili:</b> <?= esc($domisili)?> </p>

<br> <a href="<?= base_url('/') ?>">Kembali</a>