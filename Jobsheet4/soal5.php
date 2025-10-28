<?php

$daftarNilaiSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$totalNilai = 0;
$jumlahSiswa = count($daftarNilaiSiswa);

foreach ($daftarNilaiSiswa as $siswa) {
    $totalNilai += $siswa[1];
}

$rataRata = $totalNilai / $jumlahSiswa;

$siswaDiAtasRataRata = [];

foreach ($daftarNilaiSiswa as $siswa) {
    $nama = $siswa[0];
    $nilai = $siswa[1];

    if ($nilai > $rataRata) {
        $siswaDiAtasRataRata[] = $nama . " (" . $nilai . ")";
    }
}

echo "=== ANALISIS NILAI KELAS MATEMATIKA ===" . "<br>";
echo "Total Nilai: " . $totalNilai . "<br>";
echo "Jumlah Siswa: " . $jumlahSiswa . "<br>";
echo "Rata-rata Kelas: " . number_format($rataRata, 2) . "<br><br>"; 

echo "Daftar Siswa dengan Nilai di Atas Rata-rata (" . number_format($rataRata, 2) . "):" . "<br>";

if (!empty($siswaDiAtasRataRata)) {
    echo implode(", ", $siswaDiAtasRataRata) . "<br>";
} else {
    echo "Tidak ada siswa yang nilainya di atas rata-rata kelas." . "<br>";
}

?>