<?php
include './conexao.php';

$id_curso = $_GET['id_curso'];
$query = "DELETE FROM CURSOS WHERE id_curso = $id_curso";
mysqli_query($conexao, $query);

header('location:/escola/index.php?pagina=cursos');