<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Buku</title>
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
$buku = getBuku();
?>

<table>
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($buku as $i => $b): ?>
        <tr>
            <td><?= $i + 1 ?></td>
            <td><?= $b['judul_buku'] ?></td>
            <td><?= $b['penulis'] ?></td>
            <td><?= $b['penerbit'] ?></td>
            <td><?= $b['tahun_terbit'] ?></td>
            <td>
                <a href="FormBuku.php?id=<?= $b['id_buku'] ?>">Edit</a> |
                <a href="Buku.php?delete=<?= $b['id_buku'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<br><br><br>
<a href="FormBuku.php">Tambah Buku</a>
<br><br><br>
<a href="index.php">Kembali ke Halaman Utama</a>

<?php
if (isset($_GET['delete'])) {
    deleteBuku($_GET['delete']);
    header("Location: Buku.php");
}
?>
</body>
</html>