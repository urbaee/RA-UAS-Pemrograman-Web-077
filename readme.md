# Sistem Informasi Manajemen Mahasiswa Informatika ITERA

Website ini merupakan sistem informasi manajemen data mahasiswa Teknik Informatika di Institut Teknologi Sumatera (ITERA). Aplikasi ini memungkinkan pengguna untuk mengelola data mahasiswa melalui fitur CRUD (Create, Read, Update, Delete).

## Fitur Utama
- **Autentikasi User**: User harus login terlebih dahulu untuk mengakses fitur-fitur dalam aplikasi.
- **Dashboard**: Setelah login, user diarahkan ke dashboard utama yang menampilkan data mahasiswa.
- **Manajemen Data Mahasiswa**:
  - **Tambah Data**: User dapat menambahkan data mahasiswa baru.
  - **Edit Data**: Memungkinkan user mengubah informasi mahasiswa.
  - **Hapus Data**: Fitur untuk menghapus data mahasiswa berdasarkan NIM.
  - **Lihat Data**: Tabel daftar mahasiswa yang bisa di-scroll dengan header sticky.
- **Validasi Form**: Validasi pada form input menggunakan JavaScript untuk memastikan data yang dimasukkan sesuai ketentuan.
- **Responsif dan Modern**: Menggunakan CSS flexbox dan desain yang responsif.

## Teknologi yang Digunakan
- **Frontend**: HTML5, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL

## Struktur Folder
```
📂 root
│
├── 📂 config
│   └── koneksi.php  # Koneksi database
│   └── check_session.php  # Sesi database
│
├── 📂 assets
│   ├── 📂 css
│   │   └── style.css  # Style
│   ├── 📂 images
│   │   └── logo.png  # Logo dan aset gambar
│   └── 📂 js
│       └── script.js  # Validasi form
│
├── 📂 controller
│   └── auth 
│       └── loginaccess.php  # Autentikasi user
│       └── logout.php  # Autentikasi user
│   └── crud
│       └── create.php  # Tambah data mahasiswa
│       └── update.php  # Edit data mahasiswa
│       └── delete.php  # Hapus data mahasiswa
│
├── 📂 view
│   ├── data.php  # Tabel data mahasiswa
│   ├── dashboard.php  # Edit data mahasiswa
│   ├── login.php  # Tambah data mahasiswa
│
├── 📂 database
│   └── dbmahasiswa.sql  # Struktur database
├── index.html
├── readme.md
│
```

### 4. Menjalankan Website
- Buka terminal dan navigasi ke direktori proyek.
- Jalankan perintah berikut untuk menjalankan server PHP:

```bash
php -S localhost:8000
```

- Akses aplikasi melalui browser di `http://localhost:8000`


---
**Hak Cipta & Lisensi**  
&copy; 2024 Rahmat Aldi Nasda - 122140077. Seluruh hak cipta dilindungi.

