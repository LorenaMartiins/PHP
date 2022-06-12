<?php

  include "conexao.php";

  $cod = $_GET['cod_aluno'];
  $sql = "select * from alunos where cod_aluno = $cod";
  $resposta = $conexao->query($sql);

  if(mysqli_num_rows($resposta)){

    $row = mysqli_fetch_assoc($resposta);

    ?>
      <style>
        *{
          background: #f0f0f0;
        }
        a{
          text-decoration: none;
          color:cadetblue;
          padding:10px;
        }

        #bottom{
          color:white;
          width:100px;
          height: 30px;
          border:none;
          background-color:cornflowerblue;
        }
      </style>

      <h1>Editar as informações do aluno</h1>

      <form action="atualizar.php?cod_aluno=<?php echo $row['cod_aluno']; ?>" method="post">
        <input type="text" name="i_nome" placeholder="nome" value="<?php echo $row['nome']?>">
        <input type="number" name="i_idade" placeholder="idade" value="<?php echo $row['idade']?>">
        <input type="text" name="i_periodo" placeholder="período" value="<?php echo $row['periodo']?>">
        <input type="text" name="i_turma" placeholder="turma" value="<?php echo $row['turma']?>">
        <input type="submit" id="bottom" value="Atualizar" onclick="">
      </form>
  
      <a href="leitura.php" >Voltar</a>
      <a href="../index.html">Novo cadastro</a>
    <?php

  }else{
    echo "Nenhum valor cadastrado!";
  }

?>