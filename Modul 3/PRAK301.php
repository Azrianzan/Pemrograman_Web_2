<!DOCTYPE html>
<html>
    <head>
    </head>
<body>
    <form method="post">
        <label>Jumlah Peserta : </label>
        <input type="number" name="jumlah" required>
        <br>
        <button type="submit" name="cetak" value="Cetak">Cetak</button>
    </form>

    <?php
    if (isset($_POST['cetak'])) {
        $jumlah = $_POST['jumlah'];
        $i = 1;

        while ($i <= $jumlah) {
            if ($i % 2 == 1) {
                echo "<h1 style='color:red;'>Peserta ke-$i</h1>";
            } else {
                echo "<h1 style='color:green;'>Peserta ke-$i</h1>";
            }
            $i++;
        }
    }
    ?>
</body>
</html>
