<?php
if (!isset($_GET['gambar']) || 
    !isset($_GET['jenis']) ||
    !isset($_GET['nopol'])||
    !isset($_GET['warna']))
    {
    // redirect
    header("Location: latihan1.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mobil</title>
    <style>
        img {
            width: 200px;
            height: 120px;
        }
    </style>
</head>

<body>
    <ul>
        <li> <img src="<?= $_GET['gambar']; ?>""></li>
        <li>Jenis <?= $_GET['jenis']; ?></li>
        <li>No polisi <?= $_GET['nopol']; ?></li>
        <li>Warna <?= $_GET['warna']; ?></li>
    </ul>
    <a href=" latihan1.php">Kembali ke Daftar Mobil</a>
</body>

</html>