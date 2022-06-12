<?php

  include("conexao.php");

  $nome = $_POST['i_nome'];
  $sobrenome = $_POST['i_sobrenome'];
  $usuario = $_POST['i_usuario'];
  $senha = $_POST['i_senha'];
  $foto = $_FILES['i_foto'];


  $query_1 = "select * from usuario where login = '{$usuario}'";
  $resposta = mysqli_query($conexao, $query_1);
  $row = mysqli_num_rows($resposta);

  if($row == 1){
    echo "Nome de usuario já esta em uso!!";
  }else{
    
    $novo_nome_foto = uniqid();
    $pasta = "../upload/";
    $extensao = strtolower(pathinfo($foto['name'], PATHINFO_EXTENSION));
    $caminho = $pasta . $novo_nome_foto . "/" . $extensao;

    $move = move_uploaded_file($foto['tmp_name'], $caminho);

    if($move){
      $query_2 = "insert into usuario (nome, sobrenome, login, senha, foto) 
      values ('{$nome}', '{$sobrenome}', '{$usuario}', md5('{$senha}'), '{$caminho}')";
      
      mysqli_query($conexao, $query_2);
    }

  }

?>