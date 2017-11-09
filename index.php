<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>JQuery School of Net</title>
    <link rel="stylesheet" type="text/css" href="public/css/style.css" />
<!--    jquery local-->
<!--    <script src="js/jquery-3.1.1.min.js"></script>-->
<!--    CDN/     API do google, onde fica salvo na cache na máquina/-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->

</head>
<body>
    <form action="php_oo/resources/criarNovo.php" method="GET">
         <fieldset>
         <legend> Cadastrar Funcionário </legend>
            <label> Nome: </label>
            <input type="text" name="nome" placeholder="nome" />
            <br>

            <label>CPF: </label>
            <input type="text" name="cpf" placeholder="CPF">
            <br>

            <label> Sexo: </label>
            <select name="sexo" value="sexo">
                <option>Masculino</option>
                <option>Feminino</option>
            </select>
            <br>

            <label>Departamento: </label>
            <input type="text" name="departamento" placeholder="Departamento">
            <br>

            <label>Cargo: </label>
            <select name="cargo" value="cargo">
                <option value="01">Gerente</option>
                <option value="02">Operacional</option>
                <option value="03">Supervisor</option>
            </select>
            <br>

            <label>Operadores: </label>
            <select name="oper" value="oper">
                <option value="1"> 1</option>
                <option value="2"> 2</option>
                <option value="3"> 3</option>
                <option value="4"> 4</option>
            </select>
            <br>

            <label>Matrícula: </label>
            <input type="text" name="matricula" placeholder="Matricula">
            <br>

            <label>Senha: </label>
            <input type="password" name="password" placeholder="Password">
            <br>

            <button>Enviar</button>
        </fieldset>
    </form>
</body>
</html>