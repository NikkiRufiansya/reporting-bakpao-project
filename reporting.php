<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data Reporting</title>
    <!-- Tambahkan link Bootstrap CDN di sini -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">

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

            <div class="row">
                <div class="col-6 col-sm-6">
                    <img src="logo.png" width="300" alt="" srcset="">
                </div>
                <div class="col-6 col-sm-6">
                    <h1 class="text-right" style="margin-top: 30px;"><span style="color: black;">TERM :</span> <span
                            style="color: #7587f3;">
                            <?php echo $row['term']; ?>
                        </span></h1>
                </div>
            </div>

            <h1 class="text-center" style="color: #7587f3">DAILY REPORT</h1>

            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h4>Santri's Name : 
                            <?php echo $row['santri_name']; ?>
                        </h4>
                    </div>
                    <div class="col-6">
                        <h4>Level : 
                            <?php echo $row['level']; ?>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h4>Teacher's Name :
                            <?php echo $row['teacher_name']; ?>
                        </h4>
                    </div>
                    <div class="col-6">
                        <h4>Study Priode : 
                            <?php echo $row['pertemuan']; ?> &nbsp; <?php echo $row['study_priode']; ?>
                        </h4>
                    </div>
                </div>
            </div>


            

            


            <div class="form-group">
                <label for="santri_name">Santri Name:</label>
                <span id="santri_name">
                    <?php echo $row['santri_name']; ?>
                </span>
            </div>
            <div class="form-group">
                <label for="teacher_name">Teacher Name:</label>
                <span id="teacher_name">
                    <?php echo $row['teacher_name']; ?>
                </span>
            </div>
            <div class="form-group">
                <label for="level">Level:</label>
                <span id="level">
                    <?php echo $row['level']; ?>
                </span>
            </div>
            <div class="form-group">
                <label for="pertemuan">Pertemuan:</label>
                <span id="pertemuan">
                    <?php echo $row['pertemuan']; ?>
                </span>
            </div>
            <div class="form-group">
                <label for="study_priode">Study Priode:</label>
                <span id="study_priode">
                    <?php echo $row['study_priode']; ?>
                </span>
            </div>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
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