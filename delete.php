<?php
// Sambungkan ke database
require_once("koneksi.php");

// Ambil ID yang dikirimkan dari halaman index.php
$id = $_GET["id"];

// Query untuk menghapus data dari database
$sql = "DELETE FROM reporting WHERE id = '$id'";

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
