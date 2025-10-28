<?php

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$jumlahTotalSiswa = count($nilaiSiswa);
$jumlahDiabaikan = 2; 
echo "--- Penghitungan Nilai Rata-rata Setelah Pengabaian ---<br>";
echo "Daftar nilai awal (" . $jumlahTotalSiswa . " siswa): " . implode(", ", $nilaiSiswa) . "<br>";


sort($nilaiSiswa);
echo "Daftar nilai setelah diurutkan: " . implode(", ", $nilaiSiswa) . "<br>";

$nilaiTersisa = array_slice($nilaiSiswa, $jumlahDiabaikan);


$jumlahSiswaValid = $jumlahTotalSiswa - (2 * $jumlahDiabaikan);
$nilaiValid = array_slice($nilaiTersisa, 0, $jumlahSiswaValid);

echo "Dua nilai terendah yang diabaikan: " . implode(", ", array_slice($nilaiSiswa, 0, $jumlahDiabaikan)) . "<br>";
echo "Dua nilai tertinggi yang diabaikan: " . implode(", ", array_slice($nilaiSiswa, -$jumlahDiabaikan)) . "<br>";
echo "Nilai yang digunakan untuk perhitungan (" . $jumlahSiswaValid . " siswa): " . implode(", ", $nilaiValid) . "<br>";


$totalNilaiValid = 0;
foreach ($nilaiValid as $nilai) {
    $totalNilaiValid += $nilai;
}


$rataRata = $totalNilaiValid / $jumlahSiswaValid;

echo "<br>";
echo "Total nilai yang digunakan: " . $totalNilaiValid . "<br>";
echo "Jumlah siswa yang dihitung: " . $jumlahSiswaValid . "<br>";
echo "Nilai rata-rata yang digunakan: " . number_format($rataRata, 2) . "<br>";

?>