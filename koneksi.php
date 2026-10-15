<?php
$host       =  "localhost";
$user       =  "root";
$password   =  "";
$database   =  "db_poliklinik";

$koneksi    = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
    die("Koneksi Terputus: " . mysqli_connect_error());
}
?>