<?php

require_once("../Classe/Gerente.php");
require_once("../Classe/Supervisor.php");


$nome = $_GET['nome'];
$departamento = $_GET['departamento'];
$cpf = $_GET['cpf'];
$matricula = $_GET['matricula'];
$sexo = $_GET['sexo'];
$password = $_GET['password'];
$cargo = $_GET['cargo'];
$oper = $_GET['oper'];


if (isset($cargo))
{
	switch ($cargo) 
	{
    case 01:
    	$gerente = new Gerente ($nome, $sexo, $departamento, $cpf, $matricula);
		$gerente->setPassword($password);
            echo "<h1>Gerente</h1>";
            echo $gerente->getNome(); 
            echo $gerente->getDepartamento();
            echo $gerente->getCpf();
            echo $gerente->getMatricula();
            echo $gerente->getSexo();
            echo $gerente->getPassword();
        break;
    case 02:
        $func1 = new Funcionario ($nome, $sexo, $departamento, $cpf, $matricula);
            echo "<h1>Funcionário</h1>";
            echo $func1->getNome();
            echo $func1->getDepartamento();
            echo $func1->getCpf();
            echo $func1->getMatricula();
            echo $func1->getSexo();
        break;
    case 03:
        $supervisor = new Supervisor ($nome, $sexo, $departamento, $cpf, $matricula);
        $supervisor->operadores = $oper;
            echo "<h1>Supervisor</h1>";
            echo $supervisor->getNome();
            echo $supervisor->getDepartamento();
            echo $supervisor->getCpf();
            echo $supervisor->getMatricula();
            echo $supervisor->getSexo();
            echo $supervisor->getOperadores();
        break;
	}
}

?>