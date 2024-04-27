<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="script.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="header">
                <div class="logo">
                    <img src="asset/Logo.png" alt="" class="sc">
                </div>
            </div>
            <div class="main">
                <div class="list-item">
                    <a href="">
                        <img src="asset/🦆 icon _dashboard_.svg" alt="" class="icon">
                        <span class="description">Dashboard</span>    
                    </a>
                </div>
                <div class="list-item">
                    <a href="">
                        <img src="asset/Vector.svg" alt="" class="icon">
                        <span class="description">Search</span>    
                    </a>
                </div>
                <div class="list-item">
                    <a href="">
                        <img src="asset/🦆 icon _cog_.svg" alt="" class="icon">
                        <span class="description">Setting</span>    
                    </a>
                </div>
            </div>
        </div>
        <div class="main-content">
            <h1>Dashboard</h1>
            <div class="form-container">
                <!-- edit.php -->
                <form method="POST" action="update.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <input type="text" name="jenis" value="<?php echo $row['jenis']; ?>">
                    <input type="text" name="stok" value="<?php echo $row['stok']; ?>">
                    <button type="submit" class="btn">Update</button>
                </form>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>No ID</th>
                        <th>Jeruk</th>
                        <th>Stok</th>
                        <th class="actions">Actions</th>
                    </tr>
                </thead>
                <tbody id="dataTable"></tbody>
            </table>
        </div>
    </div>
    <?php
    echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a> | <a href='./control/delete.php?id=" . $row['id'] . "'>Hapus</a></td>";
    ?>
</body>
</html>
