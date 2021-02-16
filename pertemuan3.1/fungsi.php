<!DOCTYPE html>
<html>
<head>
	<title> latihan function</title>
</head>
<body>

<?php 

// bulit-in function

// for ($i=0; $i <26 ; $i++) { 
// 	echo chr(65+$i);
// 	if ($i<25) echo " | ";
// }

// user defined f
// function sapa_halo($nama){
// 	 return "hallo, $nama";
// }
// $sapa = sapa_halo('ageng');
// $sapa = sapa_halo('agung');
// echo $sapa;

// external f


function selisih ($a, $b){
	if ($a>$b) 
		$hasil=$a-$b;
	else
		$hasil=$b-$a;
	return $hasil;
}
$bil1=200;
$bil2=1000;
$hasil=selisih($bil1, $bil2);
echo "selisih antaran $bil1 dan $bil2 adalah $hasil";
 ?>
 <?php 

  ?>
</body>
</html>