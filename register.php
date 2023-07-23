<?php
require_once 'db.php';
	$msg = '';
	$result = $mysqli->query("SELECT * FROM `users` WHERE `email`='{$_POST['email']}'");
	if ($result->num_rows > 0) {
		$msg = json_encode([
			'success' => 0,
			'msg' => 'Adresa de email este deja folosita.'
		]);
	} else {
		$mysqli->query("INSERT INTO `users` (`email`,`parola`,`nume`,`prenume`) VALUES('{$_POST['email']}','".md5($_POST['parola'])."','{$_POST['nume']}','{$_POST['prenume']}')");
		$msg = json_encode([
			'success' => 1,
			'msg' => 'Contul a fost creat cu succes. Se redirectioneaza.'
		]);
		session_start();
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['user'] = $_POST['prenume'].' '.$_POST['nume'];
	}
	

	echo $msg;
	die();