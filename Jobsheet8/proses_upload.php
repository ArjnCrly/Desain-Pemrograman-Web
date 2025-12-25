<?php
$targetDirectory = "images/"; // Mengubah folder tujuan menjadi images

if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif']; // Daftar tipe MIME yang diizinkan

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileType = $_FILES['files']['type'][$i]; // Mengambil tipe MIME file
        $targetFile = $targetDirectory . $fileName;

        // Validasi: Apakah tipe file termasuk dalam daftar gambar yang diizinkan?
        if (in_array($fileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                echo "Gambar $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah gambar $fileName.<br>";
            }
        } else {
            echo "File $fileName gagal diunggah: Format bukan gambar yang valid.<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>