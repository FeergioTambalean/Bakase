<?php
include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];

if (empty($username)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
}
else if (empty($password)){
        echo "<script>alert('Password belum diisi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=index.php'>";
        }
else{
     session_start();
     $login = mysql_query("select * from login where username='$username' and password='$password' AND level='$level'");
			if (mysql_num_rows($login) > 0){
				$_SESSION['username'] = $username;
				$_SESSION['level'] = $level;
				if ($level == 'admin') {
					header("Location: admin/index.php");
				} else {
					header("Location: mahasiswa/index.php");
				}
				exit(); // Penting untuk menghentikan eksekusi skrip lebih lanjut setelah pengalihan
				header("location:admin/index.php");
			}
			else{
				echo "<script>alert('Username atau Password anda salah')</script>";
				echo "<meta http-equiv='refresh' content='1 url=index.php'>";
			}
}
?>