<html>
    <head>
    </head>
    <body>
    <?php
        $suhu = "";
        $hasil = "";
        $satuanHasil = "";
        
        if (isset($_POST["konversi"])) {
            $suhu = $_POST["suhu"];
            $dari = $_POST["dari"];
            $ke = $_POST["ke"];
        
            switch ($dari) {
                case "celcius":
                    $celcius = $suhu;
                    break;
                case "fahrenheit":
                    $celcius = ($suhu - 32) * 5/9;
                    break;
                case "rheamur":
                    $celcius = $suhu * 5/4;
                    break;
                case "kelvin":
                    $celcius = $suhu - 273.15;
                    break;
            }

            switch ($ke) {
                case "celcius":
                    $hasil = $celcius;
                    $satuanHasil = "°C";
                    break;
                case "fahrenheit":
                    $hasil = ($celcius * 9/5) + 32;
                    $satuanHasil = "°F";
                    break;
                case "rheamur":
                    $hasil = $celcius * 4/5;
                    $satuanHasil = "°Re";
                    break;
                case "kelvin":
                    $hasil = $celcius + 273.15;
                    $satuanHasil = "K";
                    break;
            }
        
            $hasil = round($hasil, 1);
        }
        ?>

        <form action="" method="post">
            Nilai : 
            <input type="number" name="suhu" value="<?php echo htmlspecialchars($suhu); ?>">
            <br>
            Dari :
            <br>
            <input type="radio" name="dari" value="celcius">Celcius
            <br>
            <input type="radio" name="dari" value="fahrenheit">Fahrenheit
            <br>
            <input type="radio" name="dari" value="rheamur">Rheamur
            <br>
            <input type="radio" name="dari" value="kelvin">Kelvin
            <br>
            Ke :
            <br>
            <input type="radio" name="ke" value="celcius">Celcius
            <br>
            <input type="radio" name="ke" value="fahrenheit">Fahrenheit
            <br>
            <input type="radio" name="ke" value="rheamur">Rheamur
            <br>
            <input type="radio" name="ke" value="kelvin">Kelvin
            <br>

            <button type="submit" name="konversi">Konversi</button>
        </form>
        
        <?php
        if (!empty($hasil)) {
            echo "<h1>Hasil Konversi: $hasil $satuanHasil</h1>";
        }
        ?>
    </body>
</html>