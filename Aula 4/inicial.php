<?php
	session_start();
	
	if(!$_SESSION['login']) {
		header('location: form.php');
		exit();
	}
?>

Olá, <?=$_SESSION['login']?><br>

<a href="logout.php">Logout</a>