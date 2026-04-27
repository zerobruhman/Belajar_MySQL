<?php
$host = "localhost";
$user = "root";
$password = ""; 
$db   = "belajarmysql";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}