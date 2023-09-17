<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Reporting</title>
    <!-- Tambahkan link Bootstrap CDN di sini -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="my-4">Edit Data Reporting</h2>
        <?php
        // Sambungkan ke database
        require_once("koneksi.php");

        // Ambil ID yang dikirimkan dari halaman index.php
        $id = $_GET["id"];

        // Query untuk mengambil data berdasarkan ID
        $sql = "SELECT * FROM reporting WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            ?>
            <form method="POST" action="update.php" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="form-group">
                    <label for="term">Term:</label>
                    <input type="text" class="form-control" id="term" name="term" value="<?php echo $row['term']; ?>">
                </div>
                <div class="form-group">
                    <label for="santri_name">Santri Name:</label>
                    <input type="text" class="form-control" id="santri_name" name="santri_name" value="<?php echo $row['santri_name']; ?>">
                </div>
                <div class="form-group">
                    <label for="teacher_name">Teacher Name:</label>
                    <input type="text" class="form-control" id="teacher_name" name="teacher_name" value="<?php echo $row['teacher_name']; ?>">
                </div>
                <div class="form-group">
                    <label for="level">Level:</label>
                    <input type="text" class="form-control" id="level" name="level" value="<?php echo $row['level']; ?>">
                </div>
                <div class="form-group">
                    <label for="pertemuan">Meet:</label>
                    <input type="text" class="form-control" id="pertemuan" name="pertemuan" value="<?php echo $row['pertemuan']; ?>">
                </div>
                <div class="form-group">
                    <label for="study_priode">Study Priode:</label>
                    <input type="date" class="form-control" id="study_priode" name="study_priode" value="<?php echo $row['study_priode']; ?>">
                </div>
                <div class="form-group">
                    <label for="foto">Unggah Foto:</label>
                    <input type="file" class="form-control-file" id="foto" name="foto">
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="index.php" class="btn btn-secondary">Kembali</a>
            </form>
            <?php
        } else {
            echo "Data tidak ditemukan.";
        }

        // Tutup koneksi database
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>
