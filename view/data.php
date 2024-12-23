<?php
    include "../config/check_session.php";
    include "../config/koneksi.php";

    $database = new Koneksi();
    $conn = $database->getConnection();;
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
<body class="body2">
    <nav>
        <div>
            <img src="../assets/images/IF-ITERA.png" alt="logo" class="logo">
            <img src="../assets/images/Logo_ITERA.png" alt="logo" class="logo">
        </div>
        <div>
            <a href="dashboard.php"><h1 class="center">INFORMATIKA ITERA</h1></a>
        </div>
        <div>
            <h2><a href="../controller/auth/logout.php">Logout</a></h2>
        </div>
    </nav>
    <section>
        <div class="container">
            <h1>DATA MAHASISWA</h1>
            <h1>TEKNIK INFORMATIKA ITERA</h1>
            <br>
            <!-- Tombol Tambah Mahasiswa -->
            <a href="../controller/crud/create.php"><button class="button">Tambah Mahasiswa</button></a>

            <!-- Tabel Data Mahasiswa -->
            <div class="tablecontainer">
                <table>
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Dosen Wali</th>
                            <th>Status Mahasiswa</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM mahasiswa";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['NIM'] . "</td>";
                                echo "<td>" . $row['nama'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['dosen_wali'] . "</td>";
                                echo "<td>" . $row['status_mahasiswa'] . "</td>";
                                echo "<td>
                                    <a href=\"../controller/crud/update.php?nim=" . $row['NIM'] . "\" class=\"button2\">Edit</a> | 
                                    <a href=\"../controller/crud/delete.php?nim=" . $row['NIM'] . "\" class=\"button2\" onclick=\"return confirm('Apakah Anda yakin ingin menghapus?')\">Hapus</a>
                                    </td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>Tidak ada data mahasiswa.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>
</html>