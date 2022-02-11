<?php

  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $data = date_create($_POST['data']);
  $cidade = $_POST['cidade'];

?>

<html>

<head>
  <title>Resposta - POST</title>
  <metam charset="utf-8">
</head>

<body>
  <p>Nome: <?php echo $nome ?></p>
  <p>Sobrenome: <?php echo $sobrenome ?></p>
  <p>Data: <?php echo date_format($data, "d/m/Y") ?></p>
  <p>Cidade: <?php echo $cidade ?></p>

</body>

</html>