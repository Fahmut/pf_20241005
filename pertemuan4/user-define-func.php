<?php 
function salam($waktu, $nama){
    return "selamat $waktu, $nama";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>latihan function</title>
</head>
<body>
    <h1><?= salam("pagi", "administrator");0 ?></h1>
</body>
</html>