<?php
session_start(); // Memulai sesi

// Koneksi ke database
include('koneksi.php');

// Proses login jika form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Menangkap data dari form
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    
    // Enkripsi password (gunakan password_hash untuk keamanan)
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Query untuk mengecek apakah username sudah ada di database
    $sql_check = "SELECT * FROM users WHERE username = '$username'";
    $result_check = mysqli_query($koneksi, $sql_check);

    // Jika username belum terdaftar, lakukan pendaftaran otomatis
    if (mysqli_num_rows($result_check) == 0) {
        $sql_register = "INSERT INTO users (username, password) VALUES ('$username', '$password_hash')";
        if (mysqli_query($koneksi, $sql_register)) {
            echo "<script>alert('Akun baru berhasil dibuat, silakan login!');</script>";
        } else {
            echo "<script>alert('Terjadi kesalahan saat membuat akun!');</script>";
        }
    }

    // Query untuk mengecek apakah username dan password cocok di database
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($koneksi, $sql);
    
    // Cek apakah ada baris yang cocok
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verifikasi password menggunakan password_verify
        if (password_verify($password, $user['password'])) {
            // Jika username dan password cocok, set sesi login
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username; // Menyimpan username di sesi
            header('Location: about.php'); // Arahkan ke halaman lain setelah login sukses
            exit();
        } else {
            // Jika login gagal karena password salah
            echo "<script>alert('Username atau password salah!');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Online</title>
    <style>
        /* CSS Internal */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('perpustakaan.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            animation: fadeIn 2s ease-in-out; /* Animasi masuk */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .welcome-box {
            background: rgba(0, 0, 0, 0.7); /* Transparansi hitam */
            padding: 20px 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            margin-bottom: 30px;
            max-width: 1000px;
            width: 90%;
            animation: slideDown 1s ease-in-out; /* Animasi turun */
        }

        @keyframes slideDown {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .welcome-box h2 {
            font-size: 2.0rem;
            margin: 0 0 10px; /* Jarak antara h1 dan paragraf */
            color: white; /* Warna teks putih */
        }

        .welcome-box p {
            font-size: 1rem;
            color: #ddd;
            margin: 0;
        }

        .login-container {
            background: rgba(0, 0, 0, 0.8);
            padding: 20px 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 90%;
            animation: zoomIn 1s ease-in-out; /* Animasi zoom */
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.8);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #fff;
        }

        .login-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #ddd;
        }

        .login-container input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #555;
            border-radius: 5px;
            background: #fff; /* Latar putih */
            color: #000; /* Teks hitam */
            transition: box-shadow 0.3s ease, transform 0.3s ease; /* Efek hover */
        }

        .login-container input:focus {
            outline: none;
            box-shadow: 0 0 10px #4CAF50;
            transform: scale(1.05);
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: orange;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease; /* Efek hover */
        }

        .login-container button:hover {
            background-color: goldenrod;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="welcome-box">
        <h2>SELAMAT DATANG DI PERPUSTAKAAN ONLINE</h2>
        <p>Silakan login untuk mengakses perpustakaan kami</p>
    </div>

    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="index.php">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
