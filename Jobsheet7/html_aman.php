<!DOCTYPE html>
<html>
<head>
    <title>Safe Input PHP</title>
</head>
<body>
    <h2>Form Input Aman</h2>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Langkah 2: Mengamankan input teks dari XSS
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        echo "Input yang diterima: " . $input . "<br>";

        // Langkah 6: Validasi Email
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Lanjutkan dengan pengolahan email yang aman
            echo "Email yang valid: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        } else {
            // Tangani input yang tidak valid
            echo "<span style='color:red;'>Error: Format email tidak valid!</span>";
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Data Input:</label>
        <input type="text" name="input" id="input" required><br><br>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required><br><br>

        <input type="submit" name="submit" value="Kirim">
    </form>
</body>
</html>