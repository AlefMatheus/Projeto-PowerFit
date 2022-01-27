<?php
session_start();
include("conexao.php")
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatibsle" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../plugins/jquery/sweetalert/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=Ubuntu:wght@300;500&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cantarell&family=Quicksand:wght@300&display=swap"
        rel="stylesheet">
    <title>Cadastro</title>
</head>

<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@200&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');

    body,
    html {
        height: auto;
        font-family: Comfortaa;
    }

    .login {
        font-size: 0.9rem;
    }

    .login-form {
        width: 100%;
    }

    .login-form-wrapper {
        height: 100%;
    }
    ::-webkit-scrollbar {
                width: 10px;
                height: 10px;
            }
            
             ::-webkit-scrollbar-track {
                background-color: rgb(12, 12, 12);
                box-shadow: inset 0 0 5px rgb(22, 22, 22);
            }
            
             ::-webkit-scrollbar-thumb {
                background: rgb(255, 143, 9);
                background: linear-gradient(0deg, rgb(255, 91, 15) 0%, rgb(252, 101, 0) 43%, rgb(255, 38, 0) 81%, rgb(240, 28, 0) 99%);
                border-radius: 100px;
            }
            @media only screen and (max-width: 768px){
                .login-form-wrapper{
                    margin: 30px;
                    margin-left: 35px;
                }
                h3#textH1{
                    font-size: 1.3rem;
                }
            }
</style>

<body>
    <div class="login">
        <div class="login-form">
            <div class="login-form-wrapper" data-aos="fade-down" data-aos-duration="1000">
                <div data-aos="fade-right" data-aos-duration="1000" id="bannerLogin">
                    <h3 id="textH1" class="text-left"><a id="btn-back-index" href="../views/index.php">PowerFit</a> - Cadastro</h3>
                    <p style="color: rgb(0, 0, 0);">Junte-se a nós!</p>
                </div>
                <form id="form" action="../php/cadastrar_usuario.php" method="POST">
                    <?php
                    if (isset($_SESSION['status_cadastro'])):
                    ?>
                    <div class="alert alert-success" role="alert">
                        <p>Cadastro efetuado com sucesso! <br>
                            faça login informando o seu email e senha clicando <a href="index_login.php">aqui</a></p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['status_cadastro']);
                    ?>
                    <?php
                    if (isset($_SESSION['usuario_existe'])):
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <p>O usuario escolhido ja existe. Informe outro e tente novamente.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['usuario_existe']);
                    ?>
                    <?php
                    if (isset($_SESSION['campo_vazio'])):
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <p>Preencha todos os campos fdp</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['campo_vazio']);
                    ?>
                    <?php
                    if (isset($_SESSION['senhas-nao-coincidem'])):
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <p>As senhas nao coincidem.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['senhas-nao-coincidem']);
                    ?>
                    <?php
                    if (isset($_SESSION['minimo-senha'])):
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <p>A senha deve ter no minimo 8 caracteres.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['minimo-senha']);
                    ?>

                    <div class="mb-3">
                        <label for="inputNome" class="form-label">Nome:</label>
                        <input type="text" name="nome" class="form-control" id="inputNome"
                            placeholder="digite seu nome completo">
                    </div>
                    <div class="mb-3">
                        <label for="inputUsuario" class="form-label">Usuário:</label>
                        <input type="text" name="usuario" class="form-control" id="inputUsuario"
                            placeholder="digite aqui seu apelido">
                    </div>
                    <div class="mb-3">
                        <label for="inputSexo" class="form-label">Sexo</label>
                        <select name="sexo" class="form-select" id="inputSexo">
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                            <option value="Indefinido">Indefinido</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="inputIdade" class="form-label">Data de nascimento</label>
                        <input type="date" name="idade" class="form-control" id="inputIdade">
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" id="inputEmail"
                            aria-describedby="emailHelp" placeholder="exemple@email.com">
                    </div>
                    <div class="mb-3">
                        <label for="inputSenha" class="form-label">Senha:</label>
                        <input type="password" name="senha" class="form-control" id="inputSenha" placeholder="senha">
                    </div>
                    <div class="mb-3">
                        <label for="inputConfirmarSenha" class="form-label">Confirmar Senha</label>
                        <input type="password" name="confirmarSenha" class="form-control" id="inputConfirmarSenha"
                            placeholder="senha">
                    </div>
                    <div class="mb-3 form-check">
                        <input onclick="mostra()" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Mostrar Senha</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <p style="margin-top: 15px; font-size: 16px;">Já tem uma conta?<a href="../php/index_login.php"
                            id="cadastro">
                            Entrar</a></p>

                </form>
            </div>
        </div>
    </div>
</body>
<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../plugins/jquery/jquery-validation-1.19.3/dist/jquery.validate.min.js"></script>
<script src="../plugins/jquery/jquery-validation-1.19.3/dist/additional-methods.min.js"></script>
<script src="../plugins/jquery/jquery-validation-1.19.3/dist/localization/messages_pt_BR.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>
<script src="../plugins/fontawesome/js/all.min.js"></script>
<script src="../plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>
<script src="../plugins/jquery/sweetalert/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="../js/ajax.js"></script>
<script src="../js/cadastro.js"></script>
<script>
    AOS.init();
</script>

<script type="text/javascript">
    function mostra() {
        var senha = document.getElementById("inputSenha");
        var confirmarSenha = document.getElementById("inputConfirmarSenha");
        if (senha.type === "password") {
            senha.type = "text";
        } else {
            senha.type = "password";
        }
        if (confirmarSenha.type === "password") {
            confirmarSenha.type = "text";
        } else {
            confirmarSenha.type = "password";
        }
    }
    /*window.onload = function () {

        document.getElementById("form").addEventListener("submit", login, false);
    }

    /*function login(event) {
        event.preventDefault();

        console.log("oi", event)

        // window.location.href = "index.html"
    }*/
</script>

</html>