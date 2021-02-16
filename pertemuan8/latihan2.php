<?php 	
$angka =[

	[1,2,3],

	[4,5,6],

	[7,8,9]

]; 

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>	latihan 2</title>
 	<style>
 		.kotak{
 			margin: 5px;
 			padding: 5px;
 			color: blue;
 			width: 30px;
 			height: 30px;
 			background-color: #111;
 			line-height: 30px;
 			text-align: center;
 			transition: 1s;
 			float: left;

 		}
 		.clear{
 			float: both;
 		}
 		.kotak:hover{
 			transform: rotate(360deg);
 			border-radius: 50%;
 		}
 	</style>
 </head>
 <body>

 		<?php 	foreach( $angka as $ang): ?>
 			<?php 	foreach( $ang as $ka): ?>
 	<div class="kotak">	<?= $ka 	 ?></div>	
 	<div class="clear">	</div>
 	<?php endforeach; ?>
 	<?php endforeach; ?>
 
 <div class="kotak"><?= $angka[1][1] 	 ?></div>
 
 </body>
 </html>