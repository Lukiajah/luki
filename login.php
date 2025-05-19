<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "hearts2hearts"; // Ganti sesuai nama database

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['identifier']; // bisa username atau email
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT password FROM data_pengguna WHERE username=? OR email=?");
    $stmt->bind_param("ss", $input, $input);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();
        if (password_verify($password, $hashed_password)) {
            header("Location: index 2.php"); // arahkan ke halaman utama setelah login sukses
            exit();
        } else {
            $message = "Password salah.";
        }
    } else {
        $message = "Akun tidak ditemukan.";
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
    <title>Login</title>
    <style>
        /* Styling tetap sama seperti sebelumnya */
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Login</h2>
        <form method="POST">
            <input type="text" name="identifier" placeholder="Username atau Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>

        <p>Belum punya akun? <a href="register.php">Register</a></p>

        <?php if (!empty($message)) echo "<div class='message'>$message</div>"; ?>
    </div>
</body>

</html>