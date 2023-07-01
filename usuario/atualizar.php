<?php
include "../includes/conexao.php";
$id = $_GET["codigo"];

$nome = $_POST["nome"];
$cidade = $_POST["cidade"];
$sql = "update t_usuario set nome = '$nome' where codigo = $id";
$sql = "update t_usuario set cidade = '$cidade' where codigo = $id";


mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: selecionar.php");

?>