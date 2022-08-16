<?php if(!isset($_GET['editar'])){?>

  
<div class="container">
  <h1 >Cadastro de novos usuários no sistema:</h1>
<form method="POST" action="bd/insert_usuario.php" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome:</label>
    <input required name="nome_usuario" type="text" class="form-control" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">User:</label>
    <input required name="usuario" minlength="3" maxlength="15" type="text" class="form-control">
    <div id="emailHelp" class="form-text text-white">O usuário deve conter no mínimo 3 caracteres e no máximo 15.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha:</label>
    <input required name="senha" type="password" minlength="3" maxlength="15" class="form-control">
    <div id="emailHelp" class="form-text text-white">A senha deve conter no mínimo 3 caracteres e no máximo 15.</div>
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar novo usuário</button>
</form>
</div>

<?php } else { ?>
  <?php while($array=mysqli_fetch_array($consulta_usuarios)){?>
    <?php if($array['id_usuario'] == $_GET['editar']){ ?>

<div class="container">
<h1 >Editar usuários no sistema:</h1>
<form method="POST" action="bd/alter_usuario.php" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome:</label>
    <input type="hidden" name="id_usuario" value="<?php echo $array['id_usuario'] ?>">
    <input required name="nome_usuario" type="text" class="form-control" aria-describedby="emailHelp" value="<?php echo $array['nome_usuario'] ?>">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">User:</label>
    <input required name="usuario" minlength="3" maxlength="15" type="text" class="form-control" value="<?php echo $array['usuario'] ?>">
    <div id="emailHelp" class="form-text text-white">O usuário deve conter no mínimo 3 caracteres e no máximo 15.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha:</label>
    <input required name="senha" type="password" minlength="3" maxlength="15" class="form-control" value="<?php echo $array['senha'] ?>">
    <div id="emailHelp" class="form-text text-white">A senha deve conter no mínimo 3 caracteres e no máximo 15.</div>
  </div>
  <button type="submit" class="btn btn-primary">Salvar alterações</button>
</form>
</div>

<?php } ?>
<?php } ?>
<?php } ?>

