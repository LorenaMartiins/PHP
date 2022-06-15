<?php
  session_start();
?>


<html>
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/login.css">
  </head>

  <body>
    <div class="container">
      <div class="form_box">
        <div class="h1_box">
          <h1>Login</h1>
        </div>

        <?php 
          if(isset($_SESSION['não_autenticado'])){
        ?>

          <div class="erro_box">
            Usuário ou senha inválidos!!
          </div>

        <?php 
          }
          unset($_SESSION['não_autenticado']);
        ?>

        <form action="php/login.php" method="post">
          <label>Usuário</label>
          <input type="text" name="i_login" class="i_text">
          <label>Senha</label>
          <input type="password" name="i_senha" class="i_text">
          <input type="submit" value="Entrar" id="btt_form">
        </form>

        <div class="link_box">
          Ainda não tem conta? <a href="">Cadastre-se</a>
        </div>
      </div>
    </div>
  </body>
</html>