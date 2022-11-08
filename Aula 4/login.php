<?php

$login = filter_var($_REQUEST['login'], FILTER_SANITIZE_STRING);
$senha = filter_var($_REQUEST['senha'], FILTER_SANITIZE_STRING);

if($login == 'admin' && $senha == '123') {
	session_start();
	$_SESSION['login'] = $login;
	header('Location: inicial.php');
}
else {
	header('Location: form.php?msg=Login Inválido');
}
?>