<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'projectuas');

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk semua buku beserta statusnya
$sql = "
    SELECT 
        b.book_id,
        b.title,
        b.author,
        b.genre,
        CASE 
            WHEN l.status = 'pinjam' THEN 'Sedang Dipinjam'
            WHEN l.status = 'dikembalikan' THEN 'Sudah Dikembalikan'
            ELSE 'Belum Pernah Dipinjam'
        END AS loan_status
    FROM 
        books b
    LEFT JOIN 
        loans l 
    ON 
        b.book_id = l.book_id;
";

$result = $conn->query($sql);

// Tampilkan data dalam tabel HTML
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID Buku</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Genre</th>
                <th>Status</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['book_id']}</td>
                <td>{$row['title']}</td>
                <td>{$row['author']}</td>
                <td>{$row['genre']}</td>
                <td>{$row['loan_status']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data buku.";
}

// Tutup koneksi
$conn->close();
?>
