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
                </div>
            </div>
            <!-- Buku Fiksi 3 -->
             <div class="col-md-4">
                <div class="book-card">
                    <img src="Laskar Pelangi.jpg"alt="Buku Fiksi 2">
                    <h4>Laskar Pelangi</h4>
                    <p>Penulis: Andrea Hirata</p>
                    <p>Laskar Pelangi adalah novel karya Andrea Hirata yang mengisahkan perjuangan sekelompok anak-anak dari desa Gantung, Belitung, untuk mendapatkan pendidikan.</p>
                    <button class="btn-read-more" onclick="toggleDescription('book3')">Baca Selengkapnya</button>
                    <div id="book3"class="more-content">
                        <p>Laskar Pelangi adalah novel karya Andrea Hirata yang menceritakan kisah sekelompok anak-anak dari desa Gantung, Belitung, yang tergabung dalam kelompok belajar bernama Laskar Pelangi. Mereka adalah siswa-siswi Sekolah Muhammadiyah yang serba kekurangan, namun memiliki semangat luar biasa untuk mengejar impian meski menghadapi tantangan berat. Berkat bimbingan dua guru berdedikasi, Bu Muslimah dan Pak Harfan, mereka terus belajar dan bertahan di sekolah meskipun dengan fasilitas yang terbatas.</p>
                        <p>Cerita ini mengangkat tema tentang perjuangan, persahabatan, dan pentingnya pendidikan, serta menggambarkan realitas sosial di Belitung pada masa itu. Anak-anak dalam Laskar Pelangi menunjukkan bahwa semangat dan tekad dapat mengatasi segala rintangan. Novel ini tidak hanya menjadi inspirasi bagi pembaca muda, tetapi juga mengajarkan tentang keberanian untuk bermimpi dan tidak menyerah, meskipun berada dalam keterbatasan.</p>
                    </div>
                </div>
             </div>
        </div>

        <!-- Non-Fiksi -->
        <div class="row genre-books" id="non-fiksi" style="display: none;">
            <div class="col-md-4">
                <div class="book-card">
                    <img src="Bj.Habibie.jpg" alt="Buku Non-Fiksi 1">
                    <h4>Kisah Inspiratif Bj.Habibie</h4>
                    <p>Penulis: Bj.Habibie</p>
                    <p>Kisah Inspiratif B.J. Habibie adalah sebuah buku yang menceritakan perjalanan hidup B.J. Habibie, seorang tokoh nasional yang dikenal sebagai bapak teknologi Indonesia dan Presiden ke-3 Republik Indonesia. Buku ini menggambarkan perjalanan inspiratifnya dari masa kecil di Parepare hingga menjadi salah satu insinyur terkemuka dunia.</p>
                    <button class="btn-read-more" onclick="toggleDescription('book4')">Baca Selengkapnya</button>
                    <div id="book4" class="more-content">
                        <p>"Kisah Inspiratif B.J. Habibie" adalah sebuah buku yang mendalami perjalanan hidup Bacharuddin Jusuf Habibie, tokoh yang dikenal sebagai Presiden ke-3 Republik Indonesia sekaligus bapak teknologi bangsa. Buku ini mengisahkan perjalanan luar biasa dari masa kecilnya di Parepare, Sulawesi Selatan, hingga menjadi salah satu insinyur terkemuka di dunia, yang memberikan kontribusi besar dalam industri dirgantara internasional.</p>
                        <p>Habibie lahir dari keluarga sederhana tetapi memiliki semangat belajar yang tinggi. Sejak kecil, ia menunjukkan kecerdasan luar biasa, terutama dalam bidang matematika dan fisika. Pendidikan formal dan tekad kuat membawanya melanjutkan studi ke Jerman, tempat ia mengukir prestasi di bidang aeronautika. Di sana, Habibie berhasil mengembangkan teori crack progression yang hingga kini diakui secara global. Ia berkontribusi besar dalam pembuatan pesawat, termasuk pesawat canggih di bawah perusahaan-perusahaan besar Eropa.</p>
                        <p>Buku ini juga mengangkat sisi humanis dari Habibie, terutama kisah cintanya dengan Ainun Habibie. Kisah mereka penuh dengan kehangatan, cinta sejati, dan kesetiaan, yang menjadi salah satu bagian paling mengharukan dalam buku ini. Ainun bukan hanya istri, tetapi juga pendukung utama dalam kehidupan Habibie, terutama ketika ia menghadapi tantangan dalam karier dan kehidupan pribadi.</p>
                        <p>Di Indonesia, Habibie dikenang sebagai pemimpin visioner yang membawa perubahan besar, terutama dalam masa transisi politik setelah era Orde Baru. Kepemimpinannya memberikan harapan baru bagi demokrasi Indonesia. Namun, di balik prestasi politiknya, Habibie selalu memegang prinsip bahwa teknologi dan pendidikan adalah kunci utama kemajuan bangsa. Melalui karya dan pemikirannya, ia terus mendorong pentingnya inovasi teknologi untuk kemajuan Indonesia.</p>
                        <p>Buku ini tidak hanya menjadi catatan sejarah tetapi juga sumber inspirasi bagi siapa saja yang ingin belajar tentang semangat pantang menyerah, kejujuran, dedikasi, dan kecintaan pada tanah air. Dengan bahasa yang mudah dipahami dan narasi yang mendalam, pembaca akan merasakan motivasi untuk terus belajar, berkarya, dan memberikan yang terbaik bagi masyarakat. Kisah hidup Habibie mengajarkan bahwa keterbatasan bukanlah halangan, melainkan tantangan untuk diatasi demi mencapai tujuan besar.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fantasi -->
        <div class="row genre-books" id="fantasi" style="display: none;">
            <div class="col-md-4">
                <div class="book-card">
                    <img src="Harrypotter.avif" alt="Buku Fantasi 1">
                    <h4>Harry Potter and the Sorcerer's Stone</h4>
                    <p>Penulis: J.K. Rowling</p>
                    <p>Sebuah kisah tentang seorang anak laki-laki yang belajar sihir di sekolah Hogwarts...</p>
                    <button class="btn-read-more" onclick="toggleDescription('book5')">Baca Selengkapnya</button>
                    <div id="book5" class="more-content">
                        <p>Harry Potter adalah serangkaian tujuh novel fantasi karya J.K. Rowling yang menceritakan perjalanan seorang anak laki-laki bernama Harry Potter, seorang penyihir muda yang harus menghadapi tantangan besar dalam dunia sihir. Dengan latar di Inggris yang dipenuhi unsur magis, cerita ini mengikuti perjalanan Harry dari masa kecilnya yang penuh penderitaan hingga ia menjadi seorang penyelamat dunia sihir.</p>
                        <p>Harry adalah anak yatim piatu yang dibesarkan oleh keluarga Dursley, kerabat yang memperlakukannya dengan buruk. Hidupnya berubah pada ulang tahunnya yang ke-11, ketika ia mengetahui bahwa ia adalah seorang penyihir dan diterima di Sekolah Sihir Hogwarts. Di sana, ia berteman dengan Ron Weasley dan Hermione Granger, serta belajar tentang masa lalunya, termasuk fakta bahwa orang tuanya dibunuh oleh penyihir gelap yang sangat berkuasa, Lord Voldemort.</p>
                        <p>Setiap buku dalam seri ini menggambarkan satu tahun ajaran di Hogwarts dan perjalanan Harry dalam menghadapi berbagai tantangan. Di awal, ia menemukan Batu Bertuah yang memiliki kekuatan abadi. Kemudian, ia berhadapan dengan rahasia Kamar Rahasia, tawanan misterius yang melarikan diri dari Azkaban, dan turnamen berbahaya dalam Piala Api. Ketegangan memuncak saat ia memimpin perlawanan melawan Voldemort melalui Orde Phoenix, mempelajari rahasia Pangeran Berdarah Campuran, hingga akhirnya menghadapi pertempuran epik di Harry Potter and the Deathly Hallows.</p>
                        <p>Cerita ini dipenuhi dengan karakter yang kompleks dan berkesan. Harry, sebagai tokoh utama, adalah gambaran seorang pahlawan yang belajar tentang keberanian, cinta, dan pengorbanan. Teman-temannya, Ron dan Hermione, selalu setia mendukungnya, sementara karakter-karakter lain, seperti Profesor Dumbledore, Hagrid, dan Severus Snape, memberikan kedalaman yang unik pada cerita. Konflik utama dengan Voldemort, yang merepresentasikan kejahatan, membawa tema perjuangan antara kebaikan dan keburukan.</p>
                        <p>Dunia sihir yang dibangun Rowling sangat kaya dengan detail, termasuk elemen-elemen seperti rumah-rumah Hogwarts (Gryffindor, Slytherin, Ravenclaw, dan Hufflepuff), permainan Quidditch, mantra-mantra, serta makhluk magis. Tempat-tempat seperti Diagon Alley, Hutan Terlarang, dan desa Hogsmeade memberikan keajaiban dan misteri yang memikat.</p>
                        <p>Selain sebagai cerita petualangan, seri Harry Potter juga menyentuh tema-tema mendalam seperti persahabatan, keberanian, pengkhianatan, cinta, kehilangan, dan ketabahan. Buku-buku ini menggambarkan proses pendewasaan Harry, dari seorang anak yang tidak mengetahui apa-apa tentang dunianya hingga menjadi seorang pemimpin yang penuh dengan rasa tanggung jawab.</p>
                        <p>Seri ini telah mendapatkan popularitas global, diterjemahkan ke dalam lebih dari 80 bahasa, dan telah diadaptasi menjadi delapan film yang sukses besar. Harry Potter telah menjadi fenomena budaya yang melampaui generasi, menginspirasi pembaca dari segala usia untuk bermimpi dan percaya pada kekuatan cinta dan harapan.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Misteri -->
        <div class="row genre-books" id="misteri" style="display: none;">
            <div class="col-md-4">
                <div class="book-card">
                    <img src="The Da Vinci Codee.jpg" alt="Buku Misteri 1">
                    <h4>The Da Vinci Code</h4>
                    <p>Penulis: Dan Brown</p>
                    <p>Sebuah misteri yang melibatkan sejarah, simbol, dan teka-teki yang membingungkan...</p>
                    <button class="btn-read-more" onclick="toggleDescription('book6')">Baca Selengkapnya</button>
                    <div id="book6" class="more-content">
                        <p>The Da Vinci Code adalah novel thriller misteri karya Dan Brown yang pertama kali diterbitkan pada tahun 2003. Buku ini mengisahkan perjalanan seorang profesor simbologi terkenal, Robert Langdon, dan seorang kriptologis berbakat, Sophie Neveu, dalam mengungkap rahasia besar yang tersembunyi selama ribuan tahun. Dengan latar tempat di kota-kota penuh sejarah seperti Paris dan London, novel ini memadukan teka-teki simbolik, seni, sejarah, dan agama dalam alur cerita yang penuh ketegangan.</p>
                        <p>Ceritanya dimulai dengan pembunuhan kurator Museum Louvre, Jacques Saunière, yang meninggalkan serangkaian petunjuk aneh sebelum kematiannya. Langdon, yang berada di Paris untuk memberikan kuliah, dipanggil untuk membantu menyelidiki kasus tersebut. Ia kemudian bertemu Sophie, cucu Saunière, yang yakin bahwa kakeknya telah meninggalkan pesan penting untuknya. Bersama-sama, mereka memecahkan kode dan teka-teki yang mengarah pada rahasia yang dijaga oleh organisasi kuno, Priory of Sion.</p>
                        <p>Rahasia yang mereka ungkap terkait dengan keberadaan Holy Grail, yang ternyata tidak seperti yang digambarkan dalam legenda populer. Brown mengusulkan bahwa Holy Grail bukanlah cawan fisik, melainkan sebuah dokumen dan rahasia mengenai Maria Magdalena, yang diklaim memiliki hubungan mendalam dengan Yesus Kristus. Novel ini mengeksplorasi tema kontroversial seperti peran wanita dalam agama, sejarah Gereja Katolik, dan interpretasi simbol-simbol seni, termasuk karya-karya Leonardo da Vinci seperti The Last Supper.</p>
                        <p>Selama perjalanannya, Langdon dan Sophie dikejar oleh berbagai pihak yang ingin menghentikan mereka, termasuk organisasi Katolik konservatif Opus Dei dan pembunuh bayaran bernama Silas. Dalam perlombaan melawan waktu, mereka menghadapi bahaya, pengkhianatan, dan pengungkapan mengejutkan tentang masa lalu Sophie dan kebenaran di balik rahasia yang mereka cari.</p>
                        <p>Novel ini menarik perhatian pembaca melalui penggabungan fakta sejarah dengan fiksi yang mengundang pembaca untuk mempertanyakan kebenaran yang diterima secara umum. Meskipun mendapatkan kritik dari beberapa sejarawan dan pemimpin agama atas interpretasi sejarah dan teologinya, The Da Vinci Code menjadi fenomena global, terjual lebih dari 80 juta kopi, dan diterjemahkan ke dalam berbagai bahasa.</p>
                        <p>Selain keberhasilan komersialnya, novel ini memicu perdebatan tentang hubungan antara agama, sejarah, dan seni. Adaptasi filmnya, yang dibintangi Tom Hanks sebagai Robert Langdon, semakin memperkuat dampaknya dalam budaya populer. The Da Vinci Code bukan hanya cerita detektif yang menegangkan, tetapi juga perjalanan intelektual yang mengajak pembaca untuk berpikir kritis tentang sejarah dan simbolisme dalam dunia modern.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Romansa -->
        <div class="row genre-books" id="romansa" style="display: none;">
            <div class="col-md-4">
                <div class="book-card">
                    <img src="P.S. I Love You.jpg" alt="Buku Romansa 1">
                    <h4>P.S. I Love You</h4>
                    <p>Penulis: Cecelia Ahern</p>
                    <p>Kisah cinta yang penuh emosi dan kepergian orang yang kita cintai...</p>
                    <button class="btn-read-more" onclick="toggleDescription('book7')">Baca Selengkapnya</button>
                    <div id="book7" class="more-content">
                        <p>P.S. I Love You adalah novel romantis karya Cecelia Ahern yang pertama kali diterbitkan pada tahun 2004. Cerita ini menggambarkan perjalanan emosional seorang wanita muda, Holly Kennedy, yang menghadapi duka mendalam setelah kehilangan suaminya, Gerry, akibat tumor otak. Dengan campuran cinta, kehilangan, dan harapan, novel ini mengisahkan bagaimana cinta sejati dapat melampaui batas kematian dan memberikan kekuatan untuk memulai hidup baru.</p>
                        <p>Setelah kematian Gerry, Holly merasa hidupnya hancur. Ia tenggelam dalam kesedihan dan tidak tahu bagaimana melanjutkan hidup tanpa pria yang telah menjadi pusat dunianya. Namun, di tengah rasa kehilangan itu, ia menemukan kejutan luar biasa dari Gerry. Sebelum meninggal, Gerry telah menulis serangkaian surat untuk Holly, yang masing-masing diakhiri dengan kata-kata P.S. I Love You. Surat-surat ini dirancang untuk membimbingnya melewati rasa duka dan membantunya menemukan kembali makna hidup.</p>
                        <p>Surat pertama tiba tepat pada hari ulang tahun Holly yang ke-30. Dalam surat tersebut, Gerry menyarankan Holly untuk membeli lampu karaoke dan pergi keluar bersama teman-temannya. Dengan setiap surat yang diterimanya, Holly mendapatkan tugas atau pesan yang mendorongnya untuk keluar dari zona nyaman, menghadapi ketakutannya, dan mengejar impian yang sempat dilupakan. Surat-surat itu tidak hanya memberikan penghiburan tetapi juga mengingatkan Holly tentang kenangan indah bersama Gerry serta mengajarinya untuk mencintai dirinya sendiri.</p>
                        <p>Dalam perjalanan ini, Holly menerima dukungan dari keluarga dan teman-temannya, termasuk sahabat dekatnya, Sharon dan Denise, yang selalu ada untuk membantunya melewati masa-masa sulit. Ia juga mulai membangun hubungan baru, baik dengan dirinya sendiri maupun dengan orang-orang di sekitarnya. Meskipun surat-surat itu berisi arahan, pada akhirnya Holly menyadari bahwa ia harus belajar membuat keputusan sendiri tanpa bergantung pada Gerry.</p>
                        <p>Novel ini tidak hanya berfokus pada kisah cinta tetapi juga pada kekuatan keluarga, persahabatan, dan ketahanan manusia. Ahern menulis dengan gaya yang emosional, menggabungkan humor dan duka dalam narasi yang menyentuh hati.</p>
                        <p>P.S. I Love You menjadi buku yang sangat populer, terjual jutaan kopi di seluruh dunia, dan diadaptasi menjadi film pada tahun 2007, yang dibintangi Hilary Swank sebagai Holly dan Gerard Butler sebagai Gerry. Kisah ini telah menjadi simbol pengingat bahwa cinta sejati tidak pernah benar-benar hilang, bahkan setelah kematian. Novel ini memberikan pesan bahwa meskipun kehilangan menyakitkan, selalu ada harapan untuk menemukan kebahagiaan dan kehidupan baru.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleDescription(bookId) {
            var content = document.getElementById(bookId);
            content.style.display = content.style.display === "none" ? "block" : "none";
        }

        function showBooksByGenre() {
            var genre = document.getElementById('genre-dropdown').value;
            var genres = ['fiksi', 'non-fiksi', 'fantasi', 'misteri', 'romansa'];

            genres.forEach(function(genreId) {
                var genreSection = document.getElementById(genreId);
                if (genre === genreId) {
                    genreSection.style.display = 'flex';
                } else {
                    genreSection.style.display = 'none';
                }
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
