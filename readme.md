# Sistem Informasi Manajemen Mahasiswa Informatika ITERA

## Identitas
- **Nama**: Rahmat Aldi Nasda
- **NIM**: 122140077
- **Kelas**: RA
- **Dosen**: Muhammad Habib Algifari, S.Kom., M.T.I.

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

## Hosting Aplikasi Web
### Langkah-langkah Hosting Aplikasi
1. *Menyiapkan Aplikasi*:  
   - Pastikan seluruh file aplikasi telah diuji secara lokal dan berjalan dengan lancar.  
   - Lakukan ekspor database menggunakan phpMyAdmin atau alat sejenis.  
2. *Memilih Layanan Hosting*:  
   - Saya memilih layanan hosting dari **Rumahweb**.  
3. *Mengunggah File Aplikasi*:  
   - Unggah file aplikasi ke dalam direktori **public_html** menggunakan **cPanel**.  
4. *Mengatur Database*:  
   - Buat database baru melalui cPanel.  
   - Import file SQL (database.sql) ke dalam database yang telah dibuat.  
   - Sesuaikan konfigurasi database di file **config/Database.php** dengan kredensial hosting.  
5. *Pengujian Aplikasi*:  
   - Akses aplikasi melalui URL hosting dan lakukan pengujian untuk memastikan semua fitur berjalan dengan baik.

### Penyedia Hosting yang Dipilih
- Saya menggunakan layanan hosting dari *Rumahweb.com*.
- Subdomain yang saya gunakan adalah: [https://rahmat-077.koling-dev.my.id](https://rahmat-077.koling-dev.my.id).

### Keamanan Aplikasi
1. *Validasi Input*:  
   - Semua data yang dimasukkan pengguna diperiksa untuk mencegah serangan SQL Injection dan XSS.  
2. *Penggunaan HTTPS*:  
   - SSL/TLS diterapkan untuk mengenkripsi komunikasi antara pengguna dan server.  
3. *Pengelolaan Sesi*:  
   - Sesi PHP dikonfigurasi dengan *session.cookie_httponly* dan *session.cookie_secure* guna mencegah serangan *session hijacking*.  
4. *Perlindungan File Upload*:  
   - Hanya jenis file tertentu yang diizinkan untuk diunggah, mencegah unggahan file berbahaya.  
5. *Backup Berkala*:  
   - File dan database secara rutin dicadangkan untuk mengantisipasi kehilangan data.

### Konfigurasi Server
1. *Server Hosting*:
   - Aplikasi di-host di Rumahweb dengan stack teknologi LAMP (Linux, Apache, MySQL, PHP).
2. *Pengaturan PHP*:
   - Error logging diaktifkan, sementara display_errors dinonaktifkan dalam lingkungan produksi. Ukuran unggahan file dibatasi melalui konfigurasi upload_max_filesize.
3. *Database*:
   - Menggunakan MySQL dengan akun pengguna yang memiliki akses terbatas untuk meningkatkan keamanan.
4. *Caching*:
   - Penerapan caching di sisi browser untuk mempercepat kinerja aplikasi.

---
**Hak Cipta & Lisensi**  
&copy; 2024 Rahmat Aldi Nasda - 122140077. Seluruh hak cipta dilindungi.

