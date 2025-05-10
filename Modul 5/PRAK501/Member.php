<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Member</title>
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
$members = getMember();
?>

<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Nomor</th>
        <th>Alamat</th>
        <th>Tanggal Daftar</th>
        <th>Tanggal Terakhir Bayar</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($members as $m): ?>
        <tr>
            <td><?= $m['id_member'] ?></td>
            <td><?= $m['nama_member'] ?></td>
            <td><?= $m['nomor_member'] ?></td>
            <td><?= $m['alamat']?> </td>
            <td><?= $m['tgl_mendaftar'] ?></td>
            <td><?= $m['tgl_terakhir_bayar']?></td>
            <td>
            <a href="FormMember.php?id=<?= $m['id_member'] ?>">Edit</a> |
            <a href="Member.php?delete=<?= $m['id_member'] ?>" onclick="return confirm('Hapus?')">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<br><br><br>
<a href="FormMember.php">Tambah Member</a>
<br><br><br>
<a href="index.php">Kembali ke Halaman Utama</a>

<?php
if (isset($_GET['delete'])) {
    deleteMember($_GET['delete']);
    header("Location: Member.php");
}
?>
</body>
</html>