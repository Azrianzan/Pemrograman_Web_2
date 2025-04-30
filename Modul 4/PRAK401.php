<!DOCTYPE html>
<html>
<head></head>
<body>
    <form method="post">
        <label>Panjang : </label>
        <input type="number" name="panjang">
        <br>
        <label>Lebar : </label>
        <input type="number" name="lebar">
        <br>
        <label>Nilai : </label>
        <input type="text" name="nilai">
        <br>
        <button type="submit" name="cetak" value="Cetak">Cetak</button>
    </form>
    <br>

    <?php
    if (isset($_POST['cetak'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $nilaiInput = $_POST['nilai'];

        $nilaiArray = explode(" ", trim($nilaiInput));

        if (count($nilaiArray) != $panjang * $lebar) {
            echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        } else {
            echo "<table border='1'>";
            $index = 0;
            for ($i = 0; $i < $panjang; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $lebar; $j++) {
                    echo "<td>" . $nilaiArray[$index] . "</td>";
                    $index++;
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    ?>
</body>
</html>