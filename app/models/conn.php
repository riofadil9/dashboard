<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "si_citrus";

$db = mysqli_connect($server, $user, $password, $nama_database);

if(!$db ){
    die("Gagal terhubung ke database");
}
?>