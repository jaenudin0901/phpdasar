<?php 

require 'function.php';

if ($_SERVER['REQUEST_METHOD']=='POST') {
	$name =trim($_POST['name']);
	$email =trim($_POST['email']);

	if (empty($name) || empty($email) || !valid_email($email)) {
		$status ='Tolong isi kembali nama dan email anda';
	}
	else {
		add_registered_user($name,$email);
		$status='Terima kasih telah mendaftar, Data nama dan email anda telah kami terima. ';
	}
	// echo $name;
	// die();
}
require 'index.tmplt.php';
