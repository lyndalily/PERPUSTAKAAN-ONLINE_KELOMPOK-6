<?php
// Menghubungkan ke database
include('koneksi.php');

// Inisialisasi variabel
$name = $email = $message = "";
$message_status = "";

// Periksa apakah form dikirim
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $name = mysqli_real_escape_string($koneksi, $_POST['name']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $message = mysqli_real_escape_string($koneksi, $_POST['message']);

    // Query untuk menyimpan data ke tabel messages
    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

    // Eksekusi query
    if (mysqli_query($koneksi, $sql)) {
        // Pesan berhasil disimpan
        $message_status = "Pesan Anda telah berhasil dikirim.";
        // Kosongkan variabel form
        $name = $email = $message = "";
    } else {
        // Gagal menyimpan data
        $message_status = "Terjadi kesalahan: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('perpustakaan.jpg');
            background-size: cover;
            background-position: center;
            color: white;
        }

        .navbar {
            background-color: rgba(255, 165, 0, 0.8);
        }

        .container {
            margin-top: 50px;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }

        .contact-info {
            margin-top: 30px;
            font-size: 1.1rem;
        }

        .contact-info h3 {
            color: #ffa500;
        }

        .contact-form input, .contact-form textarea {
            background-color: rgba(255, 255, 255, 0.3);
            border: none;
            border-radius: 5px;
            color: white;
            padding: 15px;
            margin-bottom: 15px;
            width: 100%;
        }

        .contact-form button {
            background-color: #ffa500;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
            width: 100%;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #e07b00;
        }

        .alert {
            margin-top: 15px;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <div class="container text-center">
        <h1>Kontak Kami</h1>
        <p>Jika Anda memiliki pertanyaan atau masukan, silakan hubungi kami melalui form di bawah ini.</p>

        <!-- Informasi Kontak -->
        <div class="contact-info">
            <h3>Informasi Kontak:</h3>
            <p><strong>Alamat:</strong> Jl. Perpustakaan No. 123, Kota Makassar, Indonesia</p>
            <p><strong>Email:</strong> perpustakaanonline@gmail.com</p>
            <p><strong>Telepon:</strong> +62 82250456679</p>
        </div>

        <!-- Form Kontak -->
        <div class="contact-form">
            <h3>Kirim Pesan</h3>
            <?php if ($message_status): ?>
                <div class="alert alert-success"><?= $message_status ?></div>
            <?php endif; ?>
            <form action="" method="POST">
                <input type="text" name="name" placeholder="Nama Anda" value="<?= htmlspecialchars($name) ?>" required>
                <input type="email" name="email" placeholder="Email Anda" value="<?= htmlspecialchars($email) ?>" required>
                <textarea name="message" placeholder="Pesan Anda" rows="5" required><?= htmlspecialchars($message) ?></textarea>
                <button type="submit">Kirim Pesan</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
