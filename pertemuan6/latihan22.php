<?php 
//array asosiatif
// definisinya sama dengan array numerik, kecuali
// key-nya adalah string, yang kita buat sendiri

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
        "nama" => "madbot",
        "nim" => "232134",
        "email" => "madbot@gmail.com",
        "jurusan" => "pti",
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>array asosiatif</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs): ?>
        <ul>
            <li>nama : <?= $mhs ["nama"]; ?></li>
            <li>nim : <?= $mhs ["nim"]; ?></li>
            <li>jurusan : <?= $mhs ["jurusan"]; ?></li>
            <li>email : <?= $mhs ["email"]; ?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>