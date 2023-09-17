<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sambungkan ke database
    require_once("koneksi.php");

    // Ambil data dari form
    $id = $_POST["id"];
    $term = $_POST["term"];
    $santri_name = $_POST["santri_name"];
    $teacher_name = $_POST["teacher_name"];
    $level = $_POST["level"];
    $pertemuan = $_POST["pertemuan"];
    $study_priode = $_POST["study_priode"];

    // Periksa apakah ada file gambar yang diunggah
    if ($_FILES["foto"]["name"]) {
        $foto = $_FILES["foto"]["name"];
        $tmp_foto = $_FILES["foto"]["tmp_name"];
        $target_dir = "uploads/"; // Folder tempat menyimpan foto
        $target_file = $target_dir . basename($foto);

        // Pindahkan foto yang diunggah ke folder uploads
        move_uploaded_file($tmp_foto, $target_file);

        // Update data dengan foto baru
        $sql = "UPDATE reporting SET term = '$term', santri_name = '$santri_name', teacher_name = '$teacher_name', level = '$level', pertemuan = '$pertemuan', study_priode = '$study_priode', foto = '$foto' WHERE id = '$id'";
    } else {
        // Update data tanpa mengubah foto
        $sql = "UPDATE reporting SET term = '$term', santri_name = '$santri_name', teacher_name = '$teacher_name', level = '$level', pertemuan = '$pertemuan', study_priode = '$study_priode' WHERE id = '$id'";
    }

    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
