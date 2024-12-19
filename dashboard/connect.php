<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "tanahlongsor";
$port = 3307;

$koneksi = mysqli_connect($host, $user, $pass, $db, $port);
if (!$koneksi) {
    die("Tidak bisa terkoneksi ke database");
}

?>