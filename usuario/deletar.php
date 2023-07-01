<?php
include "../includes/conexao.php";
$id = $_GET["codigo"];

$sql = "delete from t_usuario where codigo = $id";
mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php");

?>