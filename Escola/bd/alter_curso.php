<?php

include './conexao.php';

$id_curso = $_POST['id_curso'];
$nome_curso = $_POST['nome_curso'];
$carga_horaria = $_POST['carga_horaria'];

$query = "UPDATE `cursos` SET `nome_curso` = '$nome_curso', `carga_horaria` = '$carga_horaria' WHERE `cursos`.`id_curso` = '$id_curso'";

mysqli_query($conexao, $query);

header('location:/escola/index.php?pagina=cursos');