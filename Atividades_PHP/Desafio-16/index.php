<?php
  session_start();
?>

<html>
  <head>
    <title>Notes - Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/es_form.css">
  </head>

  <body>
    <div class="container">
      <div class="img">
        <img src="img/image 1.png" alt="">
      </div>

      <form action="php/login.php" method="post">
            <div class="form_box">

                <h1>Login</h1>

                <?php
                if(isset($_SESSION['not_autenticado'])){
                ?>
                    <div class="erro_box">
                        Usuário ou senha inválidos!
                    </div>
                <?php
                }
                unset($_SESSION['not_autenticado']);
                ?>

                <label>Usuário</label>
                <input type="text" name="i_usuario" class="i_text" required>

                <label>Senha</label>
                <input type="password" name="i_senha" class="i_text" required>

                <input type="submit" value="Entrar" class="btt_form">

          <p class="traco"> </p>
          <p> Não tem conta? <a href="cad_usuario.php">Cadastre-se</a></p>
        </div>
      </form>
    </div>
  </body>
</html>