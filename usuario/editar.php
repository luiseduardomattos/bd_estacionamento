<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
?>


$id =$_GET["id"];
$nome = "";
$sql = "select * from t_usuario where id=$id";

$todos_os_usuarios = mysqli_query($conexao, $sql);
while(um_usuario = mysqli_fetch_assoc($todos_os_usuarios));
    $nome = $um_usuario["nome"];
    $cidade = $um_usuario["cidade"];

endwhile;
?>

<h2>Editar usuário <?php echo $id;?> </h2>
<form method="post" action="atualizar_php?id=<?php echo $id;?>">
    NOme:<input name="nome"> <br>
    <button type="submit">atualizar_php</button>
</form>
