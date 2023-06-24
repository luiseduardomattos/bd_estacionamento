<?php
include "../includes/conexao.php";
$id = $_GET["id"];

$nome = $_POST["nome"];
$sql = "insert into bd_estacionamento(nome) values('$nome');
mysqli_query($conexao, $sql);
mysqli_close($conesao);

header('location: selecionar.php');

?>