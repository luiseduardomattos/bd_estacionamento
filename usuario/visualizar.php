<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";

$id =$_GET["codigo"];

$nome = "";
$sql = "select * from t-usuario where codigo = $id";
$todos_os_usuarios = mysqli_query($conexao, $sql);
while($um_usuario = mysqli_fetch_assoc($todos_os_usuarios)):
    $nome = $um_usuario["nome"];
    $cidade = $um_usuario["cidade"];




endwhile;
?>

<h2>Ficha de Usuário:</h2>
Nome: <?php echo "$nome";?> ><br>
cidade: <br>
Estado: <?php echo "$estado";?> <br>
data_nascimento: <?php echo"$data";?> <br>
Tipo: <?php echo "$tipo";?> <br>

<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>
