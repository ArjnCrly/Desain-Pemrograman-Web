<?php

$totalKursi = 45;
$kursiTerisi = 28;

$kursiKosong = $totalKursi - $kursiTerisi;

$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "<h2>Perhitungan Persentase Kursi Kosong</h2>";
echo "Total Kursi: {$totalKursi} kursi <br>";
echo "Kursi Terisi: {$kursiTerisi} kursi <br>";
echo "<hr>";
echo "Jumlah Kursi Kosong: {$kursiKosong} kursi <br>";
echo "Persentase Kursi Kosong: " . number_format($persentaseKosong, 2) . "% <br>";
?>