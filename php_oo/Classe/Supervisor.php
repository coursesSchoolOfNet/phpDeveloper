<?php

require_once("Funcionario.php");

class Supervisor extends Funcionario		
{
	public $operadores;

	public function getOperadores()
	{
		return "Your have " .$this->operadores. " Operators. <br>";
	}

	public function getMatricula()
	{ 
			return $this->matricula;
	}
}

?>