<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
    $data = [
        ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
        ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
        ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
        ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75],
        ];

        echo "<table cellpadding='5'>";
        echo "<tr>
                <th style='background-color: #C0C0C0;'>Nama</th>
                <th style='background-color: #C0C0C0;'>NIM</th>
                <th style='background-color: #C0C0C0;'>Nilai UTS</th>
                <th style='background-color: #C0C0C0;'>Nilai UAS</th>
                <th style='background-color: #C0C0C0;'>Nilai Akhir</th>
                <th style='background-color: #C0C0C0;'>Huruf</th>
            </tr>";

        foreach ($data as $mhs) {
            $nilaiAkhir = 0.4 * $mhs['uts'] + 0.6 * $mhs['uas'];
            if ($nilaiAkhir >= 80) {
                $huruf = "A";
            } elseif ($nilaiAkhir >= 70) {
                $huruf = "B";
            } elseif ($nilaiAkhir >= 60) {
                $huruf = "C";
            } elseif ($nilaiAkhir >= 50) {
                $huruf = "D";
            } else {
                $huruf = "E";
            }

            echo "<tr>
                <td>{$mhs['nama']}</td>
                <td>{$mhs['nim']}</td>
                <td>{$mhs['uts']}</td>
                <td>{$mhs['uas']}</td>
                <td>" . number_format($nilaiAkhir, 1) . "</td>
                <td>$huruf</td>
            </tr>";
        }
        echo "</table>";
    ?>
</body>
</html>