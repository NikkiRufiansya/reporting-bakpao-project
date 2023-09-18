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
                <label for="santri_name">Santri's Name:</label>
                <input type="text" class="form-control" id="santri_name" name="santri_name">
            </div>
            <div class="form-group">
                <label for="teacher_name">Teacher's Name:</label>
                <input type="text" class="form-control" id="teacher_name" readonly value="Ms. Zeva" name="teacher_name">
            </div>
            <div class="form-group">
                <label for="level">Level:</label>
                <select class="form-control" id="level" name="level">
                    <option value="Bee">Bee</option>
                    <option value="Hoopoe">Hoopoe</option>
                    <option value="Sheep">Sheep</option>
                </select>
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

            <div class="form-group">
                <label for="subject_matter">Subject Matter</label>
                <textarea name="subject_matter" class="texteditor"></textarea>
            </div>

            <div class="form-group">
                <label for="general_comment">General Comment</label>
                <textarea name="general_comment" class="texteditor"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <!-- panggil jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="ckeditor/adapters/jquery.js"></script>

    <script type="text/javascript">
        $('textarea.texteditor').ckeditor();
    </script>
</body>

</html>