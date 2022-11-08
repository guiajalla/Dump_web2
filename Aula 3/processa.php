<?php
	$name = filter_var($_REQUEST['name'], FILTER_SANITIZE_STRING);
	$email = filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL);
	if ($email !=true) {
		header('Location: formulario_GuilhermeAjalla.html');
	}
	$sex = filter_var($_REQUEST['sex'], FILTER_SANITIZE_STRING);
	$date = filter_var($_REQUEST['borndate'], );
	$address = filter_var($_REQUEST['address'], FILTER_SANITIZE_STRING);
	$district = filter_var($_REQUEST['district'], FILTER_SANITIZE_STRING);
	$states = filter_var($_REQUEST['states'], FILTER_SANITIZE_STRING);
	$city = filter_var($_REQUEST['city'], FILTER_SANITIZE_STRING);
	$zipCode = filter_var($_REQUEST['zipCode'], FILTER_SANITIZE_STRING);
	$receive = filter_var($_REQUEST['receive'], FILTER_SANITIZE_STRING);
	
	$date = explode('-', $borndate);
	if($date[0] > 2021){
		header('Location: formulario_GuilhermeAjalla.html');
	}
	if($date[1] > 12){
		header('Location: formulario_GuilhermeAjalla.html');
	}
	if($date[2] > 31){
		header('Location: formulario_GuilhermeAjalla.html');
	}
	
	
	echo 'Nome: ' . $name . '<br>';
	echo 'Sex: ' . $sex . '<br>';
	echo 'E-mail: ' . $_REQUEST['email'] . '<br>';
	echo 'Data de Nascimento: ' . $_REQUEST['borndate'] . '<br>';
	echo 'Endereço: ' . $address . '<br>';
	echo 'Bairro: ' . $district . '<br>';
	echo 'Estado: ' . $states . '<br>';
	echo 'Cidade: ' . $city . '<br>';
	echo 'CEP: ' . $zipCode . '<br>';
	echo 'Deseja receber E-mails: ' . $receive . '<br>';
?>