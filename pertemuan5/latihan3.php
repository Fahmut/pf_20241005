<?php 
//array multidimensi
//array di dalam array
$mahasiswa =[
    ["Zuhri fahmi", "378237939", "pti", "fahmi@gmail.com"],
    ["ocit", "933973973", "pti", "ocitbokep@gmail.com"],
    ["oyiik", "36723618","pti", "kkcantik@gmail.com"]
];

var_dump($mahasiswa)
?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>latihan array multidimensi</title>
</head>
<body>
    <h1>Daftar Biodata Mahasiswa</h1>

    <ul>
        <?php foreach ($mahasiswa as $mhs) :?>
        <li>nama : <?= $mhs [0];?></li>
        <li>Nim : <?= $mhs [1];?></li>
        <li>Jurusan : <?= $mhs [2];?></li>
        <li>Emai : <?= $mhs [3];?></li> <br>
        <?php endforeach; ?>
    </ul>
    <div class="clear"></div>
</body>
</html>