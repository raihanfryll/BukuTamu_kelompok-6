# 📘 Buku Tamu Digital - Laravel 11

![Laravel Version](https://img.shields.io/badge/Laravel-11-red)
![Status](https://img.shields.io/badge/status-active-brightgreen)
![License](https://img.shields.io/badge/license-MIT-blue)


Website sederhana untuk mencatat tamu yang berkunjung, dibangun menggunakan Laravel 11 dan Tailwind CSS. Pengunjung dapat mengisi nama, email, dan pesan mereka melalui form yang menarik, dan data akan tersimpan secara otomatis ke dalam database.

---

## 🚀 Fitur Unggulan

✨ Form interaktif yang responsif dengan validasi bawaan Laravel
🗃️ Penyimpanan data real-time ke database MySQL
📋 Daftar tamu langsung tampil setelah submit
🔔 Flash message tampil hanya sekali saat sukses
🎨 UI modern dengan efek transisi dan gradient (Tailwind CSS)

---

## 🧱 Teknologi yang Digunakan

* Laravel 11
* PHP 8+
* Tailwind CSS (via CDN)
* MySQL / phpMyAdmin
* VS Code
* Git + GitHub

---

## 📂 Struktur Folder Penting

* `app/Http/Controllers/TamuController.php` → logika penyimpanan dan tampilan
* `app/Models/Tamu.php` → model ORM untuk tabel `tamus`
* `resources/views/tamu/index.blade.php` → form dan daftar tamu
* `routes/web.php` → route utama aplikasi
* `database/migrations/...create_tamus_table.php` → struktur tabel tamu

---

## ⚙️ Cara Menjalankan Proyek

1. Clone repository ini:

   ```bash
   git clone https://github.com/raihanfryll/BukuTamu_kelompok-6.git
   cd BukuTamu_kelompok-6
   ```

2. Install dependencies:

   ```bash
   composer install
   ```

3. Duplikat file `.env`:

   ```bash
   cp .env.example .env
   ```

4. Atur koneksi database di file `.env`:

   ```env
   DB_DATABASE=bukutamu
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. Generate app key:

   ```bash
   php artisan key:generate
   ```

6. Jalankan migration:

   ```bash
   php artisan migrate
   ```

7. Jalankan Laravel:

   ```bash
   php artisan serve
   ```

   Akses di browser: `http://127.0.0.1:8000`

---


## 👥 Kelompok 6 - Praktikum PPL

| Nama                    | NIM           |
| ----------------------- | ------------- |
| Raihan Firyal           | 2208107010084 |
| Berliani Utami          | 2208107010082 |
| Riska Haqika Situmorang | 2208107010086 |

---

## 📄 Lisensi

Proyek ini menggunakan lisensi **MIT**. Bebas digunakan dan dimodifikasi dengan mencantumkan kredit kepada pembuat asli.


