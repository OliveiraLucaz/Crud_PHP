<link rel="stylesheet" href="css/login.css">
<div class="login container">
    <main>
        <section class="background-radial-gradient overflow-hidden">
            <style>
                header{
                    display: none;
                }
                .rodape{
                    display: none;
                }
                .background-radial-gradient {
                    background: rgba(255, 255, 255, 0.2);
                    border-radius: 16px;
                    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                    backdrop-filter: blur(5px);
                    -webkit-backdrop-filter: blur(5px);
                    border: 1px solid rgba(255, 255, 255, 0.3);
                }
                .bg-glass {
                    background-color: hsla(0, 0%, 100%, 0.9) !important;
                    backdrop-filter: saturate(200%) blur(25px);
                }
            </style>
            <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
                <div class="row gx-lg-5 align-items-center mb-5">
                    <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                        <h2 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)"> Bem-vindo!<br />
                            Digite suas informações <br />
                            <span style="color:#fff">para fazer login</span>
                        </h2>
                        <p class="mb-4 opacity-70" style="color: #ddd">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Temporibus, expedita iusto veniam atque.
                        </p>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                        <div class="card bg-glass">
                            <div class="card-body px-4 py-5 px-md-5">
                                <form method="POST" action="bd/select_login.php">
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <div class="row">

                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <label class="form-label text-dark" for="form3Example3">Usuário</label>
                                            <input type="text" name="usuario" id="form3Example3" required class="form-control" />

                                        </div>

                                        <!-- Password input -->
                                        <div class="form-outline mb-4">
                                            <label class="form-label text-dark" for="form3Example4">Senha</label>
                                            <input name="senha" type="password" required id="form3Example4" class="form-control" />

                                        </div>

                                        <!-- Checkbox -->
                                        <!-- <div class="form-check d-flex justify-content-center mb-4">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" />
                                            <label class="form-check-label text-dark" for="form2Example33">
                                                Estou de acordo com os termos de uso
                                            </label>
                                        </div> -->

                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-primary btn-block mb-4">
                                            entrar
                                        </button>
                                </form>
                            </div>
                            <?php if (isset($_GET['erro'])) { ?>
                                <div class="alert alert-danger" role="alert" style="text-align: center;">
                                    Usuário ou senha inválidos!<br>Verifique suas informações.
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>




        </section>
    </main>
</div>