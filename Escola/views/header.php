<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Escola Técnica</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body class="text-white">
  <header class="p-3 bg-dark text-white">
    <div class="container text-white">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start text-white">
        

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="?pagina=home" class="nav-link px-2 text-secondary text-white">Início</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cursos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="?pagina=cursos"><i class="fa-solid fa-list minha_margem"></i>Listar cursos</a></li>
              <li><a class="dropdown-item" href="?pagina=cadastrarcursos"><i class="fa-solid fa-file-pen minha_margem minha_margem"></i>Cadastrar um novo curso</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Alunos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="?pagina=alunos"><i class="fa-solid fa-list minha_margem"></i>Listar alunos</a></li>
              <li><a class="dropdown-item" href="?pagina=cadastraralunos"><i class="fa-solid fa-file-pen minha_margem minha_margem"></i>Cadastrar alunos</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Matrículas
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="?pagina=matriculas"><i class="fa-solid fa-list minha_margem"></i>Listar matriculas</a></li>
              <li><a class="dropdown-item" href="?pagina=cadastrarmatriculas"><i class="fa-solid fa-file-pen minha_margem minha_margem"></i>Matricular um novo aluno</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Usuários
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="?pagina=usuarios"><i class="fa-solid fa-list minha_margem"></i>Listar usuários do sistema</a></li>
              <li><a class="dropdown-item" href="?pagina=cadastrarusuario">
                  <i class="fa-solid fa-file-pen minha_margem minha_margem"></i>Cadastrar um novo usuário no sistema</a></li>
            </ul>
          </li>


          
        </ul>
        <div class="dropdown">
            <?php if (isset($_SESSION['login'])) { ?>
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">

                <?php echo $_SESSION['usuario']; ?></button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <li><a href="?pagina=alterarsenha" style="text-decoration: none;"><button class="dropdown-item" type="button">Alterar Senha</button></li></a>
                <li><a href="bd/logout.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Sair (logout)</button></li></a>
              </ul>
            <?php } ?>
          </div>
      </div>
    </div>
  </header>