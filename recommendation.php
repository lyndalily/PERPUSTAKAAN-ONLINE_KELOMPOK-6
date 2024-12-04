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
            background-color: rgba(255, 165, 0, 0.8);
        }

        .container {
            margin-top: 50px;
            background-color: rgba(0, 0, 0, 0.6);
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

        .borrow-form {
            display: none;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }

        .borrow-list {
            margin-top: 20px;
            color: white;
        }

        .back-button {
            margin-top: 20px;
            background-color: #1e7e34;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        .back-button:hover {
            background-color: #155d27;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            position: fixed;
            width: 100%;
            bottom: 0;
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
            <option value="komik">Komik</option>
            <option value="sejarah">Sejarah</option>
        </select>

        <!-- Rekomendasi Buku -->
        <div class="row genre-books" id="fiksi">
            <div class="col-md-4">
                <div class="book-card">
                    <img src="Milea.jpg" alt="Buku Fiksi 1">
                    <h4>Milea Suara dari Dilan</h4>
                    <p>Penulis: Pidi Baiq</p>
                    <button class="btn-borrow" onclick="borrowBook('Milea Suara dari Dilan')">Pinjam Buku</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="book-card">
                    <img src="Dilan.jpg" alt="Buku Fiksi 2">
                    <h4>Dilan 1990</h4>
                    <p>Penulis: Pidi Baiq</p>
                    <button class="btn-borrow" onclick="borrowBook('Dilan 1990')">Pinjam Buku</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="book-card">
                    <img src="Laskar Pelangi.jpg" alt="Buku Fiksi 3">
                    <h4>Laskar Pelangi</h4>
                    <p>Penulis: Andrea Hirata</p>
                    <button class="btn-borrow" onclick="borrowBook('Laskar Pelangi')">Pinjam Buku</button>
                </div>
            </div>
        </div>

         <!-- Additional Genre Cards -->
        <!-- non-fiksi -->
        <div class="row genre-books" id="non-fiksi" style="display: none;">
            <div class="col-md-4">
                <div class="book-card">
                    <img src="Bj.Habibie.jpg" alt="Buku non-fiksi 1">
                    <h4>Kisah Inspirasi Bj. Habibie</h4>
                    <p>Penulis: Bj. Habibie</p>
                    <button class="btn-borrow" onclick="borrowBook('Kisah Inspirasi Bj. Habibie')">Pinjam Buku</button>
                </div>
            </div>
        </div>

          <!-- Additional Genre Cards -->
        <!-- fantasi -->
        <div class="row genre-books" id="fantasi" style="display: none;">
            <div class="col-md-4">
                <div class="book-card">
                    <img src="theDragonRepublic.jpg" alt="Buku fantasi 1">
                    <h4>The Dragon Republic</h4>
                    <p>Penulis: R. F. Kuang</p>
                    <button class="btn-borrow" onclick="borrowBook('The Dragon Republic')">Pinjam Buku</button>
                </div>
            </div>
        </div>

          <!-- Additional Genre Cards -->
        <!-- Misteri -->
        <div class="row genre-books" id="misteri" style="display: none;">
            <div class="col-md-4">
                <div class="book-card">
                    <img src="MisteriKehidupanSetelahKematian.jpg" alt="Buku misteri 1">
                    <h4>Misteri Kehidupan Setelah Kematian</h4>
                    <p>Penulis: Miftahul Asror Malik</p>
                    <button class="btn-borrow" onclick="borrowBook('Misteri Kehidupan Setelah Kematian')">Pinjam Buku</button>
                </div>
            </div>
        </div>

        <!-- Additional Genre Cards -->
        <!-- Romansa -->
        <div class="row genre-books" id="romansa" style="display: none;">
            <div class="col-md-4">
                <div class="book-card">
                    <img src="P.S. I Love You.jpg" alt="Buku romansa 1">
                    <h4>P.S. I Love You</h4>
                    <p>Penulis: Cecelia Aherin</p>
                    <button class="btn-borrow" onclick="borrowBook('P.S. I Love You')">Pinjam Buku</button>
                </div>
            </div>
        </div>

        <!-- Additional Genre Cards -->
        <!-- Komik -->
        <div class="row genre-books" id="komik" style="display: none;">
            <div class="col-md-4">
                <div class="book-card">
                    <img src="OnePiece.jpg" alt="Buku Komik 1">
                    <h4>One Piece</h4>
                    <p>Penulis: Eiichiro Oda</p>
                    <button class="btn-borrow" onclick="borrowBook('One Piece')">Pinjam Buku</button>
                </div>
            </div>
        </div>

        <!-- Sejarah -->
        <div class="row genre-books" id="sejarah" style="display: none;">
            <div class="col-md-4">
                <div class="book-card">
                    <img src="Sejarah Dunia.jpg" alt="Buku Sejarah 1">
                    <h4>Sejarah Dunia abad pertengahan</h4>
                    <p>Penulis: Susan Wise Bauer</p>
                    <button class="btn-borrow" onclick="borrowBook('Sejarah Dunia abad pertengahan')">Pinjam Buku</button>
                </div>
            </div>
        </div>

        <!-- Back to Main Portal Button -->
        <button class="back-button" onclick="window.location.href='index.html'">Kembali ke Portal Utama</button>

        <!-- Form Peminjaman Buku -->
        <div id="borrow-form" class="borrow-form">
            <h3>Formulir Peminjaman Buku</h3>
            <form id="borrow-book-form">
                <label for="name">Nama:</label>
                <input type="text" id="name" class="form-control" required>
                <label for="email">Email:</label>
                <input type="email" id="email" class="form-control" required>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>

        <!-- Daftar Peminjam Buku -->
        <div id="borrow-list" class="borrow-list">
            <h3>Daftar Peminjam Buku</h3>
            <ul id="borrow-list-ul"></ul>
        </div>
    </div>
    
    <script>
        function showBooksByGenre() {
            const genre = document.getElementById('genre-dropdown').value;
            const genres = ['fiksi', 'non-fiksi', 'fantasi', 'misteri', 'romansa', 'komik', 'sejarah'];
            genres.forEach(function(id) {
                document.getElementById(id).style.display = id === genre ? 'block' : 'none';
            });
        }

        function borrowBook(bookName) {
            document.getElementById('borrow-form').style.display = 'block';
        }

        document.getElementById('borrow-book-form').addEventListener('submit', function(event) {
            event.preventDefault();
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const bookName = document.querySelector('.book-card button').getAttribute('onclick').match(/'(.*)'/)[1];

            const listItem = document.createElement('li');
            listItem.textContent = `${name} (${email}) telah meminjam "${bookName}"`;
            document.getElementById('borrow-list-ul').appendChild(listItem);
        });
    </script>
</body>
</html>
