<?php

  session_start();
  include("conexao.php");

  $nome = $_POST['i_nome'];
  $sobrenome = $_POST['i_sobrenome'];
  $usuario = $_POST['i_usuario'];
  $senha = $_POST['i_senha'];

  $query_1 = "select * from usuario where login = '{$usuario}'";
  $resposta = mysqli_query($conexao, $query_1);
  $row = mysqli_num_rows($resposta);

  if($row == 1){
    $_SESSION['not_usuario'] = true;
    echo "<script> javascript:history.go(-1) </script>";
  }else{

      $query_2 = "insert into usuario (nome, sobrenome, login, senha) 
      values ('{$nome}', '{$sobrenome}', '{$usuario}', md5('{$senha}'))";
      
      mysqli_query($conexao, $query_2);
    
    ?>

    <?php
  }

?>

<html>
  <head>
    <title>Cadastro concluído</title>
    <meta charset="utf-8">
    <style>
      *{
      background: #F5F5F5;
    }
    h1, h4{
      color:#69A17E;
      margin: auto;
      text-align: center;
    }

    a{
      text-decoration:none;
      color:rgba(255, 113, 91, 0.9);
      text-align: center;
      margin-left: 815px ;
      font-size:18px;
    }
    </style>
  </head>

  <body>
    <h1>Cadastro concluído!!</h1>

    <h4>Pode logar</h4>

    <a href="../index.php">Login</a>
  </body>
</html>