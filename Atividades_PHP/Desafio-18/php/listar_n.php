<?php

    session_start();
    include("conexao.php");

    if(isset($_SESSION['usuario'])){

        $id = $_SESSION['usuario'];
        $query_1 = "select * from notes where fk_usuario = '{$id}'";
        $resposta = mysqli_query($conexao, $query_1);

        if(mysqli_num_rows($resposta) > 0){
            ?>

            <html>

                <head>
                    <title>Anotações</title>
                    <meta charset="utf-8">
                    <link rel="stylesheet" href="../css/es.tarefas.css">
                </head>

                <body>
                    
                    <table>

                        <tr class="title_notes">
                            <td colspan="6">Anotações</td>
                        </tr>

                        <tr class="title_notes">
                            <td>Titulo</td>
                            <td>Descrição</td>
                            <td>Status</td>
                            <td colspan="2">Opções</td>
                        </tr>

                        <?php
                        
                        while($row = mysqli_fetch_assoc($resposta)){
                            ?>

                            <tr class="item_notes">
                                <td> <?php echo $row['titulo'] ?> </td>
                                <td> <?php echo $row['descricao'] ?> </td>

                                <?php

                                switch($row['status_notes']){
                                  case "S":
                                    echo " <td class='super'> Superimportante</td>";
                                    break;
                                  case "I":
                                    echo " <td class='impor'> Importante</td>";
                                    break;
                                  case "C":
                                    echo " <td class='cons'> Consultas</td>";
                                    break;
                                  default:
                                    echo " <td class='dia'> Dia-a-Dia</td>";
                                }

                                ?>

                                <td id="editar">
                                    <a href="editar_notes.php?id_n=<?php echo $row['id_notes'] ?>">Editar</a>
                                </td>

                                <td id="deletar">
                                    <a href="deletar.php?id_n=<?php echo $row['id_notes'] ?>">Excluir</a>
                                </td>

                            </tr>

                            <?php
                        }

                        ?>

                        <tr class="title_notes">
                            <td colspan="6">
                                <a href="painel.php">Voltar</a>
                            </td>
                        </tr>

                    </table>

                </body>

            </html>

            <?php
        }else{
            ?>

            <html>

                <head>
                    <title>Não tem Anotações</title>
                    <meta charset="utf-8">
                    <link rel="stylesheet" href="../css/es_concluido.css">
                </head>

                <body>
                    <div class="box">
                        <h1> Não existem Anotações criadas! </h1>
                        <a href="painel.php">Voltar</a>
                    </div>                    
                </body>

            </html>

            <?php
        }

    }else{
        header('Location: ../index.php');
    }

?>