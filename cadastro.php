<?php

if(count($_POST) > 0)
{    
    $host = "db";
    $user = "php_docker";
    $pass = "password";
    $db = "php_docker";

    $mysqli = new mysqli($host, $user, $pass, $db);
    if($mysqli->connect_errno) {
        die("Falha na conexão com o banco de dados");
    }

    $erro = false;
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
            
    if(empty($nome)) 
    {
        $erro = "Preencha o nome";
    }
    else if (empty($cpf)) {
        $erro = "Preencha o CPF";
    }
    else if (empty($endereco)) {
        $erro = "Preencha o Endereco";
    }
    else if (empty($estado)) {
        $erro = "Preencha o Estado";
    }
    else if (empty($cep)) {
        $erro = "Preencha o CEP";
    }

    if ($erro == false)
    {
        $sql_code = "INSERT INTO usuario (nome, cpf, endereco, estado, cep) 
        VALUES ('$nome', '$cpf', '$endereco', '$estado', '$cep')";
        $deu_certo = $mysqli->query($sql_code) or die($mysqli->error);
        if($deu_certo) {
            echo "<p><b>Usuário cadastrado com sucesso!!!</b></p>";
            unset($_POST);
        }
    }
    else
    {
        echo $erro;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body style="background-color: azure;">

    <a href="visualizar.php"><br>Visualizar Cadastros</a>

        <form method="POST" style="margin: 0px;">

            <p><b>Nome: <input type="text" name="nome"> *</b></p>

            <p><b>CPF: <input type="text" name="cpf"></b> *</p>

            <p><b>Endereço: <input type="text" name="endereco"></b></p>

            <p><b>Estado: <input type="text" name="estado"></b></p>

            <p><b>CEP: <input type="text" name="cep"></b></p>

            <button type="submit">Cadastrar</button>
        </form>

</body>
</html>