<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sambungkan ke database
    require_once("koneksi.php");

    // Ambil data dari form
    $term = $_POST["term"];
    $santri_name = $_POST["santri_name"];
    $teacher_name = $_POST["teacher_name"];
    $level = $_POST["level"];
    $pertemuan = $_POST["pertemuan"];
    $study_priode = $_POST["study_priode"];

    // Untuk mengunggah foto
    $foto = $_FILES["foto"]["name"];
    $tmp_foto = $_FILES["foto"]["tmp_name"];
    $target_dir = "uploads/"; // Folder tempat menyimpan foto
    $target_file = $target_dir . basename($foto);

    // Pindahkan foto yang diunggah ke folder uploads
    if (move_uploaded_file($tmp_foto, $target_file)) {
        // Query untuk menyimpan data ke database
        $sql = "INSERT INTO reporting (term, santri_name, teacher_name, level, pertemuan, study_priode, foto) VALUES ('$term', '$santri_name', '$teacher_name', '$level', '$pertemuan', '$study_priode', '$foto')";

        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Gagal mengunggah file.";
    }
}
?>
