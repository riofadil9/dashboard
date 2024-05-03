<?php
include('../app/models/conn.php');

$query = "SELECT * FROM jeruk";
$result = mysqli_query($db, $query);

if(mysqli_num_rows($result) > 0){
    echo "<table border='1'>";
    echo "<tr><th>Nama Jeruk</th><th>Stok</th><th>Aksi</th></tr>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>". $row['namaJeruk']. "</td>";
        echo "<td>". $row['stok']. "</td>";
        echo "<td>";
        echo "<a href='update_jeruk.php?id=". $row['id']. "'>Edit</a> | ";
        echo "<a href='delete_jeruk.php?id=". $row['id']. "' onclick='return confirmDelete(".$row['id'].")'>Delete</a>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data";
}
?>

<script>
    function confirmDelete(id) {
        if(confirm("Apakah Anda yakin ingin menghapus data ini?")) {
            // Jika pengguna mengkonfirmasi, lakukan aksi penghapusan
            // Misalnya, Anda dapat mengirim permintaan AJAX ke skrip PHP yang menangani penghapusan
            console.log("Data dengan ID " + id + " akan dihapus");
        } else {
            // Jika pengguna membatalkan, tidak ada tindakan yang diambil
            console.log("Penghapusan dibatalkan");
            return false; // Mencegah href dieksekusi
        }
    }
</script>
