# 🎮 Gempol PlayStation — Sistem Rental PlayStation

Aplikasi berbasis website untuk membantu pengelolaan usaha rental PlayStation Gempol PlayStation. Sistem ini dikembangkan menggunakan **Laravel Framework 12.69.2** dan database MySQL.

Aplikasi ini dirancang untuk mempermudah pengelolaan data pelanggan, unit PlayStation, transaksi rental, dan pembayaran secara terstruktur.

## 📌 Daftar Isi

- [Tentang Aplikasi](#-tentang-aplikasi)
- [Fitur Aplikasi](#-fitur-aplikasi)
- [Teknologi](#-teknologi-yang-digunakan)
- [Persyaratan Sistem](#-persyaratan-sistem)
- [Instalasi](#-cara-instalasi)
- [Konfigurasi Database](#️-konfigurasi-database)
- [Menjalankan Aplikasi](#-menjalankan-aplikasi)
- [Panduan Penggunaan](#-panduan-penggunaan)
- [Struktur Database](#-struktur-database)
- [Pengembang](#-pengembang)

## 📖 Tentang Aplikasi

Gempol PlayStation merupakan aplikasi sistem rental PlayStation yang dibuat untuk mendukung proses operasional rental, mulai dari pengelolaan pelanggan hingga pencatatan transaksi pembayaran.

Aplikasi ini memiliki dua peran utama dalam pengelolaan sistem, yaitu **Kasir** dan **Admin (Pemilik)**. Kasir bertugas mengelola transaksi rental dan pembayaran, sedangkan admin bertugas mengelola data serta memantau aktivitas usaha.

## ✨ Fitur Aplikasi

- **Dashboard** — Menampilkan ringkasan informasi rental.
- **Data Pelanggan** — Mengelola informasi pelanggan.
- **Data PlayStation** — Mengelola unit PS4 dan PS5, harga sewa, serta status unit.
- **Data Rental** — Mencatat transaksi, durasi, waktu mulai, waktu selesai, dan total biaya rental.
- **Pembayaran** — Mengelola pencatatan pembayaran transaksi rental.
- **Laporan Transaksi** — Membantu pemilik memantau data rental dan pembayaran sesuai fitur yang tersedia.
- **Autentikasi Pengguna** — Mengatur akses pengguna berdasarkan peran yang diterapkan pada aplikasi.

## 🛠️ Teknologi yang Digunakan

| Teknologi | Keterangan |
|---|---|
| Laravel 12.69.2 | Framework backend |
| PHP 8.2.12 | Bahasa pemrograman |
| MySQL | Database |
| HTML5 | Struktur halaman |
| CSS3 | Desain dan tata letak |
| JavaScript | Interaksi antarmuka |
| XAMPP | Lingkungan server lokal |
| Composer | Manajemen dependensi PHP |

## 💻 Persyaratan Sistem

Pastikan perangkat sudah memiliki:

- PHP versi 8.2 atau yang kompatibel dengan dependensi proyek.
- Composer.
- XAMPP atau server lokal sejenis.
- MySQL/MariaDB.
- Git (opsional, untuk mengunduh repository).

## 🚀 Cara Instalasi

### 1. Clone Repository

Buka terminal atau PowerShell, kemudian jalankan:

```bash
git clone https://github.com/USERNAME/gempol-rental-ps.git
```

Ganti `USERNAME` dengan nama akun GitHub pemilik repository.

### 2. Masuk ke Folder Project

```bash
cd gempol-rental-ps
```

### 3. Instal Dependensi Laravel

```bash
composer install
```

### 4. Buat File Environment

```bash
copy .env.example .env
```

Jika file `.env` sudah tersedia, gunakan file tersebut dan jangan menimpanya tanpa membuat cadangan terlebih dahulu.

### 5. Generate Application Key

```bash
php artisan key:generate
```

## 🗄️ Konfigurasi Database

1. Jalankan Apache dan MySQL melalui XAMPP.
2. Buka phpMyAdmin di `http://localhost/phpmyadmin`.
3. Buat database baru dengan nama `gempol_rental`.
4. Buka file `.env` di folder utama project.
5. Sesuaikan konfigurasi database berikut:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=gempol_rental
DB_USERNAME=root
DB_PASSWORD=
```

Sesuaikan nama database, username, dan password dengan konfigurasi MySQL di perangkat masing-masing.

**Penting:** Jika database sudah berisi tabel atau data yang digunakan, jangan langsung menjalankan migrasi ulang yang dapat mengganggu struktur database.

Jika database masih kosong dan seluruh migration sudah tersedia, jalankan:

```bash
php artisan migrate
```

Jika project menyediakan seeder untuk data awal, jalankan sesuai kebutuhan:

```bash
php artisan db:seed
```

## ▶️ Menjalankan Aplikasi

Setelah instalasi dan konfigurasi selesai, jalankan:

```bash
php artisan serve
```

Buka browser dan akses:

**http://127.0.0.1:8000**

Pastikan server MySQL tetap berjalan selama aplikasi menggunakan database lokal.

## 📋 Panduan Penggunaan

### 1. Kasir

- Login menggunakan akun kasir yang telah terdaftar.
- Melihat dan mengelola data pelanggan.
- Memeriksa ketersediaan unit PlayStation.
- Membuat transaksi rental dan mencatat waktu mulai serta waktu selesai.
- Mengelola pembayaran sesuai alur transaksi aplikasi.

### 2. Admin (Pemilik)

- Login menggunakan akun admin yang telah terdaftar.
- Mengelola data pelanggan dan unit PlayStation.
- Memantau transaksi rental dan pembayaran.
- Melihat laporan yang tersedia pada dashboard aplikasi.

*Nama menu dan hak akses mengikuti implementasi aplikasi yang digunakan.*

## 🗃️ Struktur Database

Database utama menggunakan MySQL dengan tabel-tabel berikut:

| Tabel | Fungsi |
|---|---|
| `pelanggans` | Menyimpan data pelanggan |
| `ps` | Menyimpan data unit PlayStation |
| `rentals` | Menyimpan transaksi rental |
| `pembayarans` | Menyimpan data pembayaran |
| `users` | Menyimpan akun pengguna, jika menggunakan autentikasi bawaan Laravel |

Relasi antartabel digunakan untuk menghubungkan pelanggan, unit PlayStation, transaksi rental, dan pembayaran.

## 📷 Tampilan Aplikasi

Bagian ini dapat dilengkapi dengan screenshot halaman aplikasi, seperti:

- Halaman Login
- Dashboard Admin
- Halaman Data Pelanggan
- Halaman Data PlayStation
- Halaman Transaksi Rental
- Halaman Pembayaran

Untuk menambahkan screenshot, simpan gambar di folder `screenshots`, kemudian gunakan format Markdown berikut:

```markdown
![Dashboard Gempol PlayStation](screenshots/dashboard.png)
```

## 🎯 Tujuan Pengembangan

Aplikasi ini dibuat sebagai proyek pengembangan sistem informasi rental PlayStation untuk membantu pencatatan data, pengelolaan transaksi, dan pemantauan aktivitas usaha secara lebih terstruktur.

## 👨‍💻 Pengembang

**Nama Proyek:** Gempol PlayStation — Sistem Rental PlayStation  
**Framework:** Laravel 12.69.2  
**Database:** MySQL  
**Kategori:** Aplikasi Website  
**Tujuan:** Proyek pembelajaran dan pengembangan sistem informasi rental PlayStation.

---

© 2026 Gempol PlayStation. All Rights Reserved.
