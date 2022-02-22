<?php
    $nome = $_POST['i_nome'];
    $email = $_POST['i_email'];
    $tel = $_POST['i_tel'];
    $cpf = $_POST['i_cpf'];
?>
<html>

<head>
  <title>Informações</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/estilo_resp.css">
</head>

<body>
  <div class="container">
    <div class="box">
      <ul>
        <li>
          <span>NOME</span>
          <?php echo $nome ?>
        </li>
        <li>
          <span>E-MAIL</span>
          <?php echo $email ?>
        </li>
        <li>
          <span>TELEFONE</span>
          <?php echo $tel ?>
        </li>
        <li>
          <span>CPF</span>
          <?php echo $cpf ?>
        </li>
      </ul>
    </div>
  </div>
</body>

</html>