<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Peminjaman</title>
</head>
<body>
<?php
require 'Model.php';

$edit = isset($_GET['id']);
$peminjaman = $edit ? getPeminjamanById($_GET['id']) : null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'tgl_pinjam' => $_POST['tgl_pinjam'],
        'tgl_kembali' => $_POST['tgl_kembali'],
        'id_member' => $_POST['id_member'],
        'id_buku' => $_POST['id_buku']
    ];

    if ($edit) {
        updatePeminjaman($peminjaman['id_peminjaman'], $data);
    } else {
        createPeminjaman($data);
    }

    header("Location: Peminjaman.php");
}
?>

<form method="post">
    Tanggal Pinjam: <input type="datetime-local" name="tgl_pinjam" value="<?= isset($peminjaman['tgl_pinjam']) ? date('Y-m-d\TH:i', strtotime($peminjaman['tgl_pinjam'])) : '' ?>" required> <br>
    Tanggal Kembali: <input type="date" name="tgl_kembali" value="<?= $peminjaman['tgl_kembali'] ?? '' ?>" required> <br>
    ID Member: <input name="id_member" value="<?= $peminjaman['id_member'] ?? '' ?>" required> <br>
    ID Buku: <input name="id_buku" value="<?= $peminjaman['id_buku'] ?? '' ?>" required> <br>
    <button type="submit"><?= $edit ? 'Update' : 'Tambah' ?></button> <br><br>
</form>

<a href="Peminjaman.php">Kembali ke Tabel Peminjaman</a>
</body>
</html>