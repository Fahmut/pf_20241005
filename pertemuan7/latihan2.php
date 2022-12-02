<?php 
//cek apakah ada data di $_GET
if(!isset($_GET["nama"])||
    !isset($_GET["nim"])||
    !isset($_GET["jurusan"])||
    !isset($_GET["email"])){
         //redirect
    header("location: latihan1.php");
    exit;
    }
   
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li>nama: <?= $_GET["nama"]; ?></li>
        <li>nama: <?= $_GET["nim"]; ?></li>
        <li>nama: <?= $_GET["jurusan"]; ?></li>
        <li>nama: <?= $_GET["email"]; ?></li>
    </ul>

    <a href="latihan1.php">kembali.........</a>
</body>
</html>