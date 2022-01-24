<?php
include('perfil_upload_foto.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatibsle" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="../css/perfil.css">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=Ubuntu:wght@300;500&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cantarell&family=Quicksand:wght@300&display=swap"
        rel="stylesheet">

    <title></title>
</head>

<body style="margin-top: 20px;">

    <!--NAV BAR-->
    <nav class="navbar navbar-default navbar-fixed-top navbar-top navbar-top1" id="menu">
        <div class="container-fluid">
            <div class="container">

                <a style="font-size: 2.5rem;" href="../php/painel_usuario.php" class="navbar-brand">PowerFit</a>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#barraNav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <div id="barraNav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="dashboard.php">MEU DASHBOARD</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../php/painel_usuario.php"><span class="glyphicon glyphicon-log-in"></span>
                                VOLTAR</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!--FIM NAVBAR -->

    <!--BANNER-->
    <div id="banner">
        <video id="background" src="../video/musculacao.mp4" autoplay="true" muted="true" loop="true">

        </video>
    </div>
    <!--FIM BANNER-->

    <!--CONTEUDO -->
    <div class="main-content">
        <div class="main-content-title">
            <h1 id="title">PERFIL</h1>
        </div>
        <div class="perfil-parent">
            <div class="perfil">
                <div class="perfil-img">
                    <div class="img">
                    <?php 
                    if(isset($_SESSION['foto-de-perfil'])):
                    ?>
                    <img src="../upload/<?php echo($_SESSION['foto-de-perfil'])?>" id="imgDefault">
                    <?php
                    endif;
                    ?>
                    <?php
                    if(isset($_SESSION['foto-de-perfil']) != true ):
                    ?>
                    <img src="../img/perfil.png" id="imgDefault">
                    <?php
                    endif;
                    ?>
                    </div>
                    <?php
                    if(isset($_SESSION['arquivo-invalido']) && $_SESSION['foto-de-perfil'] != true):
                    ?>
                    <div id="erro-login">
                        <p>Tipo de arquivo invalido!</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['arquivo-invalido']);
                    ?>
                </div>
                <div class="dados-perfil">
                    <h4 class="dados-perfil-item">Nome completo:
                        <span>
                            <?php echo ($_SESSION['nome']);?>
                        </span>
                    </h4>
                    <h4 class="dados-perfil-item">Nome de usario:
                        <span>
                            <?php echo ($_SESSION['usuario']);?>
                        </span>
                    </h4>

                    <h4 class="dados-perfil-item">Data de nascimento:
                        <span>
                            <?php echo ($_SESSION['idade']);?>
                        </span>
                    </h4>

                    <h4 class="dados-perfil-item">Genero:
                        <span>
                            <?php echo ($_SESSION['sexo']);?>
                        </span>
                    </h4>

                    <h4 class="dados-perfil-item">Email:
                        <span>
                            <?php echo ($_SESSION['email']);?>
                        </span>
                    </h4>

                    <h4 class="dados-perfil-item">Status
                        <span>
                            <?php echo ($_SESSION['status']);?>
                        </span>
                    </h4>

                    <h4 class="dados-perfil-item">Ativo desde:
                        <span>
                            <?php echo ($_SESSION['data_cadastro']);?>
                        </span>
                    </h4>
                    <form action="perfil_upload_foto.php" method="POST" enctype="multipart/form-data">
                        <input type="file" id="perfil-img" name="imagem" accept="image/*">
                        <button type="submit" class="btn" id="btn-foto-perfil">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--FIM CONTEUDO-->
    
    <script src="../js/perfil-input-img.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

<script>
    (function () {
        var menu = document.getElementById('menu');
        window.addEventListener('scroll', function () {

            if (window.scrollY == 0) menu.classList.add('navbar-top');
            else menu.classList.remove('navbar-top');
        });
    })();

    (function () {
        var menu = document.getElementById('menu');
        window.addEventListener('scroll', function () {

            if (window.scrollY > 0) menu.classList.add('navbar-top1');
        });
    })();

</script>

<style type="text/css">
    .navbar-top {
        background-color: rgba(0, 0, 0, 0);
    }

    .navbar-top1 {
        transition: 0.5s;
    }
</style>


</html>