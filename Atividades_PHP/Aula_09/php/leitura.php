<?php

  include "conexao.php";

  $sql = "select * from produto";
  $resposta = $conexao->query($sql);

  if(mysqli_num_rows($resposta) > 0){

    ?>

    <html>
      <head>
        <title>Lista de produtos</title>
        <meta charset="utf-8">
        <style>
          table {
            margin: auto ;
          }
          td {
            min-width:100px;
          }
        </style>
      </head>

      <body>
        <table border="1">
          <tr>
            <td>CÓDIGO</td>
            <td>NOME</td>
            <td>QUANTIDADE</td>
            <td>PREÇO</td>
          </tr>
          <?php

          while($row = mysqli_fetch_assoc($resposta)){
            ?>

            <tr>
              <td><?php echo $row["cod_prod"]?></td>
              <td><?php echo $row["nome"]?></td>
              <td><?php echo $row["quantidade"]?></td>
              <td><?php echo $row["preco"]?></td>
            </tr>

            <?php
          }

          ?>

          <tr>
            <td colspan="4">
              <a href="../index.html">Voltar</a>
            </td>
          </tr>

        </table>
      </body>
    </html>

    <?php
    
  }else{
    echo "Nenhum valor cadastrado!!";
  }

  mysqli_close($conexao);

?>