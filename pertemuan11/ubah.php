<?php 

require 'functions.php';

$id = $_GET["id"];

// query data berdasarkan id

$mhs = query("SELECT * FROM mahasiswa WHERE id =$id")[0];

 //cek apakah tombol submit sudah di klik atau belum 

if(isset($_POST["submit"])){

	// cek apakah data berhasil di ubah atau tidak
	if( ubah($_POST) > 0){
		echo "
		<script>alert('data berhasil diubah!');
		document.location.href = 'index.php';
		</script>";
	} else{
		echo "
		<script>alert('data gagal diubah!');
		document.location.href = 'index.php';
		</script>";
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Mahasiswa</title>
</head>
<body>
	<h1>Ubah Data Mahasiswa</h1>

	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $mhs["id"];  ?>">

		<ul>
			<li>
				<label for="nrp">NRP :</label>
				<input type="text" name="nrp" id="nrp" value="<?= $mhs["nrp"]; ?>" required>
			</li>
			<li>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>" required>
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>" required>
			</li>
			<li>
				<label for="jurusan">Jurusan :</label>
				<input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>" required>
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"]; ?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data</button>
			</li>
		</ul>
		
	</form>

</body>
</html>