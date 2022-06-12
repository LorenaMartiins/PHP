<?php

  include("conexao.php");

  $id_tarefa = $_GET["id_t"];
  $query_1 = "delete from tarefa where id_tarefa = '{$id_tarefa}'";

  if(mysqli_query($conexao, $query_1)){
    heade('Location: listar_t.php');
  }else{
    ?>
    <h1>Erro na hora de deletar o registro!!</h1>
    <a href="listar_t.php">Voltar</a>
    <?php
  }

?>