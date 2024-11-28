<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
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

        /* Animasi untuk anggota tim */
        .team-member {
            margin: 20px 0;
            text-align: center;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s forwards;
        }

        .team-member img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease-in-out;
        }

        .team-member img:hover {
            transform: scale(1.1);
        }

        .team-member h3 {
            margin-top: 15px;
            font-size: 20px;
            color: #ffa500; /* Nama anggota berwarna oranye */
        }

        /* Animasi masuk */
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Styling untuk accordion */
        .accordion-button {
            background-color: #ffa500;
            color: white;
            border: 1px solid rgba(255, 165, 0, 0.8);
            text-transform: uppercase;
            font-weight: bold;
        }

        .accordion-button:not(.collapsed) {
            background-color: rgba(255, 165, 0, 1);
            color: black;
        }

        .accordion-body {
            background-color: white;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php include('navbar.php'); ?>

    <div class="container text-center">
        <h1>Tentang Kami</h1>
        <p>Perpustakaan Online adalah platform yang menyediakan koleksi buku digital dengan berbagai genre yang dapat diakses kapan saja dan di mana saja.</p>

        <!-- Tim Anggota -->
        <div class="row">
            <div class="col-md-6">
                <div class="team-member" style="animation-delay: 0.3s;">
                    <img src="akulinda.jpeg" alt="Anggota 1">
                    <h3>Linda</h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="team-member" style="animation-delay: 0.6s;">
                    <img src="Nisaa.jpg" alt="Anggota 2">
                    <h3>Andi Anisa Arsyam</h3>
                </div>
            </div>
        </div>

        <!-- Accordion untuk Visi dan Misi, Falsafah Logo, Tugas dan Fungsi -->
        <div class="accordion mt-4" id="accordionExample">
            <!-- Visi dan Misi -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Visi dan Misi
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <h4>Visi</h4>
                        <p>Mewujudkan perpustakaan online yang dapat diakses dengan mudah oleh masyarakat, menyediakan koleksi buku berkualitas yang mendukung pembelajaran sepanjang hayat.</p>
                        <h4>Misi</h4>
                        <ul>
                            <li>Menyediakan akses mudah ke berbagai jenis buku digital.</li>
                            <li>Menjadi pusat informasi dan pembelajaran bagi pengguna di seluruh dunia.</li>
                            <li>Meningkatkan budaya membaca melalui platform digital yang interaktif.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Falsafah Logo -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Falsafah Logo
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Logo Perpustakaan Online Kelompok 6 melambangkan semangat pendidikan dan akses ilmu di era digital. Buku terbuka menggambarkan pengetahuan yang terbuka untuk semua, sementara pena melambangkan kreativitas dan literasi. Lingkaran daun emas mencerminkan prestasi dan harapan untuk menciptakan generasi gemilang, didukung oleh bintang yang melambangkan cita-cita tinggi. Warna oranye pada logo melambangkan semangat, optimisme, dan energi untuk terus maju dalam memberikan layanan perpustakaan yang inovatif. Teks Perpustakaan Online dan Kelompok 6 menegaskan identitas serta komitmen untuk menyediakan akses ilmu yang mudah dan inklusif. Logo ini merepresentasikan visi pembelajaran tanpa batas dan kemajuan bersama.</p>
                    </div>
                </div>
            </div>

            <!-- Tugas dan Fungsi -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Tugas dan Fungsi
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p><strong>Tugas:</strong> Menyediakan layanan perpustakaan digital dengan akses cepat dan mudah, serta menjaga kualitas buku yang tersedia.</p>
                        <p><strong>Fungsi:</strong> Memberikan pembelajaran tanpa batas dengan menyediakan koleksi buku yang sesuai dengan kebutuhan pembaca, serta menjaga dan mengelola koleksi buku digital dengan baik.</p>
                    </div>
                </div>
            </div>

            <!-- Jam Kerja -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Jam Kerja
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p><strong>Senin - Jumat:</strong> 08.00 - 20.00</p>
                        <p><strong>Sabtu:</strong> 09.00 - 17.00</p>
                        <p><strong>Minggu dan Hari Libur:</strong> Tutup</p>
                        <p>Catatan: Perpustakaan online dapat diakses kapan saja melalui platform digital kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
