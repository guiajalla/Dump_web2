<?php

session_start(); //Sempre deve estar presente ao usar sessão para iniciar ela

$_SESSION['visitado'];

if ($_SESSION['visitado']) {
	echo 'Que bom que voltou!';
}
else {
	$_SESSION['visitado'] = 1;
	echo 'Seja bem-vindo!';
}

//session_destroy(); exclui toda a sessão, útil para dar logoff
?>