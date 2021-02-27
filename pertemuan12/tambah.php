<?php 

require 'functions.php';
// $conn = mysqli_connect("localhost", "root", "", "phpdasar");

 //cek apakah tombol submit sudah di klik atau belum 

if(isset($_POST["submit"])){

	// cek apakah data berhasil di tambah atau tidak
	if(tambah($_POST) > 0){
		echo "
		<script>alert('data berhasil ditambahkan');
		document.location.href = 'index.php';
		</script>";
	} else{
		echo "
		<script>alert('data gagal ditambahkan');
		document.location.href = 'index.php';
		</script>";
	}
}




?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
</head>
<body>
	<h1>Tambah Data Mahasiswa</h1>

	<form action="" method="post">

		<ul>
			<li>
				<label for="nrp">NRP :</label>
				<input type="text" name="nrp" id="nrp">
			</li>
			<li>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama">
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="text" name="email" id="email">
			</li>
			<li>
				<label for="jurusan">Jurusan :</label>
				<input type="text" name="jurusan" id="jurusan">
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="text" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data</button>
			</li>
		</ul>
		
	</form>

</body>
</html>