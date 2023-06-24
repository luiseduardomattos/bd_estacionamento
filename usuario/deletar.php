<?php
include "../includes/conexao.php";
$id = $_GET["id"];

$sql = "delete from t_usuario where id=$id";
mysqli_query($conexao, $sql);
mysqli_close($conesao);

header("location: selecionar.php");

?>