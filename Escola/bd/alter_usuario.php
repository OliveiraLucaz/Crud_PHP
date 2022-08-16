<?php

include './conexao.php';

$id_usuario = $_POST['id_usuario'];
$nome_usuario =$_POST['nome_usuario'];
$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);

$query = "UPDATE `usuarios` SET `nome_usuario` = '$nome_usuario', `usuario` = '$usuario', `senha` = '$senha' WHERE `id_usuario` = '$id_usuario'";

mysqli_query($conexao, $query);

header('location:/escola/index.php?pagina=usuarios');
