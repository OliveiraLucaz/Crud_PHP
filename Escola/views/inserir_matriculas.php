<main>
    <div class="container" style="margin-top:20px;" >
        <h1>Inserir nova matrícula:</h1>
        <form  method="POST" action="bd/insert_matriculas.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome do aluno:</label>
                <select class="form-select" aria-label="Default select example" name="id_aluno" required oninvalid="this.setCustomValidity('É necessário selecionar ao menos 1 aluno cadastrado!')" oninput="this.setCustomValidity('')">
                <option selected disabled></option>

                <?php
            while ($array = mysqli_fetch_array($consulta_alunos)) {?>

                <option value="<?php echo $array['id_aluno']; ?>" ><?php echo $array['nome_aluno']; ?></option>";
            <?php }
            ?>

                </select>
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome do curso:</label>
                <select class="form-select" aria-label="Default select example" name="id_curso" required oninvalid="this.setCustomValidity('É necessário selecionar ao menos 1 curso para realizar a matrícula.')" oninput="this.setCustomValidity('')">
                <option selected disabled></option>

                <?php
            while ($array = mysqli_fetch_array($consulta_cursos)) {?>

                <option value="<?php echo $array['id_curso']; ?>" ><?php echo $array['nome_curso']; ?></option>";
            <?php }
            ?>

                </select>
                
            </div>
            
            <button type="submit" class="btn btn-primary">Realizar matricula</button>
        </form>
    </div>
</main>