<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- Logo di kiri atas -->
        <a class="navbar-brand" href="index.php">
            <img src="logo perpustakaan.png" alt="logo perpustakaan.png" style="width: 40px; height: auto;"> <!-- Sesuaikan path logo Anda -->
            Perpustakaan Online
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-item" href="index.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-item" href="about.php">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-item" href="contact.php">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-item" href="recommendation.php">Rekomendasi Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-item" href="manage_books.php">Kelola Buku</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    /* Mengatur tampilan navbar */
    .navbar {
        background-color: orange; /* Warna latar belakang navbar */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Efek bayangan di bawah navbar */
    }

    .navbar-brand {
        color: orange;
        font-weight: bold;
        font-size: 1.5rem;
        display: flex;
        align-items: center;
    }

    .navbar-brand img {
        margin-right: 10px; /* Memberi jarak antara logo dan teks */
    }

    .navbar-nav .nav-item .nav-link {
        color: orange !important;
        padding: 12px 20px;
        font-size: 1.1rem;
        text-transform: uppercase;
        border-radius: 5px;
        margin: 0 10px;
        transition: background-color 0.3s, transform 0.3s ease-in-out;
    }

    /* Efek hover pada menu-item */
    .menu-item:hover {
        background-color: khaki; /* Biru cerah saat hover */
        color: white;
        transform: scale(1.05); /* Efek memperbesar saat hover */
    }
</style>
