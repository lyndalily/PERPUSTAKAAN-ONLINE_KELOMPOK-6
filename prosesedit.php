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

// Mengecek jika form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $genre = $_POST['genre'];

    // Update data buku di database
    $stmt = $conn->prepare("UPDATE buku SET judul = ?, penulis = ?, genre = ? WHERE id = ?");
    $stmt->bind_param("sssi", $judul, $penulis, $genre, $id); // Bind data form dengan tipe data string dan integer
    $stmt->execute();

    // Menutup prepared statement
    $stmt->close();

    // Redirect dengan status berhasil
    header("Location: manage_books.php?status=success");
    exit();
} else {
    die("Metode request tidak valid.");
}

// Menutup koneksi
$conn->close();
?>
