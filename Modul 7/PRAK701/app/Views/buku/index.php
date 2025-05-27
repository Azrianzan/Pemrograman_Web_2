<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
</head>
<body>
    <h2>Daftar Buku</h2>
    <p>Halo, <?= session()->get('username') ?> | <a href="/logout">Logout</a></p>
    <a href="/buku/create">Tambah Buku</a><br><br>

    <table border="1" cellpadding="8">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($buku as $row): ?>
        <tr>
            <td><?= esc($row['judul']) ?></td>
            <td><?= esc($row['penulis']) ?></td>
            <td><?= esc($row['penerbit']) ?></td>
            <td><?= esc($row['tahun_terbit']) ?></td>
            <td>
                <a href="/buku/edit/<?= $row['id'] ?>">Edit</a> |
                <a href="/buku/delete/<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
