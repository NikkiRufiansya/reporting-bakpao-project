<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    // Sambungkan ke database
    require_once("koneksi.php");

    // Ambil ID yang dikirimkan melalui parameter GET
    $id = $_GET["id"];

    // Query untuk mengambil nama file foto yang akan dihapus
    $sql_select_foto = "SELECT foto FROM reporting WHERE id='$id'";
    $result = mysqli_query($conn, $sql_select_foto);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $foto = $row['foto'];

        // Hapus file foto dari folder
        $target_dir = "foto/"; // Sesuaikan dengan folder tempat menyimpan foto
        $file_path = $target_dir . $foto;

        if (unlink($file_path)) {
            // Query untuk menghapus data dari database
            $sql_delete = "DELETE FROM reporting WHERE id='$id'";
            if (mysqli_query($conn, $sql_delete)) {
                mysqli_close($conn);
                header("Location: index-1.php");
                exit();
            } else {
                echo "Error: " . $sql_delete . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Gagal menghapus file dari folder.";
        }
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "Permintaan tidak valid.";
}
?>
