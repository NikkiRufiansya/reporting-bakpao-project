<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data Reporting</title>
    <!-- Tambahkan link Bootstrap CDN di sini -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>

<body>
    <div class="container" style="margin-bottom:350px;">

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

            <h1 class="text-center" style="color: #7587f3; margin-bottom: 50px;"><strong>DAILY REPORT</strong></h1>


            <div class="container" style="margin-bottom: 20px;">
                <div class="row">
                    <div class="col-7">
                        <h4>Santri's Name :
                            <?php echo $row['santri_name']; ?>
                        </h4>
                    </div>
                    <div class="col-5">
                        <h4>Level :
                            <?php echo $row['level']; ?>
                        </h4>
                    </div>
                </div>
            </div>

            <div class="container" style="margin-bottom: 20px;">
                <div class="row">
                    <div class="col-7">
                        <h4>Teacher's Name :
                            <?php echo $row['teacher_name']; ?>
                        </h4>
                    </div>
                    <div class="col-5">
                        <h4>Study Period :
                            <?php echo $row['pertemuan']; ?> &nbsp;
                            <?php echo $row['study_priode']; ?>
                        </h4>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-7">
                        <img class="rounded rounded-20" src="foto/<?php echo $row['foto']; ?>" alt="Foto"
                            style="max-width: 400px; rounded-20">
                    </div>
                    <div class="col-4">
                        <div class="card bg-light">
                            <div class="card-body">
                                <h5 class="card-title">Subject Matter</h5>
                                <p class="card-text">
                                    <?php echo $row['subject_matter']; ?>
                                </p>

                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="card bg-light">
                            <div class="card-body">
                                <h5 class="card-title">General Comment</h5>
                                <p class="card-text">
                                    <?php echo $row['general_comment']; ?>
                                </p>

                            </div>
                        </div>


                    </div>
                </div>
            </div>


            <!-- <a href="index.php" class="btn btn-secondary">Kembali</a> -->
            <?php
        } else {
            echo "Data tidak ditemukan.";
        }

        // Tutup koneksi database
        mysqli_close($conn);
        ?>
    </div>




    <footer style="background-color: #e86548; color: white;">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-6" style="margin: 10px;">
                    <p style="color:#ffdc7c;"><i class="fa fa-phone" style="margin-right: 10px; color: #ffdc7c;"></i> +6281213419253</p>

                    <p style="color:#ffdc7c;"><i class="fa fa-envelope" style="margin-right: 10px;color: #ffdc7c;"></i> iqralabs@gmail.com</p>
                    <p style="color:#ffdc7c;"><i class="fa fa-globe" style="margin-right: 10px;color: #ffdc7c;"></i> www.iqralabs.co.id</p>
                    <p style="color:#ffdc7c;"><i class="fa fa-map-marker" style="margin-right: 10px;color: #ffdc7c;"></i> Jalan Cirendeu Raya No.38C
                        Kelurahan Pisangan Kecamatan Ciputat Timur Kota Tanggerang Selatan</p>
                </div>
               
                <div style="position: relative; margin-top: 50px;">
                    <img src="pita-kuning.png" width="700" alt="" srcset=""
                        style="position: absolute;bottom: 0;left: 0;">
                </div>
            </div>
        </div>
    </footer>


</body>

</html>