<?php

require_once("Funcionario.php");

class Gerente extends Funcionario
{
	private $password;

	public function __construct($nome = null, $sexo = null, $departamento = null, $cpf = null, $matricula = null)
	{
		parent::__construct(strtoupper($nome), $sexo, $departamento, $cpf, $matricula);
		// echo $this->nome;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function getPassword()
	{
		return "Your password is: " .$this->password."<br>";
	}

	public function getMatricula()
	{ 
		return $this->matricula;
	}

}

?>
