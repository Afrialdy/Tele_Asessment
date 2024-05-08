<?php
$servername = "localhost";
$database = "tele_asessment";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die ("Koneksi gagal : ".mysqli_connect_error());
} else {
    // Menambahkan pengecekan apakah koneksi.php diakses langsung atau tidak
    if(empty($_SERVER['HTTP_REFERER'])) {
        echo "<script>alert('Koneksi Berhasil');</script>";
    }
}
?>
