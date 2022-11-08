<?php
	
	$arquivo = fopen('contador.txt', 'r');
	$contador = fread($arquivo, 21);
	$contador++;
	
	$arquivo = fopen('contador.txt', 'w');
	fwrite($arquivo, $contador);
	
	fclose($arquivo);
	
	$zerar = filter_var(@$_REQUEST['zerar'], FILTER_SANITIZE_STRING);

if(@$zerar == 1){
	$arquivo = fopen('contador.txt', 'r');
	$contador = 0;
	
	$arquivo = fopen('contador.txt', 'w');
	fwrite($arquivo, $contador);
	
	fclose($arquivo);
	header('Location: contador_arquivos.php');
}
	
	echo '<a href="contador_arquivos.php?zerar=1">' . $contador; '</a>'
?>