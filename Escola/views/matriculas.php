<div class="tabela container">
    <h1>Matriculas</h1>
    <table class="table text-white">
        <thead>
            <tr>
                
                <th scope="col">Nome do aluno</th>
                <th scope="col">Curso realizado:</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <?php
        while ($array = mysqli_fetch_array($consulta_matriculas)) {
            echo '<tr><td>' . $array['nome_aluno'] . '</td>';
            echo '<td>' . $array['nome_curso'] . '</td>';
        ?>
                            <td><a class="btn btn-sm btn-danger" role="button" href="bd/delete_matricula.php?id_matricula=<?php echo $array['id_matricula']; ?>"><i class="fa-solid fa-trash"></i>&nbsp;Excluir</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>