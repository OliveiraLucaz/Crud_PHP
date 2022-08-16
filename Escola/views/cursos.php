<div class="tabela container">
    <h1>Lista de cursos nesta unidade:</h1>
    <table class="table text-white">
        <thead>
            <tr>
                <th scope="col">Nome curso</th>
                <th scope="col">Carga Horária</th>
                <th scope="col">Excluir</th>
                <th scope="col">Alterar</th>
            </tr>
        </thead>
        <?php
        while ($array = mysqli_fetch_array($consulta_cursos)) {
            echo '<tr><td>' . $array['nome_curso'] . '</td>';
            echo '<td>' . $array['carga_horaria'] . '</td>';
        ?>
            <td><a class="btn btn-sm btn-danger" role="button" href="bd/delete_curso.php?id_curso=<?php echo $array['id_curso']; ?>"><i class="fa-solid fa-trash"></i>&nbsp;Excluir</a></td>

            <td><a class="btn btn-sm btn-warning" role="button" href="?pagina=cadastrarcursos&editar=<?php echo $array['id_curso']; ?>"><i class="fa-solid fa-pen-to-square"></i>&nbsp;Alterar</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>