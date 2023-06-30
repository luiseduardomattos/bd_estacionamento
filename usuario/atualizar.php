<?php
include "../includes/conexao.php";
$id = $_GET["codigo"];

$nome = $_POST["nome"];
$sql = "update t-usuario set nome = '$nome' where codigo = $id";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php");

?>