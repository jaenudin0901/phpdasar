<?php
// cek apakah tombol submit sudah di tekan atau belum 
if (isset($_POST['submit'])) {
    // cek userame & password
    if ($_POST['username'] == "admin" && $_POST['password'] == "123") {
        // jika benar redirect ke halaman admin
        header("Location:admin.php");
        exit;
    } else {
        // jika salah, tampilkan pesan kesalahan
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login Admin</h1>
    <?php if (isset($error)) : ?>
        <p style="color: red; font-style:italic;">username / password salah</p>
    <?php endif; ?>
    <ul>

        <form action="" method="post">
            <li>
                <Label for="username">Username :</Label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <Label for="password">Password : </Label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">login</button>
            </li>
        </form>
    </ul>

</body>

</html>