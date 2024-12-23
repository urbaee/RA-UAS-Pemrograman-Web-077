<?php
include '../../config/koneksi.php';

$database = new Koneksi();
$conn = $database->getConnection();

// Pastikan ada parameter nim yang dikirim
if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    
    // Query untuk menghapus data
    $sql = "DELETE FROM mahasiswa WHERE NIM = '$nim'";
    $result = $conn->query($sql);

    if ($result) {
        echo "<script>alert('Data berhasil dihapus!');</script>";
    } else {
        echo "<script>alert('Gagal menghapus data!');</script>";
    }
    header('Location: ../../view/data.php');
} else {
    echo "<script>alert('NIM tidak ditemukan!');</script>";
    header('Location: ../../view/data.php');
}
?>
