<!DOCTYPE html>
<html>
<head>
    <title>Daftar Smartphone Samsung</title>
    <style>
        #judul-tabel {
            background-color: red;
        }
        td {
            background-color: white;
        }
    </style>
</head>
<body>
    <table border="1">
        <?php
        $hp_samsung = array(
            "model1" => "Samsung Galaxy S22",
            "model2" => "Samsung Galaxy S22+",
            "model3" => "Samsung Galaxy A03",
            "model4" => "Samsung Galaxy Xcover 5"
        );
        
        echo "<tr id='judul-tabel'><th><h2>Daftar Smartphone Samsung</h2></th></tr>";
        foreach ($hp_samsung as $key => $model) {
            echo "<tr><td>$model</td></tr>";
        }
        ?>
    </table>
</body>
</html>
