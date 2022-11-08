<?php
	/*function __autoload($className){
		requice_once $className . '.php';
	}*/
	
	require_once 'pessoa.php';
	require_once 'Funcionario.php';
	
	$obj = new Funcionario('Joao', '1996/07/22', 'Rua A', '51992620743', 'Recepcao', '1250', '2020/07/22');
	echo '-------------------------------';
	echo '<br> Nome: ' . $obj->nome;
	echo '<br> Nascimento: ' . $obj->nascimento;
	echo '<br> Idade: ' . $obj->calcularIdade($obj->nascimento);
	echo '<br> Endereço: ' . $obj->endereco;
	echo '<br> Telefone: ' . $obj->telefone;
	echo '<br> Cargo: ' . $obj->cargo;
	echo '<br> Salario: ' . $obj->salario;
	$obj->imposto($obj->salario);
	$obj->tempo($obj->admissao);
	echo '<br>-------------------------------';
?>