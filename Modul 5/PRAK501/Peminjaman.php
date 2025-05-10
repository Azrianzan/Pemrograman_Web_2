<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Peminjaman</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }th, td {
            border: 2px solid #000;
            padding: 6px;
            background-color: lightblue;
        }
    </style>
</head>
<body>
<?php
require 'Model.php';
$peminjaman = getPeminjaman()
?>

<table>
    <tr>
        <th>No</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>ID Member</th>
        <th>ID Buku</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($peminjaman as $i => $p): ?>
        <tr>
            <td><?= $i + 1 ?></td>
            <td><?= $p['tgl_pinjam'] ?></td>
            <td><?= $p['tgl_kembali'] ?></td>
            <td><?= $p['id_member'] ?></td>
            <td><?= $p['id_buku'] ?></td>
            <td>
                <a href="FormPeminjaman.php?id=<?= $p['id_peminjaman'] ?>">Edit</a> |
                <a href="Peminjaman.php?delete=<?= $p['id_peminjaman'] ?>" onclick="return confirm('Yakin hapus data?')">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<br><br><br>
<a href="FormPeminjaman.php">Tambah Peminjaman</a>
<br><br><br>
<a href="index.php">Kembali ke Halaman Utama</a>

<?php
if (isset($_GET['delete'])) {
    deletePeminjaman($_GET['delete']);
    header("Location: Peminjaman.php");
}
?>
</body>
</html>