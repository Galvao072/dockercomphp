<?php

$connect = mysqli_connect(
    "db",
    "php_docker",
    "password",
    "php_docker"
);

echo "<a href='cadastro.php'> Cadastrar </a>";
echo "<br><b>USUÁRIOS CADASTRADOS</b>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: azure;">

    <table border="3px">
        <tr>
            <td><b>ID</b></td>
            <td><b>NOME</b></td>
            <td><b>CPF</b></td>
            <td><b>ENDERECO</b></td>
            <td><b>ESTADO</b></td>
            <td><b>CEP</b></td>
        </tr>

        <?php

            $table_name = "usuario";

            $query = "SELECT * FROM $table_name";

            $response = mysqli_query($connect, $query);
            while($i = mysqli_fetch_assoc($response))
            {

            echo "<tr>";
                echo "<td><b>" . $i["id"] . "</b></td>";
                echo "<td><b>" . $i["nome"] . "</b></td>";
                echo "<td><b>" . $i["cpf"] . "</b></td>";
                echo "<td><b>" . $i["endereco"] . "</b></td>";
                echo "<td><b>" . $i["estado"] . "</b></td>";
                echo "<td><b>" . $i["cep"] . "</b></td>";
            echo "</tr>";

            }

        ?>

    </table>
    
</body>
</html>