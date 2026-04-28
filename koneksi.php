<?php
$host       = "localhost";
$user       = "root";
$password   = "";
$db_name    = "db_empatde";

// membuat koneksi
$koneksi = mysqli_connect($host, $user, $password, $db_name);

// cek koneksi
if (mysqli_connect_errno()) {
    echo " Koneksi database gagal : " . mysqli_connect_errno();
}
?>