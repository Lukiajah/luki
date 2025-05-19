<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "hearts2hearts"; // ganti dengan nama database yang sesuai

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash password sebelum disimpan
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Periksa apakah username atau email sudah ada di database
    $stmt = $conn->prepare("SELECT id FROM data_pengguna WHERE username=? OR email=?");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $message = "Username atau email sudah terdaftar.";
    } else {
        // Simpan data pengguna baru
        $stmt = $conn->prepare("INSERT INTO data_pengguna (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashed_password);
        if ($stmt->execute()) {
            $message = "Pendaftaran berhasil. Silakan login.";
        } else {
            $message = "Terjadi kesalahan saat mendaftar. Silakan coba lagi.";
        }
    }
    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        /* Tambahkan styling sesuai kebutuhan */
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Register</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register</button>
        </form>

        <p>Sudah punya akun? <a href="login.php">Login</a></p>

        <?php if (!empty($message)) echo "<div class='message'>$message</div>"; ?>
    </div>
</body>

</html>