<?php
#abre a sessão
session_start();
#modularização de codigo
#fazendo a nclusão conforme for sesenvolvendo
include 'bd/conexao.php'; #TODA VEZ QUE A INDEX CARREGAR ABRE A CONEXAO COM O BANCO DE DADOS
include 'bd/consultas.php';
include 'views/header.php';

if (isset($_SESSION['login'])) {
    if (isset($_GET['pagina'])) {
        $pagina = $_GET['pagina'];
    } else {
        $pagina = 'home';
    }
} else {
    $pagina = 'login';
}








switch ($pagina) {
    case 'cursos':
        include 'views/cursos.php';
        break;
    case 'alunos':
        include 'views/alunos.php';
        break;
    case 'matriculas':
        include 'views/matriculas.php';
        break;
    case 'usuarios':
        include 'views/usuarios.php';
        break;
    case 'cadastrarcursos':
        include 'views/inserir_curso.php';
        break;
    case 'cadastraralunos':
        include 'views/inserir_aluno.php';
        break;
    case 'cadastrarusuario':
        include 'views/inserir_usuario.php';
        break;
    case 'cadastrarmatriculas':
        include 'views/inserir_matriculas.php';
        break;
    case 'login':
        include 'views/login.php';
        break;
    case 'alterarsenha':
        include 'views/alterar_senha.php';
        break;
    default:
        include 'views/home.php';
}


include 'views/footer.php';
