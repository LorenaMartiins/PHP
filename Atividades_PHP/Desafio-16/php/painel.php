<?php
  session_start();
  include("conexao.php");

  if (isset($_SESSION['usuario'])){
    $id = $_SESSION['usuario'];
    $query_1 = "select * from usuario where id_usuario = '{$id}'";
    $resposta = mysqli_query($conexao, $query_1);

    $row = mysqli_fetch_assoc($resposta);
  }else{
    header('Location: ../index.php');
  }
?>

<html>

  <head>
    <title>Painel</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/es_navbar.css">
  </head>

  <body>
    <nav>
      <ul>
        <li> <img class="avatar" src="../img/avatar.jpg" class="avatar"> </li>
        <li> <a href="">Perfil</a> </li>
        <li> <a href="">Nova Anotação</a> </li>
        <li id="btt_sair"> <a href="logout.php">Sair</a> </li>
      </ul>
    </nav>

    <div class="tarefas">
      <h2>Anotações</h2>
      <div class="container-tarefas"></div>
    </div>
  </body>

</html>