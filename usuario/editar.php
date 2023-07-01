<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";



$id =$_GET["codigo"];
$nome = "";
$sql = "select * from t_usuario where codigo=$id";

$todos_os_usuarios = mysqli_query($conexao, $sql);
while($um_usuario = mysqli_fetch_assoc($todos_os_usuarios)):
    $nome = $um_usuario["nome"];
    $cidade = $um_usuario["cidade"];
    $estado = $um_usuario["estado"];
    $data_nascimento = $um_usuario["date"];
    $tipo = $um_usuario["tipo"];

endwhile;
?>

<h2>Editar usuário <?php echo $id;?> </h2>
<form method="post" action="atualizar.php?codigo=<?php echo $id;?>">
    Nome:<input name="nome"> <br>
    Cidade:<input name="cidade"> <br>
    Esado:<input name="estado"> <br>
    Data_Nascimento:<input date="data_nascimento"> <br>
    Tipo:<input name="tipo"> <br>

    <button type="submit">atualizar_php</button>
</form>
