<?php

include './conexao.php';

$nome_usuario = $_POST['nome_usuario'];
$senha_antiga = md5($_POST['senhaantiga']);
$senha_nova = md5($_POST['senhanova']);
$repetir_senha = md5($_POST['repetirsenhanova']);

//primeiro consultar a senha
$query = "SELECT * FROM USUARIOS WHERE USUARIO = '$nome_usuario' and  SENHA = '$senha_antiga'";
$consulta_senha = mysqli_query($conexao, $query);

if (mysqli_num_rows($consulta_senha) == 1) {
    // echo "a senha digitada é igual a do banco";
    if($senha_nova == $repetir_senha){
        $query = "UPDATE `usuarios` SET `senha` = '$senha_nova' WHERE `nome_usuario` = '$nome_usuario'";
    mysqli_query($conexao, $query);
    header('location:/escola/index.php?pagina=usuarios');
    } else{
        header('location:/escola/index.php?pagina=alterarsenha&erro2');
    }
} else {
    header('location:/escola/index.php?pagina=alterarsenha&erro1');
}