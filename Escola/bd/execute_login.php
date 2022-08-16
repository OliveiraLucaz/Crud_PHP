<?php
//processo de login

include './conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// echo $usuario;
// echo $senha;

$query = "SELECT * FROM USUARIOS WHERE USUARIO = '$usuario' and SENHA = '$senha'";
$consulta_usuario = mysqli_query($conexao, $query);

if(mysqli_num_rows($consulta_usuario)== 1 ){
    $_SESSION['login'] = true;
    header('location:/escola/index.php');
}
else{
    header('location:/escola/index.php?erro');
}

