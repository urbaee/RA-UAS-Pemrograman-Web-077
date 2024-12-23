<?php 
    include '../../config/koneksi.php'; 

    $database = new Koneksi();
    $conn = $database->getConnection();

    if (isset($_GET['nim'])) {
        $nim = $_GET['nim'];
        $result = $conn->query("SELECT * FROM mahasiswa WHERE NIM = '$nim'");
        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
        } else {
            echo "Data tidak ditemukan!";
            exit();
        }
    } else {
        echo "NIM tidak ditemukan!";
        exit();
    }    

    if (isset($_POST['update'])) {
        $NIM = $_POST['NIM'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $dosen_wali = $_POST['doswal'];
        $status_mahasiswa = $_POST['statusmhs'];

        $conn->query("UPDATE mahasiswa SET nama = '$nama', email = '$email', dosen_wali = '$dosen_wali', status_mahasiswa = '$status_mahasiswa' WHERE NIM = '$NIM'");
        header('Location: ../../view/data.php');
    }
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
    <title>Update Data</title>
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
        <div class="container">
        <h2>Edit Data Mahasiswa</h2>
        <br>
        <form method="POST" class="form" id="formMahasiswa">
            <label for="NIM">NIM:</label>
            <input type="text" name="NIM" id="NIM" value="<?php echo $data['NIM']; ?>" readonly>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" value="<?php echo $data['nama']; ?>" required>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo $data['email']; ?>" required>
            <label for="doswal">Dosen Wali:</label>
            <input type="text" name="doswal" id="doswal" value="<?php echo $data['dosen_wali']; ?>" required>
            <label for="statusmhs">Status Mahasiswa:</label>
            <select name="statusmhs" id="statusmhs">
                <option value="aktif" <?php echo ($data['status_mahasiswa'] == 'aktif') ? 'selected' : ''; ?>>Aktif</option>
                <option value="nonaktif" <?php echo ($data['status_mahasiswa'] == 'nonaktif') ? 'selected' : ''; ?>>Tidak Aktif</option>
            </select>
            <button type="submit" name="update">Update Data</button>
        </form>
        <a href="../../view/data.php"><button class="button">Kembali</button></a>
        </div>
    </section>
</body>
<script src="../../assets/js/script.js"></script>
<script>validateMahasiswa()</script>
</html>
