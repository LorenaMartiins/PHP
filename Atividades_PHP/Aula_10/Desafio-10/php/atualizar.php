<?php

  include "conexao.php";

  $cod = $_GET['cod_aluno'];
  $nome = $_POST['i_nome'];
  $idade = $_POST['i_idade'];
  $periodo = $_POST['i_periodo'];
  $turma = $_POST['i_turma'];

  $sql = "update alunos set nome = '$nome', idade = '$idade', periodo = '$periodo', turma = '$turma' where cod_aluno = '$cod'";

  if(mysqli_query($conexao, $sql)){
    include "leitura.php";
  }else{
    echo "Erro na atualização do registro!!";
  }

?>