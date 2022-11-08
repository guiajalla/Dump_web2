<?php
	class Pessoa {
		public $idade;
		
		function __construct($nome, $nascimento, $endereco, $telefone){
			$this->nome = $nome;
			$this->nascimento = $nascimento;
			$this->endereco = $endereco;
			$this->telefone = $telefone;
		}
		
		function calcularIdade($nascimento){
			$nascimento = date('d-m-Y', strtotime($nascimento));
			list($diaNasc, $mesNasc, $anoNasc) = explode('-', $nascimento);
			
			$idade = date("Y") - $anoNasc;
			
			if (date("m") < $mesNasc){
				$idade -= 1;
			}
			
			elseif ((date("m") == $mesNasc) && (date("d") <= $diaNasc)){
				$idade -= 1;
			}
			return $idade;
		}
	}
//Teste
//$obj = new Pessoa('Joao', '1996/07/22', 'Rua A', '51992620743');
//echo $obj->nome;
//echo $obj->nascimento;
//echo $obj->endereco;
//echo $obj->telefone;
//echo $obj->calcularIdade($obj->nascimento);
		
?>