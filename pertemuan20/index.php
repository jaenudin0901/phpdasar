<?php 
session_start();
require 'functions.php'; 
if (!isset($_SESSION["login"])) {

	header("location: login.php");
	exit;

}
 
// Ambil data dari tabel mahasiwa /query data mahasiswa
$mahasiswa = query( "SELECT * FROM mahasiswa ORDER BY id DESC");

// tombol cari ditekan
if(isset($_POST["cari"])){

	$mahasiswa = cari ($_POST["keyword"]);

}



 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<style >
		.loader {
			position: absolute;
			width: 100px;
			top: 118px;
			z-index: -1;
			left: 210px;
			display: none;
			color: red;
			background-color: blue;
		}
	</style>
<script type="text/javascript" src="js/jquery.js"></script>
<script  src="js/script.js"></script>

</head>
<body>
	<h1>Daftar Mahasiswa</h1>
<a href="tambah.php">Tambah Data Baru</a> ||
	<a href="logout.php">Logout</a>
<br><br>

<form action="" method="post">
	<input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencarian" autocomplete="off" id="keyword">
	<button type="submit" name="cari" id="tombol-cari">Cari</button>
	<img src="img/loader.gif" class="loader">
</form>

<br><br>
  <div id="container">
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>Nrp</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jurusan</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach($mahasiswa as $row) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="ubah.php?id=<?= $row['id']; ?>">ubah</a> | 
			<a href="hapus.php?id=<?= $row['id']; ?>" onclick=" return confirm('yakin');">hapus</a>
		</td>
		<td><img src="img/<?= $row['gambar']; ?>" width="50"></td>
		<td><?= $row['nrp']; ?></td>
		<td><?= $row['nama']; ?></td>
		<td><?= $row['email']; ?></td>
		<td><?= $row['jurusan']; ?></td>
	</tr>
	<?php  $i++; ?>
<?php endforeach; ?>
</table>
</div>
</body>
</html>