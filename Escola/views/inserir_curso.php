<?php if (!isset($_GET['editar'])) { ?>
  
  <div class="container">
    <h1>Cadastro de novos cursos:</h1>
    <form method="POST" action="bd/insert_curso.php">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nome do curso:</label>
        <input required name="nome_curso" type="text" class="form-control" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Carga horária:</label>
        <input required name="carga_horaria" type="number" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>
<?php } else { ?>
  <?php while ($array = mysqli_fetch_array($consulta_cursos)) { ?>
    <?php if ($array['id_curso'] == $_GET['editar']) { ?>
      
      <div class="container">
        <h1>Editando informações de um curso:</h1>
        <form method="POST" action="bd/alter_curso.php">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome do curso:</label>
            <input type="hidden" name="id_curso" value="<?php echo $array['id_curso'] ?>">
            <input required name="nome_curso" type="text" class="form-control" aria-describedby="emailHelp" value="<?php echo $array['nome_curso'] ?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Carga horária:</label>
            <input required name="carga_horaria" type="number" class="form-control" value="<?php echo $array['carga_horaria'] ?>">
          </div>
          <button type="submit" class="btn btn-primary">Salvar edição</button>
        </form>
      </div>
    <?php } ?>
  <?php } ?>
<?php } ?>