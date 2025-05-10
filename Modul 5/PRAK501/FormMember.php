<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Member</title>
</head>
<body>
<?php
require 'Model.php';

$edit = isset($_GET['id']);
$member = $edit ? getMemberById($_GET['id']) : null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'nama' => $_POST['nama'],
        'nomor' => $_POST['nomor'],
        'alamat' => $_POST['alamat'],
        'tgl_daftar' => $_POST['tgl_daftar'],
        'tgl_bayar' => $_POST['tgl_bayar']
    ];

    if ($edit) {
        updateMember($member['id_member'], $data);
    } else {
        createMember($data);
    }

    header("Location: Member.php");
}
?>

<form method="post">
    Nama: <input name="nama" value="<?= $member['nama_member'] ?? '' ?>" required> <br>
    Nomor: <input name="nomor" value="<?= $member['nomor_member'] ?? '' ?>" required> <br>
    Alamat: <textarea required name="alamat"><?= $member['alamat'] ?? '' ?></textarea> <br>
    Tanggal Mendaftar: <input type="datetime-local" name="tgl_daftar" value="<?= isset($member['tgl_mendaftar']) ? date('Y-m-d\TH:i', strtotime($member['tgl_mendaftar'])) : '' ?>" required> <br>
    Tanggal Terakhir Bayar: <input type="date" name="tgl_bayar" value="<?= $member['tgl_terakhir_bayar'] ?? '' ?>" required> <br>
    <button type="submit"><?= $edit ? 'Update' : 'Tambah' ?></button> <br><br>
</form>

<a href="Member.php">Kembali ke Tabel Member</a>
</body>
</html>