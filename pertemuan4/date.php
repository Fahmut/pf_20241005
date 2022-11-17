<?php 
//date
//menampilkan tanggal dengan format tertentu
//echo date ("l, d-M-Y");
//time
//UNIX Timestep / EPOCH  time
//detik yang sudah berlaku sejak 1 januari 1970
//echo time();
//echo date ("l d M y", time()-60*60*24*1000);
//mktime
//membuat sendiri detik dari 1 januari 1970 sampai waktu yang di inginkan
//mktime(0,0,0,0,0,0)
//jam,menit,detik, bulan,tanggal, tahun
//echo mktime(0,0,0,7,18,1999);
//strtotime
$date = strtotime("18 jul 1995");
echo date("l d M Y", strtotime("now"));

?>