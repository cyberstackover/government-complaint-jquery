<?php
$server = "103.27.206.194"; //nama server
$username = "herwinti_nitip"; // username 
$password = "Nitip1234"; //  standarnya kosong
$database = "herwinti_nitip"; // buat nama database harus sama 
error_reporting(E_ALL ^ E_DEPRECATED);
// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
?>