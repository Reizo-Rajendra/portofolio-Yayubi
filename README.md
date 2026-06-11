# 🍱 Proyek PJBL - Dapoer Yayubi Catering

Aplikasi Management & Sistem Pemesanan Menu Catering Berbasis Web Dinamis. Proyek ini dikembangkan untuk memenuhi tugas **Project-Based Learning (PJBL)** dengan menerapkan pola arsitektur MVC (Model-View-Controller) secara terstruktur.

Untuk kemudahan pengujian antarmuka (*front-end testing*), sistem saat ini dikonfigurasi dalam **Mode Demo Offline (Bypass)**, sehingga seluruh fitur visual dapat diakses langsung tanpa memerlukan konfigurasi database MySQL aktif.

---

## 👤 Identitas Pengembang

* **Nama Pengembang:** Reizo Rajendra Dianta
* **Institusi:** SMK Negeri 8 Semarang
* **Peran:** Full-Stack Developer & Database Designer

---

## 🚀 Panduan Instalasi & Menjalankan di Localhost

Ikuti langkah-langkah di bawah ini untuk menjalankan proyek di komputer lokal Anda:

### 1. Penempatan Folder Proyek
1. Pastikan aplikasi **XAMPP** sudah terinstal di perangkat Anda.
2. Unduh atau salin folder utama proyek ini (`PJBL-YAYUBI-main`).
3. Pindahkan folder tersebut ke dalam direktori server lokal (htdocs):
   ```text
   C:\xampp\htdocs\

   PJBL-YAYUBI-main/                  # Folder Utama Root Proyek
│
├── Home page/                      # Modul Landing Page & Katalog Utama
│   ├── home.html                   # Dashboard produk utama (Tujuan utama setelah masuk)
│   └── [Aset Gambar Banner/Icon]   # Logo BCA, GoPay, ShopeePay, Motor, dll.
│
├── pembayaran/                     # Modul halaman transaksi dan rincian nota
│
└── pjbl10/                         # Sistem Inti Aplikasi Berbasis MVC
    ├── controller/                 # Menyimpan logika pengendali rute (user.controller.php)
    ├── database/                   # Pengaturan koneksi server (koneksi.php yang sudah di-bypass)
    ├── models/                     # Tempat manipulasi data dan query objek (home.php)
    └── view/                       # Bagian Antarmuka Pengguna (User Interface)
        ├── index.php               # Form Login (Gerbang Tampilan Awal)
        ├── daftar.php              # Form Registrasi/Pendaftaran Akun Baru
        ├── style.css               # Pengatur gaya komponen visual halaman login
        └── global.css              # Pengatur variabel warna dan layouting utama
