<?php

    include("conexao.php");

    $id_notes = $_GET['id_n'];
    $query_1 = "delete from notes where id_notes = '{$id_notes}'";

    if(mysqli_query($conexao, $query_1)){
        header('Location: listar_n.php');
    }else{
        ?>
        <h1>Erro na hora de deletar o registro!</h1>
        <a href="listar_n.php">Voltar</a>
        <?php
    }

?>