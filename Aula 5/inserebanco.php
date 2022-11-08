<?php
$con = mysqli_connect('localhost', 'root', '', 'teste');
if (!$con) die(mysqli_error($con));

$nome = filter_var($_REQUEST['name'], FILTER_SANITIZE_STRING);
$descr = filter_var($_REQUEST['descricao'], FILTER_SANITIZE_STRING);
$qtd = filter_var($_REQUEST['quant'], FILTER_SANITIZE_NUMBER_INT);

$sql = "INSERT INTO produto(nome, descr, qtd) VALUES ('$nome', '$descr', $qtd)";

$result = mysqli_query($con, $sql);
if (!$result) die(mysqli_error($con));

header('location: banco.php')
?>