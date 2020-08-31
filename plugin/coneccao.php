<?php

$servidor = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "ideia";
$connect = mysqli_connect($servidor, $dbuser, $dbpassword, $dbname);
if (!$connect) {
    die("Conexao falhou:" . mysqli_connect_error());
}
?>