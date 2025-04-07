<!DOCTYPE html>
<html>
<head>
    <title>Daftar Smartphone Samsung</title>
    <style>
        th {
            background-color: white;
        }
    </style>
</head>
<body>
    <table border="1">
        <?php 
            $hp_samsung = array(
                "Samsung Galaxy S22",
                "Samsung Galaxy S22+",
                "Samsung Galaxy A03",
                "Samsung Galaxy Xcover 5"
            );

            echo "<tr><th>Daftar Smartphone Samsung</th></tr>";
            foreach ($hp_samsung as $model) {
                echo "<tr><td>$model</td></tr>";
            }
        ?>
    </table>
   
</body>
</html>