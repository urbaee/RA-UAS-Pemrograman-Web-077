<?php 
    include '../../config/koneksi.php'; 
    $database = new Koneksi();
    $conn = $database->getConnection();    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&display=swap" rel="stylesheet">
    <title>Tambah Data</title>
</head>
<body>
    <nav>
        <div>
            <img src="../../assets/images/IF-ITERA.png" alt="logo" class="logo">
            <img src="../../assets/images/Logo_ITERA.png" alt="logo" class="logo">
        </div>
        <div>
            <h1 class="center">INFORMATIKA ITERA</h1>
        </div>
        <div>
            <h2><a href="../auth/logout.php">Logout</a></h2>
        </div>
    </nav>
    <section>
        <div class="container2">
        <h2>Tambah Data Mahasiswa</h2>
        <br>
        <form method="POST" class="form" id="formMahasiswa">
            <label for="NIM">NIM:</label>
            <input type="text" name="NIM" id="NIM" required>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <label for="doswal">Dosen Wali:</label>
            <input type="text" name="doswal" id="doswal" required>
            <label for="statusmhs">Status Mahasiswa:</label>
            <select name="statusmhs" id="statusmhs">
                <option value="Aktif">Aktif</option>
                <option value="Non-aktif">Tidak Aktif</option>
            </select>
            <button type="submit" name="submit">Simpan Data</button>
        </form>

        <a href="../../view/data.php"><button class="button">Kembali</button></a>
        
        <script src="../../assets/js/script.js"></script>
        <script>validateMahasiswa()</script>

        <?php
        if (isset($_POST['submit'])) {
            $NIM = $_POST['NIM'];
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $dosen_wali = $_POST['doswal'];
            $status_mahasiswa = $_POST['statusmhs'];
            $conn->query("INSERT INTO mahasiswa (NIM, nama, email, dosen_wali, status_mahasiswa) VALUES ('$NIM', '$nama', '$email', '$dosen_wali', '$status_mahasiswa')");
            header('Location: ../../view/data.php');
        }
        ?>
        </div>
    </section>
</body>
</html>
