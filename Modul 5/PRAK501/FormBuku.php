<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Buku</title>
</head>
<body>
<?php
require 'Model.php';

$edit = isset($_GET['id']);
$buku = $edit ? getBukuById($_GET['id']) : null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'judul' => $_POST['judul'],
        'penulis' => $_POST['penulis'],
        'penerbit' => $_POST['penerbit'],
        'tahun' => $_POST['tahun']
    ];

    if ($edit) {
        updateBuku($buku['id_buku'], $data);
    } else {
        createBuku($data);
    }

    header("Location: Buku.php");
}
?>

<form method="post">
    Judul: <input name="judul" value="<?= $buku['judul_buku'] ?? '' ?>" required> <br>
    Penulis: <input name="penulis" value="<?= $buku['penulis'] ?? '' ?>" required> <br>
    Penerbit: <input name="penerbit" value="<?= $buku['penerbit'] ?? '' ?>" required> <br>
    Tahun Terbit: <input type="number" name="tahun" value="<?= $buku['tahun_terbit'] ?? '' ?>" required> <br>
    <button type="submit"><?= $edit ? 'Update' : 'Tambah' ?></button> <br><br>
</form>

<a href="Buku.php">Kembali ke Tabel Buku</a>
</body>
</html>