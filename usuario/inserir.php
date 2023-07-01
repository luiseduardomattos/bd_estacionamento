<?php
include "../includes/conexao.php";

$nome = $_POST["nome"];
$cidade = $_POST["cidade"];
$sql = "insert into t_usuario(nome, cidade, estado, data_nascimento, tipo) values('$nome', '$cidade', '$estado', '$date', '$tipo')";
mysqli_query($conexao, $sql);
mysqli_close($conexao);



header("location:selecionar.php");
?>







