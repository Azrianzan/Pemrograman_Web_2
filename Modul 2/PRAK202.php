<html>
    <head>
        <style>
            .error {
                color: red;
                font-size: 1em;
            }
        </style>
    </head>
    <body>
    <?php
        $nama = $nim = $jenis_kelamin = '';
        $namaError = $nimError = $genderError = '';
        $showOutput = false;
        
        if (isset($_POST["kirim"])) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["nama"])) {
                $namaError = "nama tidak boleh kosong";
                } else {
                $nama = test_input($_POST["nama"]);
                }

                if (empty($_POST["nim"])) {
                    $nimError = "nim tidak boleh kosong";
                } else {
                    $nim = test_input($_POST["nim"]);
                }

                if (empty($_POST["gender"])) {
                $genderError = "jenis kelamin tidak boleh kosong";
                } else {
                $gender = test_input($_POST["gender"]);
                }

                if (empty($namaError) && empty($nimError) && empty($genderError)) {
                    $showOutput = true;
                }
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            Nama: 
            <input type="text" name="nama" value="<?php echo $nama;?>">
            <span class="error">* <?php echo $namaError;?></span>
            <br>
            
            Nim: 
            <input type="text" name="nim" value="<?php echo $nim;?>">
            <span class="error">* <?php echo $nimError;?></span>
            <br>
            
            Jenis Kelamin: <span class="error">* <?php echo $genderError;?></span>
            <br> 
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="laki-;aki") echo "checked";?> value="laki-laki">Laki-Laki
            <br>
            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="perempuan") echo "checked";?> value="perempuan">Perempuan
            <br>

            <button type="submit" name="kirim">Submit</button>
        </form>
        
        <?php
        if ($showOutput){
            echo "<h1>Output:</h1>";
            echo $nama;
            echo "<br>";
            echo $nim;
            echo "<br>";
            echo $gender;
        }
        ?>
    </body>
</html>