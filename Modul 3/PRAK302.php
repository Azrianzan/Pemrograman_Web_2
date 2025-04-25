<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form method="post">
            <label>Tinggi : </label>
            <input type="number" name="tinggi" required>
            <br>
            <label>Alamat Gambar : </label>
            <input type="text" name="url" required>
            <br>
            <button type="submit" name="cetak" value="Cetak">Cetak</button>
        </form>
        <br>

        <?php
        if (isset($_POST['cetak'])) {
            $tinggi = $_POST['tinggi'];
            $link = $_POST['url'];
            $space = 0;
    
            while ($tinggi != 0) {
                $j = 1;
                if ($space > 0){
                    for ($x = $space; $x !=0; $x--){
                        echo "&nbsp&nbsp&nbsp&nbsp&nbsp";
                    }
                }
                while ($j <= $tinggi){
                    echo "<img src='$link' width='20' height='20';>";
                    $j++;
                }
                echo "<br>";
                $tinggi--;
                $space++;
            }
        }
        ?>
    </body>
</html>