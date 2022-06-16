<?php

    include("conexao.php");

    $id_notes = $_GET['id_n'];
    $titulo_n = $_POST['i_titulo'];
    $descricao_n = $_POST['i_descricao'];
    $status_n = $_POST['i_status'];

    $query_1 = "update notes set titulo = '{$titulo_n}', descricao = '{$descricao_n}', 
                status_notes = '{$status_n}' where id_notes = '{$id_notes}'";
    
    if(mysqli_query($conexao, $query_1)){
        header('Location: listar_n.php');
    }else{
        ?>
        <h1> Erro na atualização do registro! </h1>
        <a href="listar_n.php">Voltar</a>
        <?php
    }

?>