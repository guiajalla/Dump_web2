<?php
require_once("pessoa.php");
class Funcionario extends Pessoa {
		
		function __construct($nome, $nascimento, $endereco, $telefone, $cargo, $salario, $admissao){
			parent::__construct($nome, $nascimento, $endereco, $telefone);
			$this->cargo = $cargo;
			$this->salario = $salario;
			$this->admissao = $admissao;
		} 
		
		function tempo($admissao){
			$admissao = date('d-m-Y', strtotime($admissao));
			list($diaAdmi, $mesAdmi, $anoAdmi) = explode('-', $admissao);
			
			$tempoAdmi = date("Y") - $anoAdmi;
			
			if (date("m") < $mesAdmi){
				$tempoAdmi -= 1;
			}
			
			elseif ((date("m") == $mesAdmi) && (date("d") <= $diaAdmi)){
				$tempoAdmi -= 1;
			}
			
			if ($tempoAdmi < 1) {
				echo '<br> Você possui menos de 1 ano de empresa! ';
			}
			else {
				echo '<br> Você possui ' . $tempoAdmi . ' anos de empresa';
			}
			return $tempoAdmi;
		} 
		
		function imposto($salario){
			$salario = floatval($salario);
			$imposto = $salario * (27.5/100);
			echo '<br> Imposto cobrado: ' . $imposto;
		}
	}
//Teste
/*$obj = new Funcionario('Joao', '1996/07/22', 'Rua A', '51992620743', 'Recepcao', '1250', '2021/07/22');
/*echo $obj->nome;
echo $obj->nascimento;
echo $obj->endereco;
echo $obj->telefone;
$obj->calcularIdade($obj->nascimento);
$obj->tempo($obj->admissao);
echo $obj->admissao;
echo $obj->salario;
$obj->imposto($obj->salario);*/
	?>