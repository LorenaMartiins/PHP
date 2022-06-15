<?php

  session_start();
  include("conexao.php");

  if(empty($_POST['i_login']) || empty($_POST['i_senha'])){
    header('Location: ../index.php');
  }

  $login = mysqli_real_escape_string($conexao, $_POST['i_login']);
  $senha = mysqli_real_escape_string($conexao, $_POST['i_senha']);

  $sql = "select id_usuario, nome, login from usuario where login = '{$login}' and senha = md5('{$senha}')";

  $resposta = mysqli_query($conexao, $sql);

  $row = mysqli_num_rows($resposta);

  if($row == 1){
    $_SESSION['usuario'] = $login;
    header('Location: painel.php'); 
  }else{
    $_SESSION['não_autenticado'] = true;
    header('Location: ../index.php');
  }

?>