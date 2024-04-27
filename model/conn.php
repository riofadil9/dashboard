<?php
$host = 'localhost'; // Ganti dengan host Anda
$username = 'username'; // Ganti dengan username MySQL Anda
$password = 'password'; // Ganti dengan password MySQL Anda
$database = 'nama_database'; // Ganti dengan nama database Anda

$koneksi = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>