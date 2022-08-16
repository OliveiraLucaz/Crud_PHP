<main>
    <div class="tabela container">
        <h1>Alunos cadastrados:</h1>
        <div class="estilizacao">
            <?php
            ?>
        </div>
        <table class="table text-white">
            <thead>
                <tr>
                    <th scope="col">Nome do aluno</th>
                    <th scope="col">Data de nascimento</th>
                    <th scope="col">E-mail de contato</th>
                    <th scope="col">Excluir</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <?php
            while ($array = mysqli_fetch_array($consulta_alunos)) {

                echo '<tr><td>' . $array['nome_aluno'] . '</td>';
                echo '<td>' . $array['data_nascimento'] . '</td>';
                echo '<td>' . $array['email'] . '</td>';
            ?>
                <td><a class="btn btn-sm btn-danger" role="button" href="bd/delete_aluno.php?id_aluno=<?php echo $array['id_aluno']; ?>"><i class="fa-solid fa-trash"></i>&nbsp;Excluir</a></td>
                <td><a class="btn btn-sm btn-warning" role="button" href="?pagina=cadastraralunos&editar=<?php echo $array['id_aluno']; ?>"><i class="fa-solid fa-pen-to-square"></i>&nbsp;Editar</a></td>
                </tr>



            <?php
            }
            ?>



        </table>
    </div>
</main>