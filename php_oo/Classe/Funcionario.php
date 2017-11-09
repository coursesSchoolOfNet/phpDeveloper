<?php
require_once("../Interface/IFuncionario.php");

abstract class Funcionario implements IFuncionario
{
	protected $nome;
	public $sexo;
	public $departamento;
	public $cpf;
	public $matricula;

	public function __construct($nome = null, $sexo = null, $departamento = null, $cpf = null, $matricula = null)
	{
		$this->nome = $nome;
		$this->sexo = $sexo;
		$this->departamento = $departamento;
		$this->cpf = $cpf;
		$this->matricula = $matricula;
	}

	public function getNome()
	{
		return "Your name is: " . $this->nome ."<br>";
	}

	public function getSexo()
	{
		return "Your sex is: " .$this->sexo."<br>";
	}

	public function getDepartamento()
	{
		return "Your department is: " .$this->departamento."<br>";
	}

	public function getCpf()
	{
		return "Your CPF is: " .$this->cpf."<br>";
	}

	abstract public function getMatricula();
}

?>