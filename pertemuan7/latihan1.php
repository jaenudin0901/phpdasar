<?php
//  variable scope / lingkup variable

// $x = 10;
// function tampil(){
// 	global $x;
// 	echo $x;
// } 

// tampil();

// $_GET
// $_GET["nama"] = "jaeunudin";
// $_GET["nrp"] = "12140085";
// var_dump($_GET);
?>
<?php

$cars = [

	[
		'jenis' => 'sedan',
		'nopol' => 'B123ADC',
		'warna' => 'hitam',
		'norangka' => 'axd1234',
		'nomesin' => 'wrs2345',
		'gambar' => 'img/car-1.jpg'
	],

	[
		'jenis' => 'jeep',
		'nopol' => 'B3456ASA',
		'warna' => 'BIRU',
		'norangka' => 'axd56789',
		'nomesin' => 'wrs23333',
		'gambar' => 'img/car-2.jpg'
	]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GET</title>
	<style>
		img {
			width: 200px;
			height: 120px;
		}
	</style>
</head>

<body>
	<h1>Daftar Mobil</h1>
	<?php foreach ($cars as $car) : ?>
		<ul>
			<li><a href="latihan2.php?gambar=<?= $car['gambar']; ?>& jenis=<?= $car['jenis']; ?>& nopol=<?= $car['nopol']; ?>& warna=<?= $car['warna']; ?>"><img src="<?= $car['gambar']; ?>"></a></li>
			<!-- <li><?= $car['jenis']; ?></li>
			<li><?= $car['nopol']; ?></li>
			<li><?= $car['warna']; ?></li> -->
		</ul>
	<?php endforeach; ?>
</body>

</html>