<?php

// Variabel awal untuk Operator
$a = 10;
$b = 5;

// =========================================================
// 1. OPERATOR ARITMATIKA
// =========================================================
echo "<h2>1. OPERATOR ARITMATIKA</h2>";
echo "Variabel A = $a, Variabel B = $b <hr>";

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Tambah (\$a + \$b): {$hasilTambah} <br>";
echo "Kurang (\$a - \$b): {$hasilKurang} <br>";
echo "Kali (\$a * \$b): {$hasilKali} <br>";
echo "Bagi (\$a / \$b): {$hasilBagi} <br>";
echo "Sisa Bagi (\$a % \$b): {$sisaBagi} <br>";
echo "Pangkat (\$a ** \$b): {$pangkat} <br>";

echo "<br><hr>"; 

// =========================================================
// 2. OPERATOR PERBANDINGAN & IDENTIK (Loose dan Strict Comparison)
// =========================================================
echo "<h2>2. OPERATOR PERBANDINGAN & IDENTIK</h2>";
echo "Catatan: Hasil adalah Boolean (1=True, Kosong=False) <hr>";

// Variabel untuk demonstrasi Identik (===)
$x = 10;      // Integer
$y = "10";    // String
$z = 10;      // Integer

echo "<h3>Loose Comparison (Hanya Nilai) - \$x = {$x} (int), \$y = \"{$y}\" (string)</h3>";
$hasilSama = $x == $y; // 10 == "10" (True)
echo "Sama Dengan (==): " . ($hasilSama ? 'True' : 'False') . " (Output PHP: {$hasilSama}) <br>";

echo "<h3>Strict Comparison (Nilai & Tipe Data) - \$x = 10 (int), \$y = \"10\" (string)</h3>";
// Kode dari gambar image_b2daf0.png
$hasilIdentik = $x === $y; // 10 (int) === "10" (string) (False)
$hasilTidakIdentik = $x !== $y; // 10 (int) !== "10" (string) (True)

echo "Identik (===): " . ($hasilIdentik ? 'True' : 'False') . " (Output PHP: {$hasilIdentik}) <br>";
echo "Tidak Identik (!==): " . ($hasilTidakIdentik ? 'True' : 'False') . " (Output PHP: {$hasilTidakIdentik}) <br>";

echo "<br><h3>Perbandingan Nilai Awal (\$a = 10 VS \$b = 5)</h3>";
$hasilTidakSama = $a != $b; 
$hasilLebihKecil = $a < $b; 
$hasilLebihBesar = $a > $b; 
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b; 

echo "Tidak Sama Dengan (\$a != \$b): " . ($hasilTidakSama ? 'True' : 'False') . " (Output PHP: {$hasilTidakSama}) <br>";
echo "Lebih Kecil (\$a < \$b): " . ($hasilLebihKecil ? 'True' : 'False') . " (Output PHP: {$hasilLebihKecil}) <br>";
echo "Lebih Besar (\$a > \$b): " . ($hasilLebihBesar ? 'True' : 'False') . " (Output PHP: {$hasilLebihBesar}) <br>";
echo "Lebih Kecil Sama Dengan (\$a <= \$b): " . ($hasilLebihKecilSama ? 'True' : 'False') . " (Output PHP: {$hasilLebihKecilSama}) <br>";
echo "Lebih Besar Sama Dengan (\$a >= \$b): " . ($hasilLebihBesarSama ? 'True' : 'False') . " (Output PHP: {$hasilLebihBesarSama}) <br>";

echo "<hr>";

// =========================================================
// 3. OPERATOR PENUGASAN KOMBINASI
// =========================================================
echo "<h2>3. OPERATOR PENUGASAN KOMBINASI</h2>";
echo "Nilai Awal: \$a = 10, \$b = 5. (Nilai \$a di-reset sebelum setiap operasi) <hr>";

$a = 10; $a += $b; echo "Setelah \$a += \$b: \$a = {$a} <br>"; // 15
$a = 10; $a -= $b; echo "Setelah \$a -= \$b: \$a = {$a} <br>"; // 5
$a = 10; $a *= $b; echo "Setelah \$a *= \$b: \$a = {$a} <br>"; // 50
$a = 10; $a /= $b; echo "Setelah \$a /= \$b: \$a = {$a} <br>"; // 2
$a = 10; $a %= $b; echo "Setelah \$a %= \$b: \$a = {$a} <br>"; // 0

echo "<br><hr>";

// =========================================================
// 4. KONSTANTA (Dari gambar image_a8cbfc.png)
// =========================================================
echo "<h2>4. KONSTANTA</h2>";
// Mendefinisikan konstanta untuk nilai tetap
define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2023);

echo "Penggunaan Konstanta: ";
echo "Selamat datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . ".";
echo "<br>";

echo "<br><hr>";

// =========================================================
// 5. VARIABEL DASAR (Dari gambar image_a8cbdf.png & image_a8cbf9.png)
// =========================================================
echo "<h2>5. VARIABEL DASAR</h2>";

// Variabel Integer (image_a8cbdf.png)
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan \$angka1 ($angka1) dan \$angka2 ($angka2) adalah $hasil.<br>";

// Variabel Boolean (image_a8cbf9.png)
$benar = true;
$salah = false;
echo "Variabel boolean: <br>";
echo "Variabel \$benar: $benar (Output 1)<br>";
echo "Variabel \$salah: $salah (Output Kosong)<br>";

?>