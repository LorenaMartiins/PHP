<?php
  
  include "conexao.php";

  $cod = $_GET['cod_prod'];
  $sql = "delete from produto where cod_prod =$cod";

  if(mysqli_query($conexao, $sql)){
    include "leitura.php";
  }else{
    echo "Erro na hora de deletar o registro!";
  }

?>