<?php
// Kita matikan report error bawaan PHP yang bikin web crash screen putih
mysqli_report(MYSQLI_REPORT_OFF);

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'project_yayubi';

// Coba koneksi ke database secara halus
$koneksi = @mysqli_connect($host, $user, $pass, $db);

// Kalau gagal tersambung, biarkan saja (tidak usah die/gagal total)
if (!$koneksi) {
    // Kamu bisa buka tanda komentar di bawah ini kalau mau ada teks peringatan kecil di pojok atas web
    // echo "<small style='color: red;'>Note: Mode Offline (Database belum aktif)</small>";
}
?>