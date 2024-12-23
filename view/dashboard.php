<?php
    include "../config/check_session.php";
?>

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
    <nav>
        <div>
            <img src="../assets/images/IF-ITERA.png" alt="logo" class="logo">
            <img src="../assets/images/Logo_ITERA.png" alt="logo" class="logo">
        </div>
        <div>
            <h1 class="center">INFORMATIKA ITERA</h1>
        </div>
        <div>
            <h2><a href="../controller/auth/logout.php">Logout</a></h2>
        </div>
    </nav>
    <section>
        <div class="container">
            <h1>SELAMAT DATANG DI DASHBOARD MAHASISWA</h1>
            <h1>TEKNIK INFORMATIKA ITERA</h1>
            <br>
            <h2>
                Klik tombok di bawah untuk mengelola data mahasiswa
            </h2>
            <a href="data.php"><button class="button">Data Mahasiswa</button></a>
        </div>
    </section>
</body>
</html>