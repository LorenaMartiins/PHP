<?php
  include('verifica_login.php');
?>

<style>
  *{
    background: #f0f0f0;
  }
  h2{
    margin:15px auto;
    text-align: center;
  }
  h2 a{
    text-decoration: none;
    color: #2660A4;
  }
</style>

<h2>
  Bem vindo/a <?php echo $_SESSION['usuario']; ?> !! Tudo bem??
</h2>

<h2>
  <a href="logout.php">Sair</a>
</h2>