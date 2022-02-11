<?php
  // Recebendo os valores por meio da URL
  $cor = $_GET['cor'];
  $width = $_GET['w'];
  $height = $_GET['h'];

?>

<html>

<head>
  <title>Resposta - GET</title>
  <meta charset="utf-8">
  <style>
  div {
    width: <?php echo $width."px"?>;
    height: <?php echo $height."px"?>;
    background-color: <?php echo $cor ?>;
  }
  </style>
</head>

<body>
  <div></div>
</body>

</html>