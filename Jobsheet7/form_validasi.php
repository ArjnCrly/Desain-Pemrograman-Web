<!DOCTYPE html>
<html>
<head>
    <title>Form Validasi Password</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form dengan Validasi Password</h1>
    <form id="myForm" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br><br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil-server"></div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); // Mencegah reload halaman

                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                // Validasi Client-side
                if (nama === "") { $("#nama-error").text("Nama harus diisi."); valid = false; } 
                else { $("#nama-error").text(""); }

                if (email === "") { $("#email-error").text("Email harus diisi."); valid = false; } 
                else { $("#email-error").text(""); }

                if (password.length < 8) {
                    $("#password-error").text("Password minimal harus 8 karakter.");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                // Kirim data hanya jika validasi klien berhasil
                if (valid) {
                    $.ajax({
                        url: "proses_validasi.php", // Tujuan file PHP
                        type: "POST",
                        data: $(this).serialize(), // Mengambil semua input form
                        success: function(response) {
                            $("#hasil-server").html(response); // Tampilkan respon server [cite: image_25b9
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = array();

    // Validasi di Server
    if (empty($nama)) { $errors[] = "Nama harus diisi."; }
    if (empty($email)) { $errors[] = "Email harus diisi."; }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $errors[] = "Format email tidak valid."; }

    // Validasi Password (Soal 7.4)
    if (strlen($password) < 8) {
        $errors[] = "Password minimal harus 8 karakter.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<span style='color:red;'>$error</span><br>";
        }
    } else {
        echo "<span style='color:green;'>Data valid! Nama: $nama, Email: $email.</span>";
    }
}
?>