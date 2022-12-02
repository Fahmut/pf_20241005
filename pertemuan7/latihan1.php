<?php 
//variabel scope / lingkup variabel 
//$x =10 // $x merupakan variabel gloal untuk 1 file saja

//function tampilX ()
// $x =20; //

$mahasiswa = [
    [
        "nama" => "ocit",
        "nim" => "1234213",
        "email" => "citbokep@gmail.com",
        "jurusan" => "pti"
    ],
    [
        "nama" => "oyiiiik",
        "nim" => "5412323",
        "email" => "kkcantik@gmail.com",
        "jurusan" => "pti"
    ],
    [
        "nama" => "mad sipaling jago",
        "nim" => "232134",
        "email" => "madbot@gmail.com",
        "jurusan" => "pti",
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>latihan</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs): ?>
            <li>
                <a href="latihan2.php?nama=<?=$mhs["nama"]?>& nim=<?=$mhs["nim"]?>&jurusan=<?=$mhs["jurusan"]?>&email=<?=$mhs["email"]?>">
                <?= $mhs ["nama"]; ?></a>
            </li> 
            <?php endforeach; ?>
    </ul>
</body>
</html>