<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
?>

<h2>Módulo de Cadastro de Usuários</h2>

<p> <a href="novo.php">Cadastrar Usuários</a></p>

<h2>Cadastro de Usuários</h2>

<table border="1">
<tr>
    <td>codigo</td>
    <td>nome</td>
    <td>cidade</td>
    <td>estado</td>
    <td>data_nascimento</td>
    <td>tipo</td>
</tr>

<?php
    $sql = "select * from t_usuario";
    $todos_os_usuarios = mysqli_query($conexao, $sql);
    while($um_usuario = mysqli_fetch_assoc($todos_os_usuarios));
?>


<tr>
<td><?php echo $um_usuario['codigo'];?></td>
<td><?php echo $um_usuario['nome'];?></td>
<td><?php echo $um_usuario['cidade'];?></td>
<td><?php echo $um_usuario['estado'];?></td>
<td><?php echo $um_usuario['data_nascimento'];?></td>
<td><?php echo $um_usuario['tipo'];?></td>
</tr>
<tr>
<td>
    <a href="visualizar.php">visualizar</a>
    <a href="editar.php">Editar</a>
    <a href="deletar.php">Excluir</a>
</td>
</tr>

</table>

<?php
include "../includes/rodape.php";
?>