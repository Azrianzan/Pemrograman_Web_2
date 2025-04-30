<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th {
            background-color: #C0C0C0;
        }
    </style>
</head>
<body>
    <?php
    $data = [
        [
            "nama" => "Ridho",
            "matkul" => [
                ["nama" => "Pemrograman I", "sks" => 2],
                ["nama" => "Praktikum Pemrograman I", "sks" => 1],
                ["nama" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
                ["nama" => "Arsitektur Komputer", "sks" => 3]
            ]
        ],
        [
            "nama" => "Ratna",
            "matkul" => [
                ["nama" => "Basis Data I", "sks" => 2],
                ["nama" => "Praktikum Basis Data I", "sks" => 1],
                ["nama" => "Kalkulus", "sks" => 3]
            ]
        ],
        [
            "nama" => "Tono",
            "matkul" => [
                ["nama" => "Rekayasa Perangkat Lunak", "sks" => 3],
                ["nama" => "Analisis dan Perancangan Sistem", "sks" => 3],
                ["nama" => "Komputasi Awan", "sks" => 3],
                ["nama" => "Kecerdasan Bisnis", "sks" => 3]
            ]
        ]
    ];

    echo "<table cellpadding='5'>";
    echo "<tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah Diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>";
    
    $no = 1;
    foreach ($data as $mahasiswa) {
        $totalSKS = 0;
        foreach ($mahasiswa['matkul'] as $mk) {
            $totalSKS += $mk['sks'];
        }

        $rowspan = count($mahasiswa['matkul']);
        if ($totalSKS < 7) {
            $keterangan = "Revisi KRS";
            $warna = "red";
        } else {
            $keterangan = "Tidak Revisi";
            $warna = "green";
        }

        $barisPertama = true;
        foreach ($mahasiswa['matkul'] as $matkul) {
            echo "<tr>";
            if ($barisPertama) {
                echo "<td>$no</td>";
            } else {
                echo "<td></td>";
            }

            if ($barisPertama) {
                echo "<td>{$mahasiswa['nama']}</td>";
            } else {
                echo "<td></td>";
            }

            echo "<td>{$matkul['nama']}</td>";
            echo "<td>{$matkul['sks']}</td>";
            
            if ($barisPertama) {
                echo "<td>$totalSKS</td>";
            } else {
                echo "<td></td>";
            }

            if ($barisPertama) {
                echo "<td style='background-color:$warna;'>$keterangan</td>";
            } else {
                echo "<td></td>";
            }
            echo "</tr>";
            $barisPertama = false;
        }
        $no++;
    }
    echo "</table>";
    ?>
</body>
</html>