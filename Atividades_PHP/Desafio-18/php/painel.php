<?php
  include("verifica_usuario.php");
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
        <li> <a href="perfil.php">Perfil</a> </li>
        <li> <a href="nova_notes.php">Nova Anotação</a> </li>
        <li> <a href="lista_n.php">Anotações</a> </li>

        <li id="btt_sair"> <a href="logout.php">Sair</a> </li>
      </ul>
    </nav>

    <div class="tarefas">
      <h2>Anotações</h2>

      <div class="container-tarefas">
        <a href="listar_n.php"> Anotações Feitas
          
        </a>
      </div>
    </div>
  </body>

</html>