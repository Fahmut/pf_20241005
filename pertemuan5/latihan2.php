<?php 
//menampilkan isi array dengan for | foreach
$angka = [2,3,45,23,5,1,5,6,8,77,12];
$numbers = [2,3,45,23,5,1,5,6,8,77,12];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: grey;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
        
            <?php 
            for( $i =0; $i < count($angka);$i++):
            ?>
        <div class="kotak"><?= $angka[$i] ?></div>
        <?php endfor; ?>

        <div class="clear"></div>

        <?php foreach( $numbers as $number) : ?>
            <div class="kotak"><?= $number ?></div>
            <?php endforeach; ?>
</body>
</html>