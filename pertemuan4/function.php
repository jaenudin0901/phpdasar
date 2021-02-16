<?php 
function salam($waktu ="Datang", $nama ="admin"){
	return"Selamat $waktu, $nama";
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan Function</title>
 </head>
 <body>
 <h1><?= salam("sore","Myesa"); ?></h1>
 <?php echo date("l, d M Y") ;?>
 </body>
 </html>