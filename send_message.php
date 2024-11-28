<?php
// Menghubungkan ke database menggunakan koneksi.php
include('koneksi.php');

// Periksa apakah form dikirim
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $name = mysqli_real_escape_string($koneksi, $_POST['name']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $message = mysqli_real_escape_string($koneksi, $_POST['message']);

    // Query untuk menyimpan data ke tabel messages
    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

    // Eksekusi query dan cek apakah berhasil
    if (mysqli_query($koneksi, $sql)) {
        echo "Pesan Anda telah berhasil dikirim.";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($koneksi);
    }
}

// Tutup koneksi
mysqli_close($koneksi);
?>
