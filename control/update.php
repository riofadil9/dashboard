<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $jenis = $_POST['jenis'];
    $stok = $_POST['stok'];

    $query = "UPDATE jeruk SET jenis='$jenis', stok='$stok' WHERE id=$id";

    if ($koneksi->query($query) === TRUE) {
        echo "Data berhasil diupdate";
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }

    $koneksi->close();
}
?>
