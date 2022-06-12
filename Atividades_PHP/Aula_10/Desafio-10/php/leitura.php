<?php

  include "conexao.php";

  $sql = "select * from alunos";
  $resposta = $conexao->query($sql);

  if(mysqli_num_rows($resposta) > 0){
    ?>

    <html>
      <head>
        <title>Lista de alunos</title>
        <meta charset="utf-8">
        <style>
          

          body {
            margin: 10px;
            background: #f0f0f0;
          }

          h1{
            text-align: center;
            color: ;
          }
        
          table{
            margin: auto;
            background-color: white;
            border: 1px solid black;
            text-align: center;
          }

          td{
            min-width: 100px;
          }

          tr .botao{
            text-align: center;
          }
          
          td a{
            text-decoration: none;
            color: cadetblue;
            padding:10px;
          }

          #nomes td{
            color: #7D45F5;
            text-align: center;
          }

        </style>
      </head>

      <body>
        <h1>Lista de Alunos</h1>
        <table  border="1" class="borda">
         
          <tr id="nomes">
            <td>CODIGO</td>
            <td>NOME</td>
            <td>IDADE</td>
            <td>PERÍODO</td>
            <td>TURMA</td>
            <td colspan="2">OPÇÕES</td>
          </tr>
          <?php

            while($row = mysqli_fetch_assoc($resposta)){
              ?>
                <tr>
                  <td> <?php echo $row["cod_aluno"] ?> </td>
                  <td> <?php echo $row["nome"] ?> </td>
                  <td> <?php echo $row["idade"] ?> </td>
                  <td> <?php echo $row["periodo"] ?> </td>
                  <td> <?php echo $row["turma"] ?> </td>
                  <td><a href="editar.php?cod_aluno=<?php echo $row["cod_aluno"]?>">Editar</a></td>
                  <td><a href="deletar.php?cod_aluno=<?php echo $row["cod_aluno"]?>">Excluir</a></td>
                </tr>
              <?php
            }

            ?>

              <tr>
                <td colspan="7">
                    <a href="../index.html">Voltar</a>
                </td>
              </tr>
            <?php
          ?>
        </table>
      </body>

    </html>

    <?php
  }else{
    echo "Nenhum valor cadastrado!!";
  }

  mysqli_close($conexao);

?>