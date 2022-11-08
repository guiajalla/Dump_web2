<?php
$con = mysqli_connect('localhost', 'root', '', 'teste');
if (!$con) die(mysqli_error($con));

$sql = "SELECT * FROM produto";
//echo $sql
$result = mysqli_query($con, $sql);
//Mostrar o banco de dados
echo "<table>\n";
echo "<tr><th>Produto</th><th>Descrição</th><th>Quantidade</th></tr>\n";
while ($linha = mysqli_fetch_assoc($result)) {
	echo "<tr><td>" . $linha['nome'] . "</td><td>" . $linha['descr'] . "</td><td>" . $linha['qtd'] . "</td><td><a href='deleta.php?id=". $linha['id'] ."'>X</a></td></tr>";
}
echo "</table>\n"
?>

<a href="formbanco.php">Inserir</a>