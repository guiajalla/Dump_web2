<?php
//Criar Cookie
setcookie('visitas', 1); //Criando o cookie


if (@$_COOKIE['visitas']) { //@ evita o notice no navegador 
	$contador = $_COOKIE['visitas']+1;
	setcookie('visitas', $contador);
	echo 'Está é a ' . $contador . ' visita';
}
else {
	
	echo 'Está é a primeira vez que visitou!';
}

$zerar = filter_var(@$_REQUEST['zerar'], FILTER_SANITIZE_STRING);

if($zerar == 1){
	setcookie('visitas', 1, time() - 60);
}
?>
<br><a href="contador_cookie.php?zerar=1">Zerar Contador</a>