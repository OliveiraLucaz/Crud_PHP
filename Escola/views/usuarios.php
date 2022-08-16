<div class="tabela">
    <h1>Usuários do sistema:</h1>
    <table class="table text-white">
        <thead>
            <tr>
                <th scope="col">Nome usuario</th>
                <th scope="col">Usuario</th>
                <th scope="col">Apagar</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <?php
            while ($array = mysqli_fetch_array($consulta_usuarios)) {
                echo '<tr><td>' . $array['nome_usuario'] . '</td>';
                echo '<td>' . $array['usuario'] . '</td>';
        ?>
            <td><a class="btn btn-sm btn-danger" role="button" href="bd/delete_usuario.php?id_usuario=<?php echo $array['id_usuario']; ?>"><i class="fa-solid fa-trash"></i>&nbsp;Excluir</a></td>
            <td><a class="btn btn-sm btn-warning" role="button" href="?pagina=cadastrarusuario&editar=<?php echo $array['id_usuario']; ?>"><i class="fa-solid fa-pen-to-square"></i>&nbsp;Editar</a></td></tr>
            <?php
            }
            ?>

    </table>
</div>