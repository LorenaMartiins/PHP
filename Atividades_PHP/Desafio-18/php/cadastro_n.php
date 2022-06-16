<?php
  session_start();
  include("conexao.php");

  if(isset($_SESSION['usuario'])){

    $fk_usuario = $_SESSION['usuario'];
    $titulo_n = $_POST['i_titulo'];
    $descricao_n = $_POST['i_descricao'];
    $status_n = $_POST['i_status'];

    $query_1 = "insert into notes (fk_usuario, titulo, descricao, status_notes)
      values('{$fk_usuario}', '{$titulo_n}', '{$descricao_n}', '{$status_n}')";

    mysqli_query($conexao, $query_1);

    header("Location: painel.php");

  }else{
    header("Location: ../index.php");
  }
?>