<?php 

$mobil=[

	['jenis'=>'sedan',
		'nopol'=>'B123ADC',
		'warna'=>'hitam',
		'norangka'=>'axd1234',
		'nomesin'=>'wrs2345',
		'gambar'=>'img/car-1.jpg'
	],

	['jenis'=>'jeep',
	'nopol'=>'B3456ASA',
	'warna'=>'BIRU',
	'norangka'=>'axd56789',
	'nomesin'=>'wrs23333',
		'gambar'=>'img/car-2.jpg'
	],

	['jenis'=>'minibus',
	'nopol'=>'B8973ADC',
	'warna'=>'merah',
	'norangka'=>'axd1666',
	'nomesin'=>'wsds55',
		'gambar'=>'img/car-3.jpg'
		],

	['jenis'=>'sport',
	'nopol'=>'D12445DC',
	'warna'=>'pink',
	'norangka'=>'axqqt222',
	'nomesin'=>'w1212dd45',
	'gambar'=>'img/car-4.jpg'
	],

	['jenis'=>'clasik',
	'nopol'=>'A 1223 ADC',
	'warna'=>'Kunig',
	'norangka'=>'Qw1222',
	'nomesin'=>'w123345',
'gambar'=>'img/car-5.jpg'
],

	['jenis'=>'STSC',
	'nopol'=>'B 1111 ADC',
	'warna'=>'hitam',
	'norangka'=>'a424',
	'nomesin'=>'wr32425',
'gambar'=>'img/car-6.jpg'],

	['jenis'=>'Minicooper',
	'warna'=>'Merah Marun',
	'nopol'=>'B121mxc',
	'norangka'=>'a11134',
	'nomesin'=>'wasda345',
'gambar'=>'img/car-7.jpg'
],

	['jenis'=>'ddsn',
	'nopol'=>'B12222 dC',
	'warna'=>'hitam',
	'norangka'=>'ayy234',
	'nomesin'=>'wrsyttt66',
'gambar'=>'img/car-9.jpg'
],

	['jenis'=>'Tank',
	'nopol'=>'B22333C',
	'warna'=>'Coklat',
	'norangka'=>'swd111234',
	'nomesin'=>'w121',
'gambar'=>'img/car-9.jpg'
],

	['jenis'=>'Bus',
	'nopol'=>'B15557 C',
	'warna'=>'hijau',
	'norangka'=>'a1134',
	'nomesin'=>'4456hhyh',
'gambar'=>'img/car-10.jpg'
]

];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 8</title>
 	<style >
 		/*.gambar{
 			width: 50px;
 			height: 50px;
 		}*/
 		img{
 			width: 150px;
 			height: 130px;
 		}
 	</style>
 </head>
 <body>
 	 <ul>
 	 	<?php foreach( $mobil as $mbl): ?>
 	 	<li>Jenis: <?= $mbl['jenis']; ?></li>
 	 	<li>Nopl : <?= $mbl['nopol']; ?></li>
 	 	<li>Warna :<?= $mbl['warna']; ?>  </li>
 	 	<li>norangka:<?= $mbl['norangka']; ?></li>
 	 	<li>nomesin : <?= $mbl['nomesin']; ?></li>
 	 	<li class="gambar"> gambar:
 	 		<img src="<?= $mbl['gambar']; ?>"> ;
 	 	 </li>
 	 	<br>

 	 <?php endforeach; ?>
 	 </ul>
 
 </body>
 </html>