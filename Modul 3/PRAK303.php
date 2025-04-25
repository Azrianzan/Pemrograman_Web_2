<!DOCTYPE html>
<html>
<head></head>
<body>
    <form method="post">
        <label>Batas Bawah : </label>
        <input type="number" name="batasBawah">
        <br>
        <label>Batas Atas: </label>
        <input type="number" name="batasAtas">
        <br>
        <button type="submit" name="cetak" value="Cetak">Cetak</button>
    </form>
    <br>

    <?php
    if (isset($_POST['cetak'])) {
        $bawah = $_POST['batasBawah'];
        $atas = $_POST['batasAtas'];

        do {
            if (($bawah + 7) % 5 == 0) {
                echo "<img src='star-images-9441.png' width='20' height='20'>";
                echo "&nbsp";
                $bawah++;
            } else {
                echo $bawah;
                echo "&nbsp";
                $bawah++;
            }
        } while ($bawah <= $atas);
    }
    ?>
</body>
</html>