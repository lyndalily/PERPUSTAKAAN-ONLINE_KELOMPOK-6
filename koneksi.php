<?php
$host = "localhost";        // Host database, biasanya localhost
$username = "root";         // Username MySQL
$password = "";             // Password MySQL (biasanya kosong untuk XAMPP)
$dbname = "projectuas";   // Nama database yang digunakan

// Membuat koneksi ke MySQL
$koneksi = mysqli_connect($host, $username, $password, $dbname);

// Mengecek apakah koneksi berhasil
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
