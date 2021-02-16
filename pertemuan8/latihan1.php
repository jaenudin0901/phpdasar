<?php 
$students=[
	['12140085','Jaenudin','Jaenudin@gmail.com','Sistem Informasi',
	'dospem'['Pak Wahyu','Bu Wahyu'],
	],

	['14140045','Hendra Setiawan','hendra@gmail.co.id','Tehnik Informatika',
	'dospem'['Pak Wahyu','Bu Wahyu']
	]

];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>latihan 1</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<?php foreach ($students as $student):?>
	<ul>
		<li><?=   $student[0]; ?></li>
		<li><?=   $student[1]; ?></li>
		<li><?=   $student[2]; ?></li>
		<li><?=   $student[3]; ?></li>
		<li><?=   $student[4][0]; ?></li>
	</ul>
<?php endforeach; ?>

</body>
</html>