<?php

$nilaiNumerik = 92;

echo "--- Hasil Penentuan Nilai Huruf ---<br>";

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A<br>";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B<br>";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C<br>";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D<br>";
}

echo "<br>";

$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

echo "--- Hasil Simulasi Waktu Atlet ---<br>";

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.<br>";

echo "<br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

echo "--- Hasil Perhitungan Total Buah ---<br>";

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah<br>";

echo "<br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

echo "--- Hasil Total Skor Ujian ---<br>";

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor<br>";

echo "<br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

echo "--- Hasil Validasi Kelulusan Siswa ---<br>";

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<br>";

?>