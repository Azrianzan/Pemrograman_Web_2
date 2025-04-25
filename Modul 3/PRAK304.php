<!DOCTYPE html>
<html>
<head></head>
<body>
    <form method="post">
        <label>Jumlah Bintang : </label>
        <input type="number" name="jumlahBintang">
        <br>
        <button type="submit" name="kirim" value="Kirim">Submit</button>
    </form>
    <br>
    <br>

    <?php
     $jumlahBintang = 0;

     if (isset($_POST['kirim'])) {
         $jumlahBintang = (int) $_POST['jumlahBintang'];
     } elseif (isset($_POST['tambah'])) {
         $jumlahBintang = (int) $_POST['jumlahBintang'] + 1;
     } elseif (isset($_POST['kurang'])) {
         $jumlahBintang = (int) $_POST['jumlahBintang'] - 1;
     }
 
     if ($jumlahBintang > 0) {
         function cetakBintang($jumlah) {
             echo "Jumlah bintang $jumlah<br><br>";
             for ($x = 0; $x < $jumlah; $x++) {
                echo "<img src='star-images-9441.png' width='50' height='50'>";
             }
             echo "<br><br>";
         }
 
         cetakBintang($jumlahBintang);
 
         echo "
         <form method='post'>
             <input type='hidden' name='jumlahBintang' value='$jumlahBintang'>
             <button type='submit' name='tambah'>Tambah</button>
             <button type='submit' name='kurang'>Kurang</button>
         </form>";
     }
    ?>
</body>
</html>