<?php

    session_start();
    include("conexao.php");

    if(isset($_SESSION['usuario'])){

        $id = $_SESSION['usuario'];
        $query_1 = "select * from tarefa where fk_usuario = '{$id}'";
        $resposta = mysqli_query($conexao, $query_1);

        if(mysqli_num_rows($resposta) > 0){
            ?>

            <html>

                <head>
                    <title>Tarefas</title>
                    <meta charset="utf-8">
                    <link rel="stylesheet" href="../css/es_tarefas.css">
                </head>

                <body>
                    
                    <table>

                        <tr class="title_tr">
                            <td colspan="6">Tarefas</td>
                        </tr>

                        <tr class="title_tr">
                            <td>Titulo</td>
                            <td>Descrição</td>
                            <td>Data</td>
                            <td>Status</td>
                            <td colspan="2">Opções</td>
                        </tr>

                        <?php
                        
                        while($row = mysqli_fetch_assoc($resposta)){
                            ?>

                            <tr class="item_tr">
                                <td> <?php echo $row['titulo'] ?> </td>
                                <td> <?php echo $row['descricao'] ?> </td>
                                <td> <?php echo date("d/m/Y", strtotime($row['data_cadastro'])) ?> </td>

                                <?php

                                switch($row['status_tarefa']){
                                    case "P":
                                        echo "<td class='pen'> Pendente </td>";
                                        break;
                                    case "I":
                                        echo "<td class='ini'> Iniciado </td>";
                                        break;
                                    default:
                                        echo "<td class='con'> Concluido </td>";
                                }

                                ?>

                                <td>
                                    <a href="editar_tarefa.php?id_t=<?php echo $row['id_tarefa'] ?>">Editar</a>
                                </td>

                                <td>
                                    <a href="deletar_t.php?id_t=<?php echo $row['id_tarefa'] ?>">Excluir</a>
                                </td>

                            </tr>

                            <?php
                        }

                        ?>

                        <tr class="title_tr">
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
                    <title>Não tem tarefas</title>
                    <meta charset="utf-8">
                    <link rel="stylesheet" href="../css/es_concluido.css">
                </head>

                <body>
                    <div class="box">
                        <h1> Não existem tarefas criadas! </h1>
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