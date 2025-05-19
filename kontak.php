<?php
// Menyambung ke database MySQL
$servername = "localhost";
$username = "root";  // Ganti dengan username MySQL Anda
$password = "";      // Ganti dengan password MySQL Anda
$dbname = "hearts2hearts";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Variabel untuk pesan status
$message = '';

// Memeriksa apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mendapatkan data dari form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message_content = htmlspecialchars($_POST['message']);

    // Validasi input
    if (empty($name) || empty($email) || empty($message_content)) {
        $message = "Semua field harus diisi!";
    } else {
        // Query untuk memasukkan data ke dalam tabel
        $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message_content);

        if ($stmt->execute()) {
            $message = "Pesan berhasil dikirim!";
        } else {
            $message = "Terjadi kesalahan. Pesan gagal dikirim.";
        }

        // Menutup statement
        $stmt->close();
    }
}

// Menutup koneksi
$conn->close();
?>


<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hearts 2 Hearts - Kontak</title>
</head>

<body>

    <main>
        <h2>Kontak Kami</h2>
        <p>Jika Anda ingin menghubungi Hearts2Hearts, isi formulir di bawah ini:</p>

        <div class="form-container">
            <form method="POST" action="">
                <input type="text" name="name" placeholder="Nama" required>
                <input type="email" name="email" placeholder="Email" required>
                <textarea name="message" placeholder="Pesan" rows="5" required></textarea>
                <input type="submit" value="Kirim Pesan">
            </form>

            <!-- Menampilkan pesan sukses atau error -->
            <?php if (isset($success)) : ?>
                <div class="message"><?= $success ?></div>
            <?php elseif (isset($error)) : ?>
                <div class="error"><?= $error ?></div>
            <?php endif; ?>
        </div>
    </main>

    <footer>
        &copy; <?= date("Y") ?> Hearts2Hearts |
    </footer>

</body>

</html>