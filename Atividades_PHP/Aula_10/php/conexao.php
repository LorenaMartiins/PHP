<?php
    $nome_server = "localhost";
    $nome_usuario = "root";
    $senha = "";
    $nome_bd = "loja_bd";

    $conexao = mysqli_connect($nome_server, $nome_usuario, $senha, $nome_bd);

    // verifica a conexão com o banco de dados
    // if($conexao){
    //     echo "Conexão feita com sucesso!";
    // }else{
    //     echo "Falha ao conectar o banco de dados!";
    // }
?>