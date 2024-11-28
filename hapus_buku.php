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

// Ambil ID buku yang akan dihapus
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mendapatkan data buku berdasarkan ID
    $sql = "SELECT * FROM buku WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Buku tidak ditemukan!";
        exit;
    }
} else {
    echo "ID tidak ditemukan!";
    exit;
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('perpustakaan.jpg');
            background-size: cover;
            background-position: center;
            color: white;
        }

        .container {
            margin-top: 50px;
            background-color: rgba(0, 0, 0, 0.7); /* Transparansi untuk latar belakang */
            padding: 30px;
            border-radius: 10px;
        }

        .btn-confirm {
            background-color: #dc3545;
            color: white;
        }

        .btn-confirm:hover {
            background-color: #c82333;
        }

        .btn-cancel {
            background-color: #6c757d;
            color: white;
        }

        .btn-cancel:hover {
            background-color: #5a6268;
        }

        .card-title {
            color: #ffc107; /* Warna oranye */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Konfirmasi Penghapusan</h1>
        <p class="text-center">Apakah Anda yakin ingin menghapus buku berikut?</p>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Judul: <?php echo $row['judul']; ?></h5>
                <p class="card-text">Penulis: <?php echo $row['penulis']; ?></p>
                <p class="card-text">Genre: <?php echo $row['genre']; ?></p>
            </div>
        </div>

        <form method="POST" action="proseshapus.php" class="text-center mt-4">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <button type="submit" class="btn btn-confirm btn-lg">Hapus Buku</button>
            <a href="manage_books.php" class="btn btn-cancel btn-lg ml-3">Batal</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

<?php
// Menutup koneksi
$conn->close();
?>
