<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
</head>
<body>
    <h2>Edit Buku</h2>
    <a href="/buku">Kembali</a><br><br>

    <?php if (isset($validation)): ?>
        <div style="color: red;">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form method="post" action="/buku/update/<?= $buku['id'] ?>">
        <label>Judul:</label><br>
        <input type="text" name="judul" value="<?= old('judul', $buku['judul']) ?>"><br><br>

        <label>Penulis:</label><br>
        <input type="text" name="penulis" value="<?= old('penulis', $buku['penulis']) ?>"><br><br>

        <label>Penerbit:</label><br>
        <input type="text" name="penerbit" value="<?= old('penerbit', $buku['penerbit']) ?>"><br><br>

        <label>Tahun Terbit:</label><br>
        <input type="number" name="tahun_terbit" value="<?= old('tahun_terbit', $buku['tahun_terbit']) ?>"><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
