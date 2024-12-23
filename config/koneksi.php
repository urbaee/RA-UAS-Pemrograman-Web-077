<?php
class Koneksi {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db_name = 'mahasiswa_if';
    private $conn;

    // Konstruktor untuk membuat koneksi saat class dipanggil
    public function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db_name);

        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }   

    // Fungsi untuk mendapatkan koneksi
    public function getConnection() {
        return $this->conn;
    }
}
?>
