<?php

$hargaAwal = 120000;
$batasDiskon = 100000;
$persentaseDiskon = 0.20;

$hargaAkhir = $hargaAwal;

echo "--- Perhitungan Harga Setelah Diskon ---<br>";
echo "Harga awal produk: Rp " . number_format($hargaAwal, 0, ',', '.') . "<br>";
echo "Batas pembelian untuk diskon (" . ($persentaseDiskon * 100) . "%): Rp " . number_format($batasDiskon, 0, ',', '.') . "<br><br>";

if ($hargaAwal > $batasDiskon) {
    $besaranDiskon = $hargaAwal * $persentaseDiskon;
    
    $hargaAkhir = $hargaAwal - $besaranDiskon;

    echo "Status: Diskon (" . ($persentaseDiskon * 100) . "%) **DITERAPKAN**<br>";
    echo "Besaran diskon: Rp " . number_format($besaranDiskon, 0, ',', '.') . "<br>";
} else {

    echo "Status: Diskon **TIDAK DITERAPKAN** karena harga kurang dari Rp " . number_format($batasDiskon, 0, ',', '.') . "<br>";
}

echo "<br>";
echo "==========================================<br>";
echo "Harga yang harus dibayar: **Rp " . number_format($hargaAkhir, 0, ',', '.') . "**<br>";
echo "==========================================<br>";

?>