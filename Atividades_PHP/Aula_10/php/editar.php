<?php

  include "conexao.php";

  $cod = $_GET['cod_prod'];
  $sql = "select * from produto where cod_prod=$cod";
  $resposta = $conexao->query($sql);

  if(mysqli_num_rows($resposta) > 0){
    $row = mysqli_fetch_assoc($resposta);

    ?>
<h1>Editar o produto</h1>
<form action="atualizar.php?cod_prod=<?php echo $row["cod_prod"] ?>" method="post">
  <input type="text" name="i_nome" placeholder="nome" value="<?php echo $row["nome"]?>">
  <input type="number" name="i_quantidade" placeholder="quantidade" value="<?php echo $row["quantidade"]?>">
  <input type="text" name="i_preco" placeholder="preço" value="<?php echo $row["preco"]?>">
  <input type="submit" value="atualizar" onclick="">
</form>
<?php

  }else{
    echo "Nenhuma informação registrada!!";
  }

?>