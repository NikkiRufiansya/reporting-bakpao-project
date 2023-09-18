<?php
// Sambungkan ke database
session_start();
if (isset($_SESSION["user_id"])) {
    header("location: index-1.php");
    exit();
}

require_once("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user["password"])) {
            // Login berhasil
            session_start();
            $_SESSION["user_id"] = $user["id"];
            header("location: index-1.php");
            exit();
        } else {
            $login_error = "Kata Sandi Salah";
        }
    } else {
        $login_error = "Email tidak ditemukan";
    }
}
?>
