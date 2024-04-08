<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "usuarios";

$mysqli = new mysqli($host, $user, $pass, $db);
if($mysqli->connect_errno) {
    die("Falha na conexão com o banco de dados");
}