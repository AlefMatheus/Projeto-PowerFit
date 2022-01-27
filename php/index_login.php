<?php
session_start()

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

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=Ubuntu:wght@300;500&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cantarell&family=Quicksand:wght@300&display=swap"
        rel="stylesheet">
    <title>Login</title>
</head>

<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Outfit:wght@200&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');
    body,
    html {
        height: 100% !important; 
        width: 100%;
        font-family: Comfortaa;
        font-size: 0.95rem;
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
</style>

<body>

    <div class="login">
        <div class="login-form">
            <div class="login-form-wrapper" data-aos="fade-down" data-aos-duration="1000">
                <div data-aos="fade-right" data-aos-duration="1000" id="bannerLogin">
                    <h1 id="textH1" class="text-left"><a id="btn-back-index" href="../views/index.php">PowerFit</a> - Login</h1>
                    <p style="color: rgb(0, 0, 0);">Junte-se a nós :)</p>
                </div>
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <p>Usuario ou senha Invalidos</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>   
                <form id="form" action="login.php" method="POST">
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp"
                            placeholder="exemple@email.com">
                    </div>
                    <div class="mb-3">
                        <label for="inputSenha" class="form-label">Senha:</label>
                        <input type="password" name="senha" class="form-control" id="inputSenha" placeholder="senha">
                    </div>
                    <div class="mb-3 form-check">
                        <input onclick="mostra()" type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Mostrar Senha</label>
                    </div>
                    <button type="submit" class="btn btn-primary"> Entrar</button>
                    <p style="margin-top: 15px; font-size: 16px;">Não tem uma conta? <a id="cadastro"
                            href="../php/index_cadastro.php">Cadastre-se agora</a></p>
                </form>
            </div>
        </div>
        <div class="div-banner">
            <div data-aos="fade-down" data-aos-duration="1000" class="cartaz">
                <img id="cartaz" src="https://i.ibb.co/WVZywTW/Design-sem-nome-15.png">
            </div>
        </div>
    </div>
</body>

<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../plugins/jquery/jquery-validation-1.19.3/dist/jquery.validate.min.js"></script>
<script src="../plugins/jquery/jquery-validation-1.19.3/dist/additional-methods.min.js"></script>
<script src="../plugins/jquery/jquery-validation-1.19.3/dist/localization/messages_pt_BR.min.js"></script>
<script src="../plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../plugins/fontawesome/js/all.min.js"></script>
<script src="../plugins/jquery/sweetalert/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="../js/ajax.js"></script>
<script src="../js/login.js"></script>
<script>
    AOS.init();
</script>

<script type="text/javascript">
    function mostra() {
        var senha = document.getElementById("inputSenha");
        if (senha.type === "password") {
            senha.type = "text";
        } else {
            senha.type = "password";
        }
    }

</script>

</html>