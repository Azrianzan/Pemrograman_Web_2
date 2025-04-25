<!DOCTYPE html>
<html>
<head></head>
<body>
    <form method="post">
        <input type="text" name="inputString">
        <button type="submit" name="kirim" value="Kirim">submit</button>
    </form>
    <br>

    <?php
    if (isset($_POST['kirim'])) {
        $string = $_POST['inputString'];

        echo "<h3>Input:</h3>";
        echo $string;
        echo "<h3>Output:</h3>";
        $len = strlen($string);

        for ($i = 0; $i < $len; $i++) {
            $char = $string[$i];
            echo strtoupper($char);
            for ($j = 1; $j < $len; $j++) {
                echo strtolower($char);
            }
        }
    }
    ?>
</body>
</html>