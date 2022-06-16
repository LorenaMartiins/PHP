<?php
  include("verifica_usuario.php");
?>

<html>
  <head>
    <title>Nova anotação</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/es_form.css">
  </head>

  <body>
    <form action="cadastro_n.php" method="post" class="container-cad">
        <div class="form_box-tarefa">

          <h1>Nova anotação</h1>

          <label>Título</label>
          <input type="text" name="i_titulo" class="i_text" required>

          <label>Descrição</label>
          <textarea name="i_descricao" cols="30" rows="10" class="i_area" required></textarea>

          <label>Status de importância</label>
          <select name="i_status" required>
            <option value=""></option>
            <option value="S">Superimpotante</option>
            <option value="I">Importante</option>
            <option value="C">Consultas</option>
            <option value="D">Dia-a-Dia</option>
          </select>

          <input type="submit" value="Criar anotação" class="btt_form-tarefa">

          <a href="painel.php">Voltar</a>
        </div>
    </form>
  </body>
</html>