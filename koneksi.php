<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "bakas";

// Koneksi dan memilih database di server

mysql_connect($server,$username,$password)or die("koneksi gagal");
mysql_select_db($database) or die("database tidak ditemukan");


?>
