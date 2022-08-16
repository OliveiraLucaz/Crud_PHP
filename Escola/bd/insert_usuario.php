<?php

include './conexao.php';

$nome_usuario = addslashes( $_POST['nome_usuario']);
$usuario = addslashes( $_POST['usuario']);
$senha = md5( $_POST['senha']);

$query = "INSERT INTO usuarios (nome_usuario, usuario, senha) VALUES ('$nome_usuario', '$usuario', '$senha')";
mysqli_query($conexao, $query);

header('location:\Escola\index.php?pagina=usuarios');