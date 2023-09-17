<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Reporting</title>
    <!-- Tambahkan link Bootstrap CDN di sini -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="my-4">Tambah Data Reporting</h2>
        <form method="POST" action="insert.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="term">Term:</label>
                <input type="text" class="form-control" id="term" name="term">
            </div>
            <div class="form-group">
                <label for="santri_name">Santri Name:</label>
                <input type="text" class="form-control" id="santri_name" name="santri_name">
            </div>
            <div class="form-group">
                <label for="teacher_name">Teacher Name:</label>
                <input type="text" class="form-control" id="teacher_name" name="teacher_name">
            </div>
            <div class="form-group">
                <label for="level">Level:</label>
                <input type="text" class="form-control" id="level" name="level">
            </div>
            <div class="form-group">
                <label for="pertemuan">Meet:</label>
                <input type="text" class="form-control" id="pertemuan" name="pertemuan">
            </div>
            <div class="form-group">
                <label for="study_priode">Study Priode:</label>
                <input type="date" class="form-control" id="study_priode" name="study_priode">
            </div>
            <div class="form-group">
                <label for="foto">Unggah Foto:</label>
                <input type="file" class="form-control-file" id="foto" name="foto">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
