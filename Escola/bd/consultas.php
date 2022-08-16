<?php
include 'conexao.php';
$query = "select * from CURSOS";
$consulta_cursos = mysqli_query($conexao, $query);

$queryalunos = "select * from alunos";
$consulta_alunos = mysqli_query($conexao, $queryalunos);

$queryusuarios = "select * from usuarios";
$consulta_usuarios = mysqli_query($conexao, $queryusuarios);

$querymatriculas = "select matriculas.id_matricula, alunos.nome_aluno, cursos.nome_curso from alunos, cursos, matriculas where matriculas.id_aluno = alunos.id_aluno and matriculas.id_curso = cursos.id_curso";
$consulta_matriculas = mysqli_query($conexao, $querymatriculas);