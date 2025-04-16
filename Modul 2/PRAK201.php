<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form action="" method="post">
            Nama: 1 <input type="text" name="nama1"> <br>
            Nama: 2 <input type="text" name="nama2"> <br>
            Nama: 3 <input type="text" name="nama3"> <br>
            <button type="submit" name="urutkan">urutkan</button>
        </form>

        <?php
        if (isset($_POST["urutkan"])) {
            $nama1 = $_POST["nama1"];
            $nama2 = $_POST["nama2"];
            $nama3 = $_POST["nama3"];

            $namaNama = array($nama1, $nama2, $nama3);
            sort($namaNama);
            foreach ($namaNama as $nama){
                echo "$nama <br>";
            }
        }
        ?>
    </body>
</html>