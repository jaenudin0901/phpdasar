<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		Li{list-style: none}
		.notice{ color: red; font-style: italic; }
	</style>
</head>
<body>
<h1>Bergabung bersama kami pada Mailing List</h1>
<form action="" method="POST">
	<?php if (isset($status)) ;?>
	<p class="notice"><?php echo $status;?>
	<php endif; ?></p>
	<ul>
		<li>
			<label for="name">Nama</label>
			<input type="text" name="name" value="<?= old('name');?>">
		</li>
		<li>
			<label for="email">Email</label>
			<input type="text" name="email" value="<?= old('email'); ?>">
		</li>
		<li>
			<input type="submit" value="Daftar">
		</li>
	</ul>
</form>

</body>
</html>