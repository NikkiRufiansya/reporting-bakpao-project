<?php
session_start();
session_destroy(); // Hapus semua data sesi (session)

// Redirect ke halaman login setelah logout
header("location: index.php");
exit();
?>
