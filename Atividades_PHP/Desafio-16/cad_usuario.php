<?php session_start(); ?>

<html>
  <head>
    <title>Cadastro de usuário</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/es_form.css">
  </head>

  <body id="cad-body">

    <div class="container-cad">
      <form action="php/cadastro_u.php" method="post" enctype="multipart/form-data">
        <div class="form_box-cadastro">
          <h1>Novo cadastro</h1>

          <label>Nome</label>
          <input type="text" name="i_nome" class="i_text" required>
          
          <label>Sobrenome</label>
          <input type="text" name="i_sobrenome" class="i_text" required>
          
          <?php
          if(isset($_SESSION['not_usuario'])){
          ?>
            <div class="erro_box">
              Nome de usuário já está em uso
            </div>'

          <?php
          }
          unset($_SESSION['not_usuario']);
          ?>

          <label>Nome de usuário</label>
          <input type="text" name="i_usuario" class="i_text" required>

          <label>Senha</label>
          <input type="password" name="i_senha" class="i_text" required>

          <input type="submit" value="Cadastrar" class="btt_form-cad">

          <a href="index.php">Voltar</a>
        </div>
      </form>
  </div>
  </body>
</html>