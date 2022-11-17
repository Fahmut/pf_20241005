<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        .warna-baris {
            background-color: aqua;
        }
    </style>
</head>
<body>
    <br>
    <table border="1" cellpadding="10" cellsapcing="0">
        <?php  for($i = 1; $i <= 3; $i++) :?>
            <?php if ( $i % 2 == 1 ) :?>
            <tr class="warna-baris">
                <?php else :?>
                    <tr>
                <?php endif; ?>
                <?php for ($j = "1"; $j <= 3; $j++) :?>
                    <td><?= "$i, $j"; ?> </td>
                    <?php endfor ?>
            </tr>
       
        <?php endfor; ?>
    </table>
</body>
</html>