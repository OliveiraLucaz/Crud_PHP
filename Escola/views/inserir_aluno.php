<?php if(!isset($_GET['editar'])){?>


<div class="container">
<h1 >Cadastro de novos alunos:</h1>
<form method="POST" action="bd/insert_aluno.php" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome do aluno:</label>
    <input required name="nome_aluno" type="text" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">E-mail:</label>
    <input required name="email" type="email" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Data de nascimento:</label>
    <input required name="data_nascimento" type="date" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Cadastrar aluno</button>
</form>
</div>

<?php } else { ?>
  <?php while($array=mysqli_fetch_array($consulta_alunos)){?>
    <?php if($array['id_aluno'] == $_GET['editar']){ ?>
  
<div class="container">
  <h1 >Editar cadastro de aluno:</h1>
<form method="POST" action="bd/alter_aluno.php" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome do aluno:</label>
    <input type="hidden" name="id_aluno" value="<?php echo $array['id_aluno'] ?>">
    <input required name="nome_aluno" type="text" class="form-control" aria-describedby="emailHelp" value="<?php echo $array['nome_aluno'] ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">E-mail:</label>
    <input required name="email" type="email" class="form-control" value="<?php echo $array['email'] ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Data de nascimento:</label>
    <input required name="data_nascimento" type="date" class="form-control" value="<?php echo $array['data_nascimento'] ?>">
  </div>

  <button type="submit" class="btn btn-primary">Salvar alterações</button>
</form>
</div>

  <?php } ?>
  <?php } ?>
  <?php } ?>