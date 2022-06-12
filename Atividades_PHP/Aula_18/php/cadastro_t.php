<?php
  session_start();
  include("conexao.php");

  if(isset($_SESSION['usuario'])){
    
    $fk_usuario = $_SESSION['usuario'];
    $titulo_t = $_POST['i_titulo'];
    $descricao_t = $_POST['i_descricao'];
    $status_t = $_POST['i_status'];

    $query_1 = "insert into tarefa (fk_usuario, titulo, descricao, data_cadastro, status_tarefa)
      values ('{$fk_usuario}', '{$titulo_t}', '{$descricao_t}', NOW(), '{$status_t}'";
    msqli_query($conexao, $query_1);

  }else{
    header('Location: ../index.php');
  }

?>

<html>

    <head>
        <title>Cadastro concluído</title>
        <meta charset="utf-8">
    </head>

    <body>
        <h1>Cadastro de tarefa concluído!</h1>
        <a href="painel.php">Voltar</a>
    </body>

</html>