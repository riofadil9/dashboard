<?php
include 'koneksi.php';

$query = "SELECT * FROM jeruk";
$result = $koneksi->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['jenis'] . "</td>";
        echo "<td>" . $row['stok'] . "</td>";
        echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
        echo "</tr>";
    }
} else {
    echo "Tidak ada data";
}

$koneksi->close();
?>
