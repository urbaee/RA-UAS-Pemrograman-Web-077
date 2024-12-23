<?php
include '../../config/koneksi.php';

session_start();

$database = new Koneksi();
$conn = $database->getConnection();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    // Query untuk memeriksa pengguna
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header('Location: ../../view/dashboard.php');
        echo "<script>alert('Login berhasil! Selamat datang, $username.);</script>";
    } else {
        $_SESSION['error'] = 'Username atau Password salah!';
        header('Location: ../../view/login.php');  // Kembali ke halaman login
        exit();
    }
}

$conn->close();
?>
