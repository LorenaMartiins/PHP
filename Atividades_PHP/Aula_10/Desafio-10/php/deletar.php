<?php

  include "conexao.php";

  $cod = $_GET['cod_aluno'];
  $sql = "delete from alunos where cod_aluno = $cod";

  if(mysqli_query($conexao, $sql)){
    include "leitura.php";
  }else{
    echo"Erro ao excluir!!";
  }

?>