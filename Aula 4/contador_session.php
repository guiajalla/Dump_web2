<?php
session_start();
	
@$_SESSION['visitas'];
	
if (@$_SESSION['visitas'] > 0) {
	
	$_SESSION['visitas'] += 1;
	$contador = $_SESSION['visitas'];
	echo 'Essa é a '. $contador . ' que você acessa!';
}
else {
	$_SESSION['visitas'] = 1;
	echo 'Está é a primeira vez que você acessou!';
}
$zerar = filter_var(@$_REQUEST['zerar'], FILTER_SANITIZE_STRING);

if(@$zerar == 1){
	session_destroy();
	header('Location: contador_session.php');
}
?>

<br><a href="contador_session.php?zerar=1">Zerar Contador</a>