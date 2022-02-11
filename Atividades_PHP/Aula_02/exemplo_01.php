<html>

<head>
  <title>Exemplo - 01</title>
  <meta charset="utf-8" />
  <style>
  div {
    width: 100px;
    height: 100px;
  }
  </style>
</head>

<body>
  <?php
      // Criando a função
      function criando_div($bg_color){
        echo"<div style='background-color:".$bg_color.";'></div>";
      }

      // Chamando a função(a função pode ser chamada antes ou depois)
      criando_div("red");
      criando_div("#00ff00");
      ?>
</body>

</html>