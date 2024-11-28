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

// Mengecek jika parameter 'id' ada di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data buku berdasarkan ID
    $stmt = $conn->prepare("SELECT * FROM buku WHERE id = ?");
    $stmt->bind_param("i", $id); // Bind parameter 'id' dengan tipe data integer
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); // Ambil data buku
    } else {
        die("Buku tidak ditemukan.");
    }

    // Menutup prepared statement
    $stmt->close();
} else {
    die("ID buku tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
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
            background-color: rgba(0, 0, 0, 0.6); /* Latar belakang transparan */
            padding: 30px;
            border-radius: 10px;
        }

        .card {
            margin-bottom: 20px;
            background-color: rgba(255, 255, 255, 0.3);
            padding: 20px;
            border-radius: 10px;
        }

        .card-body {
            text-align: center;
        }

        .card-title {
            color: #ffa500;
        }

        .btn-save {
            background-color: #ffa500;
            color: white;
            margin-top: 10px;
            text-transform: uppercase;
        }

        .btn-save:hover {
            background-color: #e07b00;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h1>Edit Buku</h1>

        <!-- Form untuk mengedit buku -->
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Edit Buku: <?php echo htmlspecialchars($row['judul']); ?></h3>
                <form method="POST" action="prosesedit.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>"> <!-- Menyimpan ID buku untuk proses pengeditan -->
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Buku</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="<?php echo htmlspecialchars($row['judul']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo htmlspecialchars($row['penulis']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="genre" class="form-label">Genre</label>
                        <select class="form-control" id="genre" name="genre" required>
                            <option value="Fiksi" <?php echo ($row['genre'] == 'Fiksi') ? 'selected' : ''; ?>>Fiksi</option>
                            <option value="Non-Fiksi" <?php echo ($row['genre'] == 'Non-Fiksi') ? 'selected' : ''; ?>>Non-Fiksi</option>
                            <option value="Fantasi" <?php echo ($row['genre'] == 'Fantasi') ? 'selected' : ''; ?>>Fantasi</option>
                            <option value="Misteri" <?php echo ($row['genre'] == 'Misteri') ? 'selected' : ''; ?>>Misteri</option>
                            <option value="Romansa" <?php echo ($row['genre'] == 'Romansa') ? 'selected' : ''; ?>>Romansa</option>
                            <!-- Tambahkan pilihan genre lainnya sesuai kebutuhan -->
                        </select>
                    </div>
                    <button type="submit" class="btn btn-save">Simpan Perubahan</button>
                </form>
            </div>
        </div>

        <a href="manage_books.php" class="btn btn-secondary">Kembali ke Daftar Buku</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

<?php
// Menutup koneksi
$conn->close();
?>
