<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Sesuaikan dengan username MySQL Anda
$password = ""; // Sesuaikan dengan password MySQL Anda
$dbname = "projectuas"; // Nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek jika ID buku dikirimkan melalui POST
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Query untuk menghapus buku berdasarkan ID
    $sql = "DELETE FROM buku WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // Redirect ke halaman kelola buku dengan status sukses
        header("Location: manage_books.php?status=success");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "ID tidak ditemukan!";
}

// Menutup koneksi
$conn->close();
?>
