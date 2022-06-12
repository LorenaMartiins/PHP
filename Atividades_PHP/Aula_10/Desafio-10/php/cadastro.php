<?php

  include "conexao.php";

  $nome = $_POST['i_nome'];
  $idade = $_POST['i_idade'];
  $periodo = $_POST['i_periodo'];
  $turma = $_POST['i_turma'];

  $sql = "insert into alunos (nome, idade, periodo, turma) values 
          ('{$nome}', '{$idade}', '{$periodo}', '{$turma}')";
  $conexao->query($sql);
?>

<html>
  <head>
    <title>Concluido</title>
    <meta charset="utf-8">
    <style>
      *{
        background: #f0f0f0;
      }
      a{
        text-decoration: none;
        color:cadetblue;
        padding:10px;
      }
    </style>
  </head>
  
  <body>
    <h1>Cadastro concluido!</h1>
    <a href="../index.html">Novo cadastro</a>
    <a href="leitura.php">Ver cadastro</a>
  </body>
</html>