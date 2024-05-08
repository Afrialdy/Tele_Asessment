<?php
require 'koneksi.php';
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    // Jika login berhasil, ambil nama lengkap user dari hasil query
    $user = mysqli_fetch_assoc($result);
    $fullname = $user['fullname'];

    // Simpan nama lengkap user ke dalam session atau kirim sebagai parameter GET/POST
    // Di sini saya akan menyimpannya dalam session
    session_start();
    $_SESSION['fullname'] = $fullname;

    header("Location: ../index.php");
} else {
    echo "<script>
            alert('Login Gagal, silahkan coba lagi');
            window.location.href = 'login.html'; // redirect ke halaman login setelah alert ditutup
          </script>";
}
?>
