<?php

setcookie('visitado', 1, time() + 60);

if (@$_COOKIE['visitado']) { //@ evita o notice no navegador
	echo 'Quem bom que voltou';
}
else {
	echo 'Seja bem-vindo';
}
?>