<?php
    
    session_start();
    include("conexao.php");

    if(isset($_SESSION['usuario'])){

        $id_notes = $_GET['id_n'];
        $query_1 = "select * from notes where id_notes = '{$id_notes}'";
        $resposta = mysqli_query($conexao, $query_1);

        $row = mysqli_fetch_assoc($resposta);

    }else{
        header('Location: ../index.php');
    }

?>

<html>

    <head>
        <title>Editar Anotação</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/es_form.css">
    </head>

    <body>
        <form action="atualizar.php?id_n=<?php echo $row['id_notes'] ?>" method="post">
            <div class="form_box-tarefa">

                <h1>Editar Anotações</h1>

                <label>Título</label>
                <input type="text" name="i_titulo" class="i_text" value="<?php echo $row['titulo'] ?>" required>

                <label>Descrição</label>
                <textarea name="i_descricao" cols="30" rows="10"  required><?php echo $row['descricao'] ?></textarea>

                <label>Status de importância</label>
                <select name="i_status" required>
                    
                    <?php
                        switch($row['status_notes']){

                            case "S":
                                echo "<option value='S' selected>Superimportante</option>";
                                echo "<option value='I'>Importante</option>";
                                echo "<option value='C'>Consultas</option>";
                                echo "<option value='D'>Dia-a-Dia</option>";
                                break;
                            case "I":
                                echo "<option value='S'>Superimportante</option>";
                                echo "<option value='I' selected>Importante</option>";
                                echo "<option value='C'>Consultas</option>";
                                echo "<option value='D'>Dia-a-Dia</option>";
                                break;
                            case "C":
                                echo "<option value='S'>Superimportante</option>";
                                echo "<option value='I' >Importante</option>";
                                echo "<option value='C' selected>Consultas</option>";
                                echo "<option value='D'>Dia-a-Dia</option>";
                                break;
                            default:
                                echo "<option value='S'>Superimportante</option>";
                                echo "<option value='I'>Importante</option>";
                                echo "<option value='C' >Consultas</option>";
                                echo "<option value='D' selected>Dia-a-Dia</option>";

                        }
                    ?>

                </select>

                <input type="submit" value="Salvar edição" class="btt_form-tarefa">

                <a href="listar_n.php">Voltar</a>

            </div>
        </form>
    </body>

</html>