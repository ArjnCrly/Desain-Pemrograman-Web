<?php


$poin = 650;
$batasHadiah = 500;

echo "Total skor pemain adalah: " . $poin . "<br>";

$statusHadiah = ($poin > $batasHadiah) ? "YA" : "TIDAK";

echo "Apakah pemain mendapatkan hadiah tambahan? " . $statusHadiah . "<br>";

echo "<br>";

$poinKedua = 480;
$statusHadiahKedua = ($poinKedua > $batasHadiah) ? "YA" : "TIDAK";

echo "--- Contoh Kedua (Skor 480) ---<br>";
echo "Total skor pemain adalah: " . $poinKedua . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . $statusHadiahKedua . "<br>";

?>