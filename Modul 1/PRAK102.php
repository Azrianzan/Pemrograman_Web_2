<?php
$jari_jari = 4.2;
$tinggi = 5.4;

$volume_kerucut = (1/3) * pi() * pow($jari_jari, 2) * $tinggi;

echo "Volume Kerucut: " . number_format($volume_kerucut, 3) . "m3<br>";
?>