<?php 
include 'conexao.php';


$usuario = addslashes( $_POST['usuario']);
$senha = md5( $_POST['senha']);




$query = "SELECT * FROM USUARIOS WHERE USUARIO = '$usuario' and SENHA = '$senha'";
$consulta_usuario = mysqli_query($conexao, $query);

// echo "$usuario";
// echo "$senha";

if (mysqli_num_rows($consulta_usuario) == 1) {
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = $usuario;
    header('location:/escola/index.php');
} else {
    header('location:/escola/index.php?erro');
}