<?php 
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d M Y");
 
// Time
// UNIKX Timestamp/EPOCH time
// detik yang sudah berlalu sejak1 Januari 1979
// echo time();
// echo date ("d M Y", time()-60*60*24*100);



// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,3,17,2016));


// strtotime
echo date ("l", strtotime("17 mar 2016"));

 ?>