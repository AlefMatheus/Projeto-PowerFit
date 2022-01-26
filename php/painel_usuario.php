<?php
include('verifica_login.php');
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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=Ubuntu:wght@300;500&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cantarell&family=Quicksand:wght@300&display=swap"
        rel="stylesheet">

    <title>Bem vindo, <?php echo ($_SESSION['usuario']);?>!</title>
    <link rel="stylesheet" href="../css/estiloSocio.css">

</head>

<style>
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
                        <li class="dropdownn">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">DICAS<span
                                    class="caret"></span></a>

                            <ul class="dropdown-menu">
                                <li><a href="../views/resumoMusculacao.html">EXERCICÍOS FÍSICOS</a></li>
                                <li><a href="../views/resumoNutricao.html">NUTRIÇÃO</a></li>
                                <li><a href="../views/resumoSaude.html">SAÚDE</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="dropdownn">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">MODALIDAES<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="../views/modmusculacao.html">MUSCULAÇÃO</a></li>
                                <li><a href="../views/modnatacao.html">NATAÇÃO</a></li>
                                <li><a href="../views/modcross.html">CROSSFIT</a></li>
                                <li><a href="../views/modpilates.html">PILATES</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="perfil.php"><span class="glyphicon glyphicon-user"></span> PERFIL</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> SAIR</a></li>


                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!--BANNER-->
    <div id="banner">
        <div id="video">
            <video id="background" src="../video/bannerSocio.mp4" autoplay="true" muted="true" loop="true"></video>
        </div>
        <div id="conteudo">
            <h1 data-aos="fade-up" data-aos-duration="1500" id="content">Olá, <?php echo ($_SESSION['usuario']);?> !</h1>

            <h4 data-aos="fade-up" data-aos-duration="1500" style="margin-top: 20px;">Seja bem vindo à PowerFit! Onde
                sua saúde é a nossa alegria!</h4>

            <h4 data-aos="fade-up" data-aos-duration="1500" style="margin-top: 20px;">Faça desse espaço, o seu!</h4>
        </div>
    </div>
    <!--FIM BANNER-->

    <!----------DIV ASSEGUIR GUARDA AS MODALIDADES DE TREINOS--------->
    <div class="container" style="margin-top: 500px;" id="modalidades">
        <div class="row">

            <h3 data-aos="fade-up" data-aos-duration="1000" id="textTitulos" class="text-center">CONFIRA AS MODALIDADES
                DISPONÍVEIS:</h3>
            <div id="textParagrafosModalidades">
                <div class="flex">
                    <div data-aos="fade-up" data-aos-duration="500" class="col-sm-3" id="img">
                        <h3 id="subTitulo" class="text-center">Musculação</h3>
                        <img class="img-responsive img-rounded" src="https://i.ibb.co/FKSsmyn/Design-sem-nome-14.png" />
                        <p class="text-center"><a href="../views/modmusculacao.html" id="btsaiba" class="btn btn-info btn-lg" role="button">Confira
                                &raquo;</a></p>

                    </div>
                    <div data-aos="fade-up" data-aos-duration="500" class="col-sm-3" id="img">
                        <h3 id="subTitulo" class="text-center">Natação</h3>
                        <img class="img-responsive img-rounded" src="https://i.ibb.co/sCMKyY0/Design-sem-nome-13.png" />
                        <p  class="text-center"><a href="../views/modnatacao.html" id="btsaiba" class="btn btn-info btn-lg" role="button">Confira
                                &raquo;</a></p>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="500" class="col-sm-3" id="img">
                        <h3 id="subTitulo" class="text-center">CrossFit</h3>
                        <img class="img-responsive img-rounded" src="https://i.ibb.co/8syZ6Mr/Design-sem-nome-15.png" />
                        <p class="text-center"><a href="../views/modcross.html" id="btsaiba" class="btn btn-info btn-lg" role="button">Confira
                                &raquo;</a></p>


                    </div>
                    <div data-aos="fade-up" data-aos-duration="500" class="col-sm-3" id="img">
                        <h3 id="subTitulo" class="text-center">Pilates</h3>
                        <img class="img-responsive img-rounded" src="https://i.ibb.co/whyxPXJ/Design-sem-nome-16.png" />
                        <p class="text-center"><a href="../views/modpilates.html" id="btsaiba" class="btn btn-info btn-lg" role="button">Confira
                                &raquo;</a></p>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------FIM DAS MODALIDADES DE TREINOS--------->



    <!--DIV ASSSEGUIR GUARDA A AREA DE DICAS-->
    <div class="container" id="containerDicas">
        <div class="row">
            <div class="col-sm-6" id="area-dicas">
                <h2 data-aos="fade-up" data-aos-duration="1000" class="text-center" id="textTitulos2">ÁREA DE DICAS</h2>

                <h4 data-aos="fade-up" data-aos-duration="500" class="text-center" id="textTitulos3">Algumas dicas poderosíssimas para
                    elevar seu desempenho!</h4>
                <div class="row" id="imgDicas">
                    <div data-aos="fade-up" data-aos-duration="500" class="col-sm-6">
                        <a href="../views/resumoMusculacao.html"><img id="imagemDicas" class="img-responsive"
                                src="https://i.ibb.co/xfNbB8K/SA-DE-2.png"></a>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="500" class="col-sm-6">
                        <a href="..//views/resumoNutricao.html"><img id="imagemDicas" class="img-responsive"
                                src="https://i.ibb.co/7WY38Zd/SA-DE-1.png"></a>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="500" class="col-sm-6">
                        <a href="..//views/resumoSaude.html"><img id="imagemDicas" class="img-responsive"
                                src="https://i.ibb.co/7rjQwz2/SA-DE.png"></a>

                    </div>
                </div>
            </div>
            <div data-aos="fade" data-aos-duration="1500" id="acss-dashboard" class="col-sm-6">
                <img style="width:80%" src="https://i.ibb.co/vBcj0KQ/Powerfit-1.png">
                <h4 id="contato">Entre em contato: (24) 999203432</h4>
            </div>
        </div>
    </div>

    <!--imagens devem ter largura maior que 1200px -->
    <!-----------------------CARROUSEL--------------------------------->
    <div id="pagina" class="container">
        <div class="row" id="carousel">

            <h2 data-aos="fade" data-aos-duration="500" id="textTitulos2" class="text-center tituloCarousel"
                style="margin-bottom: 20px;">SEUS PROFESSORES:</h2>

            <div data-aos="fade-up" data-aos-duration="1000" class="col-sm-12">
                <div id="meuCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                    <ol class="carousel-indicators">
                        <li data-target="#meuCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#meuCarousel" data-slide-to="1"></li>
                        <li data-target="#meuCarousel" data-slide-to="2"></li>
                        <li data-target="#meuCarousel" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img id="imagem" class="img-responsive" src="https://i.ibb.co/Zz5kcfv/junior-silva.png" />
                        </div>
                        <div class="item">
                            <img id="imagem" src="https://i.ibb.co/J5C04qP/junior-silva-1.png" />
                        </div>
                        <div class="item">
                            <img id="imagem" src="https://i.ibb.co/34wg3N8/junior-silva-2.png" />
                        </div>
                        <div class="item">
                            <img id="imagem" src="https://i.ibb.co/VtkVr6F/junior-silva-3.png" />
                        </div>
                    </div>
                    <a class="left carousel-control" href="#meuCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#meuCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
            <div class="hidden-xs hidden-sm textoCarousel">
                <div class="col-sm-12 text-center">

                </div>
            </div>
        </div>
    </div>
</body>

<footer>
    <!--SOBRE AGT-->
    <div id="principal">
        <div id="subPrincipal" class="container">
            <h2 id="h2Foot">Sobre o PowerFit:</h2>
            <p id="textFooter">O PowerFit - SGT é um sistema que te permite controlar seu dia a dia na academia, sua saúde, bem estar e muito mais!</p>
        </div>
        <br>
        <div class="container"></div>
        <div id="subPrincipal" class="container">
            <h2 id="h2Foot">Funcionalidades:</h2>
            <li id="liFoot">Análise e cáculo de IMC;</li>
            <li id="liFoot">Gráficos de desempenho;</li>
            <li id="liFoot">Controle de alimentação e treinos;</li>
            <li id="liFoot">Gerenciamento de altura e peso.</li>
        </div>
    </div>
    <!--FIM SOBRE-->
    <nav style="position: absolute; width: 100%;" class="navbar navbar-default navbar-static-top sem-margem">
        <p style="margin-left: 20px;" class="navbar-text">&copy; 2021 Copyright - PowerFit</p>
    </nav>
</footer>

<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../plugins/jquery/jquery-validation-1.19.3/dist/jquery.validate.min.js"></script>
<script src="../plugins/jquery/jquery-validation-1.19.3/dist/additional-methods.min.js"></script>
<script src="../plugins/jquery/jquery-validation-1.19.3/dist/localization/messages_pt_BR.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="../plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>

<script>
    AOS.init();
</script>

<script>

    // deixar navbar transparente no topo da pagina

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
        background-color: rgba(255, 255, 255, 0);
    }
    .navbar-top1 {
        transition: 0.5s;
    }
</style>

</html>