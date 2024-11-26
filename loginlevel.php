<?php
session_start(); // Pastikan untuk memulai sesi
// Koneksi ke database MySQL (gunakan fungsi mysql_ yang sudah usang)
include "koneksi.php";

// Variabel username, password, dan level diambil dari input pengguna melalui formulir
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level']; // Ambil nilai level dari dropdown
// Query SQL menggunakan mysql_query (perhatikan bahwa ini rentan terhadap SQL injection)
$login = mysql_query("SELECT * FROM login WHERE username='$username' AND password='$password' AND level='$level'");
// Periksa apakah ada baris yang cocok ditemukan
if (mysql_num_rows($login) > 0) {
    // Ambil data pengguna
    $data = mysql_fetch_assoc($login);
    $username = $data['username'];
    $level = $data['level'];

    // Set session untuk username dan level
    $_SESSION['username'] = $username;
    $_SESSION['level'] = $level;
	

    // Redirect sesuai tingkat akses
    if ($level == 'admin') {
        header("Location: admin/index.php");
    } else {
        header("Location: user/index.php");
    }
    exit(); // Penting untuk menghentikan eksekusi skrip lebih lanjut setelah pengalihan
	} else {
    		echo "<script>alert('Username atau Password atau Level anda salah')</script>";
    		echo "<meta http-equiv='refresh' content='1;url=index.php'>";
}