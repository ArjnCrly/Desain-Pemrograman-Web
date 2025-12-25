<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $extensions = array("jpg", "jpeg", "png", "gif"); 
    $totalFiles = count($_FILES['files']['name']);

    $targetDirectory = "images/";
    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }

    for ($i = 0; $i < $totalFiles; $i++) {
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "File $file_name memiliki ekstensi yang tidak diizinkan.";
        }

        if ($file_size > 2097152) {
            $errors[] = "File $file_name melebihi ukuran 2 MB.";
        }

        if (empty($errors)) {
            move_uploaded_file($file_tmp, $targetDirectory . $file_name);
        }
    }

    if (empty($errors)) {
        echo "Semua gambar berhasil diunggah.";
    } else {
        echo implode("<br>", $errors);
    }
}
?>