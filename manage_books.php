<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Buku</title>
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

        .btn-manage {
            background-color: #ffa500;
            color: white;
            margin-top: 10px;
            text-transform: uppercase;
        }

        .btn-manage:hover {
            background-color: #e07b00;
        }

        .table img {
            width: 50px;
            height: 70px;
            object-fit: cover;
            margin-right: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <div class="container text-center">
        <h1>Kelola Buku</h1>
        <p>Anda dapat menambah, mengedit, atau menghapus buku di perpustakaan digital ini.</p>

        <!-- Menampilkan pesan keberhasilan jika ada -->
        <?php
        if (isset($_GET['status']) && $_GET['status'] == 'success') {
            echo "<div class='alert alert-success'>Operasi berhasil!</div>";
        }
        ?>

        <!-- Form untuk menambah buku -->
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Tambah Buku Baru</h3>
                <a href="tambah_buku.php" class="btn btn-manage">Tambah Buku</a>
            </div>
        </div>

        <!-- Daftar Buku -->
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Daftar Buku</h3>
                <table class="table table-striped text-white">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul Buku</th>
                            <th>Penulis</th>
                            <th>Genre</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Mengambil data buku dari database menggunakan prepared statement untuk keamanan
                        $stmt = $conn->prepare("SELECT * FROM buku");
                        $stmt->execute();
                        $result = $stmt->get_result();

                        if ($result->num_rows > 0) {
                            // Menampilkan data buku
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . htmlspecialchars($row["id"]) . "</td>"; // ID buku
                                echo "<td>" . htmlspecialchars($row["judul"]) . "</td>"; // Judul buku
                                echo "<td>" . htmlspecialchars($row["penulis"]) . "</td>"; // Penulis
                                echo "<td>
                                        <div class='d-flex align-items-center'>
                                            <img src='uploads/" . htmlspecialchars($row["cover"]) . "' alt='Cover Buku'>
                                            <span>" . htmlspecialchars($row["genre"]) . "</span>
                                        </div>
                                      </td>"; // Genre dengan gambar
                                echo "<td>
                                        <a href='edit_buku.php?id=" . htmlspecialchars($row["id"]) . "' class='btn btn-warning btn-sm'>Edit</a>
                                        <a href='hapus_buku.php?id=" . htmlspecialchars($row["id"]) . "' class='btn btn-danger btn-sm'>Hapus</a>
                                      </td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5' class='text-center'>Tidak ada data buku</td></tr>";
                        }

                        // Menutup prepared statement
                        $stmt->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tombol Kembali -->
        <a href="index.php" class="btn btn-secondary">Kembali ke Halaman Utama</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
