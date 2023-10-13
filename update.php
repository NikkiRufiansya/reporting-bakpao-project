<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sambungkan ke database
    require_once("koneksi.php");

    // Ambil ID yang dikirimkan dari halaman reporting.php
    $id = $_POST["id"];

    // Ambil data dari form
    $term = $_POST["term"];
    $santri_name = $_POST["santri_name"];
    $teacher_name = $_POST["teacher_name"];
    $level = $_POST["level"];
    $pertemuan = $_POST["pertemuan"];
    $study_priode = $_POST["study_priode"];
    $subject_matter = $_POST["subject_matter"];
    $general_comment = $_POST["general_comment"];
    
    // Untuk mengunggah foto baru
    $foto = $_FILES["foto"]["name"];
    $tmp_foto = $_FILES["foto"]["tmp_name"];
    $target_dir = "foto/"; // Folder tempat menyimpan foto

    // Menghasilkan nama file unik
    $unique_filename = uniqid() . '_' . $foto;
    $target_file = $target_dir . $unique_filename;

    

    // Error handling
    if ($_FILES["foto"]["error"] !== UPLOAD_ERR_OK) {
        echo "Error during file upload. Error code: " . $_FILES["foto"]["error"];
    } elseif (!is_uploaded_file($tmp_foto)) {
        echo "File tidak diunggah dengan benar.";
    } elseif (move_uploaded_file($tmp_foto, $target_file)) {
        // File berhasil dipindahkan
        // Hapus file lama (jika ada)
        $sql_select_old_foto = "SELECT foto FROM reporting WHERE id='$id'";
        $result = mysqli_query($conn, $sql_select_old_foto);

        if ($result && mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $old_foto = $row['foto'];
            // Hapus file lama
            if (file_exists($target_dir . $old_foto)) {
                unlink($target_dir . $old_foto);
            }
        }



        // Query untuk mengupdate data di database
        $sql = "UPDATE reporting SET term='$term', 
        santri_name='$santri_name', 
        teacher_name='$teacher_name', 
        level='$level', 
        pertemuan='$pertemuan', 
        study_priode='$study_priode', 
        foto='$unique_filename', 
        subject_matter='$subject_matter',
        general_comment='$general_comment' 
        WHERE id='$id'";

        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            header("Location: index-1.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Gagal memindahkan file.";
    }
}
?>
