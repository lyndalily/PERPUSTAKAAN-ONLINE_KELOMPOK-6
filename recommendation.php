<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Buku</title>
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

        .dropdown-custom {
            border-radius: 30px;
            padding: 10px;
            background-color: #ffa500;
            color: white;
            font-weight: bold;
            width: 200px;
            transition: background-color 0.3s ease;
        }

        .dropdown-custom:hover {
            background-color: #e07b00;
        }

        .book-card {
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 10px;
            margin-bottom: 20px;
            padding: 15px;
            text-align: center;
        }

        .book-card img {
            max-width: 90%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
        }

        .book-card img:hover {
            transform: scale(1.05);
        }

        .book-card h4 {
            margin-top: 10px;
            color: #ffa500;
        }

        .book-card p {
            color: white;
        }

        .book-card a {
            color: #ffa500;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            margin-top: 10px;
        }

        .book-card a:hover {
            color: #e07b00;
        }

        .more-content {
            display: none;
            color: white;
            margin-top: 10px;
        }

        .btn-read-more {
            background-color: #FF5733;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-read-more:hover {
            background-color: #e04e24;
        }

        .btn-borrow {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-borrow:hover {
            background-color: #45a049;
        }

        .genre-books {
            display: flex;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <div class="container text-center">
        <h1>Rekomendasi Buku</h1>
        <p>Berikut adalah beberapa rekomendasi buku yang dapat Anda baca di Perpustakaan Online kami:</p>

        <!-- Dropdown Genre -->
        <select class="dropdown-custom" id="genre-dropdown" onchange="showBooksByGenre()">
            <option value="">Pilih Genre</option>
            <option value="fiksi">Fiksi</option>
            <option value="non-fiksi">Non-Fiksi</option>
            <option value="fantasi">Fantasi</option>
            <option value="misteri">Misteri</option>
            <option value="romansa">Romansa</option>
        </select>

        <!-- Rekomendasi Buku -->

        <!-- Fiksi -->
        <div class="row genre-books" id="fiksi">
            <div class="col-md-4">
                <div class="book-card">
                    <img src="Milea.jpg" alt="Buku Fiksi 1">
                    <h4>Milea Suara dari Dilan</h4>
                    <p>Penulis: Pidi Baiq</p>
                    <p>Suara dari Dilan adalah novel kedua dalam seri Dilan karya Pidi Baiq...</p>
                    <button class="btn-read-more" onclick="toggleDescription('book1')">Baca Selengkapnya</button>
                    <div id="book1" class="more-content">
                        <p>Suara dari Dilan adalah lanjutan kisah cinta remaja Dilan dan Milea...</p>
                    </div>
                    <button class="btn-borrow" onclick="borrowBook('Milea Suara dari Dilan')">Pinjam Buku</button>
                </div>
            </div>
            <!-- Buku Fiksi 2 -->
            <div class="col-md-4">
                <div class="book-card">
                    <img src="Dilan.jpg" alt="Buku Fiksi 2">
                    <h4>Dilan 1990</h4>
                    <p>Penulis: Pidi Baiq</p>
                    <p>Dilan 1990 adalah cerita cinta remaja yang berlatar belakang kehidupan Bandung...</p>
                    <button class="btn-read-more" onclick="toggleDescription('book2')">Baca Selengkapnya</button>
                    <div id="book2" class="more-content">
                        <p>Dilan 1990 menceritakan kisah Dilan yang jatuh cinta dengan Milea di tahun 1990...</p>
                    </div>
                    <button class="btn-borrow" onclick="borrowBook('Dilan 1990')">Pinjam Buku</button>
                </div>
            </div>
            <!-- Buku Fiksi 3 -->
            <div class="col-md-4">
                <div class="book-card">
                    <img src="Laskar Pelangi.jpg" alt="Buku Fiksi 3">
                    <h4>Laskar Pelangi</h4>
                    <p>Penulis: Andrea Hirata</p>
                    <p>Laskar Pelangi adalah novel karya Andrea Hirata yang mengisahkan perjuangan sekelompok anak-anak dari desa Gantung, Belitung, untuk mendapatkan pendidikan.</p>
                    <button class="btn-read-more" onclick="toggleDescription('book3')">Baca Selengkapnya</button>
                    <div id="book3" class="more-content">
                        <p>Laskar Pelangi adalah novel karya Andrea Hirata yang menceritakan kisah sekelompok anak-anak dari desa Gantung, Belitung...</p>
                    </div>
                    <button class="btn-borrow" onclick="borrowBook('Laskar Pelangi')">Pinjam Buku</button>
                </div>
            </div>
        </div>

        <!-- Javascript untuk peminjaman buku -->
        <script>
            function borrowBook(bookTitle) {
                alert("Anda telah meminjam buku: " + bookTitle);
            }

            function toggleDescription(bookId) {
                var content = document.getElementById(bookId);
                if (content.style.display === "none") {
                    content.style.display = "block";
                } else {
                    content.style.display = "none";
                }
            }

            function showBooksByGenre() {
                var genre = document.getElementById('genre-dropdown').value;
                var genres = document.querySelectorAll('.genre-books');
                genres.forEach(function (section) {
                    section.style.display = 'none';
                });
                if (genre) {
                    document.getElementById(genre).style.display = 'flex';
                }
            }
        </script>
    </div>
</body>
</html>
