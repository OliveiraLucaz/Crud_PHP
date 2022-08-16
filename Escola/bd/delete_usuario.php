<?php
include './conexao.php';

$id_usuario = $_GET['id_usuario'];
$query = "DELETE FROM USUARIOS WHERE id_usuario = $id_usuario";
mysqli_query($conexao, $query);

header('location:/escola/index.php?pagina=usuarios');