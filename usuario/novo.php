<?php
include "../includes/cabecalho.php";
?>

<main class="container">
    <form action ="inserir.php" method="post">
    nome: <input name="nome">
    cidade: <input name="cidade">
    Estado: <input name="estado">
    Data_Nascimento: <input date="data_nascimento">
    Tipo: <input name="tipo">

    <button type="submit">SALVAR</button>
    </form>
</main>

<?php
include "../includes/rodape.php";
?>

