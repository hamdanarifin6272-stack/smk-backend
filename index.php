
<?php
// 1. Pengaturan koneksi database
$host = "localhost";
$username = "root";
$password = "";
$database = "smk";

// 2. Membuat koneksi ke MySQL
$conn = new mysqli($host, $username, $password, $database);

// 3. Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

// 4. Menampilkan pesan koneksi berhasil
echo "<h2>Koneksi database berhasil!</h2>";

// 5. Mengambil data dari tabel anggota
$sql = "SELECT id, nama, kelas FROM anggota ORDER BY id ASC";
$result = $conn->query($sql);

// 6. Menampilkan data anggota
echo "<h3>Daftar Anggota</h3>";

if ($result && $result->num_rows > 0) {
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><th>ID</th><th>Nama</th><th>Kelas</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["nama"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["kelas"]) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p>Belum ada data anggota.</p>";
}

// 7. Menutup koneksi
$conn->close();
?>
