<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&display=swap" rel="stylesheet">
    <title>Informatika ITERA Dashboard</title>
</head>
<body>
<?php
    session_start();
    if (isset($_SESSION['error'])) {
        echo "<script>alert('" . $_SESSION['error'] . "');</script>";
        unset($_SESSION['error']);  // Hapus pesan error setelah ditampilkan
    }
    ?>
    <header>
        <nav>
            <div>
                <img src="../assets/images/IF-ITERA.png" alt="logo" class="logo">
                <img src="../assets/images/Logo_ITERA.png" alt="logo" class="logo">
            </div>
            <div>
                <h1 class="center">INFORMATIKA ITERA</h1>
            </div>
            <div>
                <h2><a href="../index.html">Beranda</a></h2>
            </div>
        </nav>
    </header>
    <section>
        <div class="container">
            <form action="../controller/auth/loginaccess.php" method="POST" class="form" id="loginForm">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required></label>
                <button type="submit" name="submit">Masuk</button>
                <p>Note: Jika Anda belum memiliki akun atau lupa password, silakan hubungi admin.</p>
            </form>
        </div>
    </section>
</body>
<script src="../assets/js/script.js"></script>
<script>validateUser();</script>
<!-- <script>logIn();</script> -->
</html>