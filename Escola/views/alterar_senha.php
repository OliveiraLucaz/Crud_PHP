<div class="container">
  <h1>Alterando senha do usuário <?php echo $_SESSION['usuario']; ?>:</h1>
</div>
 <div class="container"><!-- formulário para alterar a senha -->
  <form method="POST" action="bd/alter_senha.php">
    <input type="hidden" name="nome_usuario" value="<?php echo $_SESSION['usuario'] ?>">


    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Senha atual:</label>
      <input required name="senhaantiga" type="password" minlength="3" maxlength="15" class="form-control">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Digite a nova senha:</label>
      <input required name="senhanova" type="password" minlength="3" maxlength="15" class="form-control">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Repita a nova senha:</label>
      <input required name="repetirsenhanova" type="password" minlength="3" maxlength="15" class="form-control">
    </div>
  <div class="container" style="padding:10px ;">
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
  </form>
  <?php if (isset($_GET['erro1'])) { ?>
    <div class="alert alert-danger" role="alert" style="text-align: center;">
      Senha atual incorreta!<br>Verifique suas informações.
    </div>
  <?php } ?>
  <?php if (isset($_GET['erro2'])) { ?>
    <div class="alert alert-danger" role="alert" style="text-align: center;">
      Comparação de senhas incorretas! A senha nova não é igual nos dois campos.<br>Verifique suas informações.
    </div>
  <?php } ?>
</div>