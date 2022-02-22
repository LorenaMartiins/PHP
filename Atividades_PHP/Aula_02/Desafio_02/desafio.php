<?php

  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $data = date_create($_POST['data']);
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];

?>

<html>

<head>
  <title>Desafio - POST</title>
  <meta charset="utf-8">
</head>

<body>
  <p>Nome: <?php echo $nome ?></p>
  <p>Sobrenome: <?php echo $sobrenome ?></p>
  <p>Data de Nacimento: <?php echo date_format($data, "d/m/Y") ?></p>
  <p>Cidade: <?php echo $cidade ?></p>
  <p>Estado: <?php echo $estado ?></p>
</body>

</html>