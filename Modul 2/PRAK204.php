<html>
    <head>
    </head>
    <body>
    <?php
        $nilai = "";
        $hasil = "";
        
        if (isset($_POST["konversi"])) {
            $nilai = $_POST["nilai"];
        
            if ($nilai < 10 && $nilai > 0) {
                $hasil = "Satuan";
            } else if ($nilai > 10 && $nilai < 20) {
                $hasil = "Belasan";
            } else if ($nilai == 10 || $nilai >= 20 && $nilai < 100) {
                $hasil = "Puluhan";
            } else if ($nilai >= 100 && $nilai < 1000) {
                $hasil = "Ratusan";
            } else if ($nilai == 0) {
                $hasil = "Nol";
            } else if ($nilai < 0) {
                $hasil = "Anda Menginput Kurang dari Limit Bilangan";
            } else {
                $hasil = "Anda Menginput Melebihi Limit Bilangan";
            }
        }
        ?>

        <form action="" method="post">
            Nilai : 
            <input type="number" name="nilai" value="<?php echo htmlspecialchars($nilai); ?>">
            <br>
            <button type="submit" name="konversi">Konversi</button>
        </form>
        
        <?php
        if (!empty($hasil)) {
            echo "<h1>Hasil: $hasil</h1>";
        }
        ?>
    </body>
</html>
