<?php
include './conexao.php';

$id_matricula = $_GET['id_matricula'];
$query = "DELETE FROM MATRICULAS WHERE id_matricula = $id_matricula";
mysqli_query($conexao, $query);

header('location:/escola/index.php?pagina=matriculas');
