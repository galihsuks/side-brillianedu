# Brillian Edu Landing Page

Website landing page untuk Brillian Edu, layanan bimbingan belajar private di Klaten. Project ini dibangun dengan CodeIgniter 4 dan dirancang untuk menampilkan profil bisnis, layanan utama, dokumentasi kegiatan belajar, serta jalur kontak yang cepat melalui WhatsApp.

## Tentang Project

Brillian Edu adalah layanan les private dengan tutor datang ke rumah siswa. Landing page ini dibuat untuk membantu calon orang tua dan siswa mengenal layanan Brillian Edu dengan lebih jelas, membangun kepercayaan, dan mempermudah proses konsultasi maupun pendaftaran.

Halaman utama yang tersedia saat ini:

- `/` untuk landing page utama
- `/about` untuk profil dan nilai utama Brillian Edu
- `/service` untuk informasi layanan belajar

## Fitur

- Landing page modern dengan nuansa warna oranye dan hitam
- Tampilan responsif untuk desktop dan mobile
- Navbar mobile dengan tombol titik tiga dan overlay menu
- CTA langsung ke WhatsApp
- Favicon dan aset lokal dari folder `public`
- Dokumentasi kegiatan belajar menggunakan aset gambar lokal
- Struktur view yang sederhana dan mudah dikembangkan

## Stack

- PHP 8.1+
- CodeIgniter 4
- Tailwind CSS via CDN
- Bootstrap Icons

## Struktur Project Singkat

Bagian yang paling relevan untuk pengembangan landing page ini:

- `app/Controllers/WebController.php`
  mengatur data dan render halaman public
- `app/Config/Routes.php`
  mendefinisikan route `/`, `/about`, dan `/service`
- `app/Views/web/layouts/app.php`
  layout utama, header, metadata, dan mobile menu
- `app/Views/web/home.php`
  halaman landing page utama
- `app/Views/web/about.php`
  halaman tentang Brillian Edu
- `app/Views/web/service.php`
  halaman layanan
- `public/assets/*`
  aset logo dan dokumentasi
- `public/favicon_io/*`
  favicon website

## Setup

## 1. Install dependency

```bash
composer install
```

## 2. Siapkan environment

Salin file environment jika dibutuhkan:

```bash
cp env .env
```

Atur konfigurasi penting di file `.env`, terutama:

```env
CI_ENVIRONMENT = development
app.name = 'Brillian Edu'
app.baseURL = 'http://localhost:8080'
```

## 3. Jalankan server

```bash
php spark serve
```

Lalu buka:

- [http://localhost:8080](http://localhost:8080)

## Catatan Asset

Project ini menggunakan aset lokal yang sudah ditempatkan pada:

- `public/assets/logo`
- `public/assets/dokumentasi`
- `public/favicon_io`

Kalau ingin mengganti visual, cukup update file di folder tersebut lalu sesuaikan referensi pada view bila diperlukan.

## Tujuan Pengembangan

Landing page ini difokuskan untuk:

- memperkenalkan Brillian Edu secara profesional
- menjelaskan layanan dengan bahasa yang mudah dipahami
- membangun kepercayaan calon customer
- mendorong pengunjung agar langsung menghubungi admin via WhatsApp

## Ide Pengembangan Lanjutan

Beberapa hal yang bisa ditambahkan ke depan:

- testimoni asli dari orang tua atau siswa
- informasi area layanan yang lebih detail
- daftar mata pelajaran per jenjang
- kisaran biaya atau paket belajar
- galeri dokumentasi yang lebih lengkap
- form lead atau form pendaftaran online

## Repository Description

Landing page website for Brillian Edu, a private tutoring service in Klaten offering flexible in-home lessons for TK, SD, SMP, SMA, and general learning needs.
