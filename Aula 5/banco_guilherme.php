<style>
	#tabela {
		border: 1px solid black;
	}
	#tabela td {
		background: silver;
	}
</style>

<form action="banco_guilherme.php?insert=1" method="POST">
	Nome: <input name="name"><br>
	Endereço:  <input name="address"><br>
	Telefone: <input name="phone"><br>
	<input type="submit">
</form>

<?php
//Banco
$con = mysqli_connect('localhost', 'root', '', 'pessoa');
if (!$con) die(mysqli_error($con));

$sql = "SELECT * FROM pessoa";
//echo $sql
$result = mysqli_query($con, $sql);
//Mostrar o banco de dados
echo "<table id='tabela'>\n";
echo "<tr><th>Nome</th><th>Endereço</th><th>Telefone</th></tr>\n";
while ($linha = mysqli_fetch_assoc($result)) {
	echo "<tr><td>" . $linha['nome'] . "</td><td>" . $linha['endereco'] . "</td><td>" . $linha['telefone'] . "</td><td><a href='banco_guilherme.php?codpessoa=". $linha['codpessoa'] ."'>X</a></td></tr>";
}
echo "</table>\n";

//Inserir
$insert = filter_var(@$_REQUEST['insert'], FILTER_SANITIZE_STRING);
if(@$insert == 1){
	$con = mysqli_connect('localhost', 'root', '', 'pessoa');
	if (!$con) die(mysqli_error($con));

	$name = filter_var($_REQUEST['name'], FILTER_SANITIZE_STRING);
	$address = filter_var($_REQUEST['address'], FILTER_SANITIZE_STRING);
	$phone = filter_var($_REQUEST['phone'], FILTER_SANITIZE_STRING);

	$sql = "INSERT INTO pessoa(nome, endereco, telefone) VALUES ('$name', '$address', '$phone')";

	$result = mysqli_query($con, $sql);
	if (!$result) die(mysqli_error($con));

	header('location: banco_guilherme.php');
}

//Deletar
$codpessoa = filter_var(@$_REQUEST['codpessoa'], FILTER_SANITIZE_NUMBER_INT);
if(@$codpessoa) {
	$con = mysqli_connect('localhost', 'root', '', 'pessoa');
	if (!$con) die(mysqli_error($con));

	$sql = "DELETE FROM pessoa WHERE codpessoa = $codpessoa";

	$result = mysqli_query($con, $sql);
	if (!$result) die(mysqli_error($con));

	header('location: banco_guilherme.php');
}
?>