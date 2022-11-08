<?php
if (!(isset($_COOKIE['visitas']))) {
setcookie("visitas", "1", time()*3600);
echo ("Você nuca visitou esta pagina.");
} else {
$num_antigo = $_COOKIE['visitas'];
$num_mais = $_COOKIE['visitas']+1;
setcookie("visitas", $num_mais, time()*3600);
echo ("Você visitou esta pagina ".$num_antigo." vezes.");
}
?>