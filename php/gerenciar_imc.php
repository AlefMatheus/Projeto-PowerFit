<?php
include('conexao.php');
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/fontawesome/css/all.min.css">
    <title>Health Track</title>
</head>

<body>
    <div class="flex-dashboard">
        <sidebar>
            <div class="sidebar-title">
                <h2>PowerFit</h2>
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <i class="fas fa-home"></i>
                        <a href="dashboard.php">Dashboard</a>
                    </li>
                    <li>
                        <i class="fas fa-weight"></i>
                        <a href="gerenciar_peso.php"> Gerenciar Peso e Altura</a>
                    </li>
                    <li>
                        <i class="fas fa-heartbeat"></i>
                        <a href="gerenciar_pressao_arterial.php"> Gerenciar Pressão Arterial</a>
                    </li>
                    <li>
                        <i class="fas fa-skating"></i>
                        <a href="gerenciar_atividade_fisica.php"> Gerenciar Atividades Físicas</a>
                    </li>
                    <li>
                        <i class="fas fa-utensils"></i>
                        <a href="gerenciar_alimentos.php"> Gerenciar Alimentos</a>
                    </li>
                    <li class="selected">
                        <i class="fas fa-calculator"></i>
                        <a href="gerenciar_imc.php"> Calcular IMC</a>
                    </li>
                </ul>
            </div>
        </sidebar>
        <main>
            <header>
                <a href="perfil.php"> <i class="fas fa-user"></i> PERFIL</a>
                <a href="painel_usuario.php"> <i class="fas fa-sign-out-alt"></i> SAIR</a>
            </header>
            <div class="main-content">
                <div class="imc-parent">
                    <div class="imc">
                        <h2>Seu imc é <span>19,5</span> - <span>NORMAL</span></h2>
                    </div>
                </div>
            </div>
            <div class="content" id="ajax-content">

            </div>
    </div>

    </main>
    </div>
    <script src="../plugins/jquery/jquery.min.js"></script>
    <script src="../plugins/jquery/jquery-validation-1.19.3/dist/jquery.validate.min.js"></script>
    <script src="../plugins/jquery/jquery-validation-1.19.3/dist/additional-methods.min.js"></script>
    <script src="../plugins/jquery/jquery-validation-1.19.3/dist/localization/messages_pt_BR.min.js"></script>
    <script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../plugins/fontawesome/js/all.min.js"></script>
    <script src="../plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>
    <script src="../plugins/jquery/sweetalert/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../js/ajax.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"
        integrity="sha512-TW5s0IT/IppJtu76UbysrBH9Hy/5X41OTAbQuffZFU6lQ1rdcLHzpU5BzVvr/YFykoiMYZVWlr/PX1mDcfM9Qg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>