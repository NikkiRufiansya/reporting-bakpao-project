<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("location: index.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Reporting Ms Zeva</title>
    <!-- Tambahkan link Bootstrap CDN di sini -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="my-4">Data Reporting Ms Zeva</h2>
        <a href="add.php" class="btn btn-primary mb-3">Tambah Data</a>
        <a href="logout.php" class="btn btn-danger mb-3">Logout</a>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Term</th>
                    <th>Santri Name</th>
                    <th>Teacher Name</th>
                    <th>Level</th>
                    <th>Pertemuan</th>
                    <th>Study Priode</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Sambungkan ke database
                require_once("koneksi.php");

                // Query untuk mengambil data dari tabel reporting
                $sql = "SELECT * FROM reporting ORDER BY id DESC;
                ";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    $no = 1; // Inisialisasi variabel nomor
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>"; // Menampilkan nomor secara otomatis
                        echo "<td>" . $row['term'] . "</td>";
                        echo "<td>" . $row['santri_name'] . "</td>";
                        echo "<td>" . $row['teacher_name'] . "</td>";
                        echo "<td>" . $row['level'] . "</td>";
                        echo "<td>" . $row['pertemuan'] . "</td>";
                        echo "<td>" . $row['study_priode'] . "</td>";
                        echo "<td>";
                        echo "<a href='reporting.php?id=" . $row['id'] . "' class='btn btn-info'>Reporting</a> ";
                        echo "<a href='edit.php?id=" . $row['id'] . "' class='btn btn-warning'>Edit</a> ";
                        echo "<a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Hapus</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>Tidak ada data.</td></tr>";
                }

                // Tutup koneksi database
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
