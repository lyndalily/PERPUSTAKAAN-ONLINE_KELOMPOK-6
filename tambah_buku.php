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

// Proses form saat disubmit
if (isset($_POST['submit'])) {
    // Ambil data dari form
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $genre = $_POST['genre'];

    // Menangani pengunggahan file gambar
    $cover = $_FILES['cover']['name']; // Nama file gambar
    $cover_temp = $_FILES['cover']['tmp_name']; // Lokasi sementara file gambar

    // Menentukan nama baru untuk file yang di-upload (untuk mencegah konflik nama file)
    $cover_new_name = uniqid() . '_' . $cover;

    // Lokasi folder tempat menyimpan file
    $upload_dir = 'uploads/' . $cover_new_name;

    // Pindahkan file dari folder sementara ke folder tujuan
    if (move_uploaded_file($cover_temp, $upload_dir)) {
        // Jika upload berhasil, simpan data buku ke database
        $sql = "INSERT INTO buku (judul, penulis, genre, cover) 
                VALUES ('$judul', '$penulis', '$genre', '$cover_new_name')";

        if ($conn->query($sql) === TRUE) {
            echo "Buku berhasil ditambahkan!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Gagal mengunggah file.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('perpustakaan.jpg');
            background-size: cover;
            background-position: center;
            color: white;
        }

        .navbar {
            background-color: rgba(255, 165, 0, 0.8); /* Warna oranye dengan transparansi */
        }

        .container {
            margin-top: 50px;
            background-color: rgba(0, 0, 0, 0.6); /* Latar belakang transparan */
            padding: 30px;
            border-radius: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #ffa500;
            border: none;
        }

        .btn-primary:hover {
            background-color: #e07b00;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
            margin-top: 10px;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <div class="container">
        <h1 class="text-center">Tambah Buku Baru</h1>
        <form action="tambah_buku.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="judul">Judul Buku:</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="form-group">
                <label for="penulis">Penulis:</label>
                <input type="text" class="form-control" id="penulis" name="penulis" required>
            </div>
            <div class="form-group">
                <label for="genre">Genre:</label>
                <select class="form-control" id="genre" name="genre" required>
                    <option value="" disabled selected>Pilih Genre</option>
                    <option value="Fiksi">Fiksi</option>
                    <option value="Non-Fiksi">Non-Fiksi</option>
                    <option value="Fantasi">Fantasi</option>
                    <option value="Misteri">Misteri</option>
                    <option value="Romansa">Romansa</option>
                    <!-- Tambahkan pilihan genre lainnya sesuai kebutuhan -->
                </select>
            </div>
            <div class="form-group">
                <label for="cover">Cover Buku (gambar):</label>
                <input type="file" class="form-control" id="cover" name="cover" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Tambah Buku</button>
        </form>

        <!-- Tombol Kembali -->
        <a href="manage_books.php" class="btn btn-secondary mt-3">Kembali ke Daftar Buku</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
