<?php
include './conexao.php';

$id_aluno = $_GET['id_aluno'];
$query = "DELETE FROM ALUNOS WHERE id_aluno = $id_aluno";
mysqli_query($conexao, $query);

header('location:/escola/index.php?pagina=alunos');