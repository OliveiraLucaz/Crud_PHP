<?php
include 'conexao.php';
$id_aluno = $_POST['id_aluno'];
$id_curso = $_POST['id_curso'];
$query = "INSERT INTO MATRICULAS (id_aluno, id_curso) VALUES ('$id_aluno', '$id_curso')";
mysqli_query($conexao, $query);
header('location:\Escola\index.php?pagina=matriculas');



