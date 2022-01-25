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
                    <li >
                        <a id="dashPanel" href="dashboard.php"> <i class="fas fa-home"></i></a>
                    </li>
                    <li>
                        <a href="gerenciar_peso.php"><i class="fas fa-weight"></i></a>
                    </li>
                    <li>
                        <a href="gerenciar_pressao_arterial.php">  <i class="fas fa-heartbeat"></i></a>
                    </li>
                    <li>
                        <a href="gerenciar_atividade_fisica.php"><i class="fas fa-heartbeat"></i></a>
                    </li>
                    <li class="selected">
                        <a href="gerenciar_alimentos.php"><i class="fas fa-utensils"></i></a>
                    </li>
                    <li>
                        <a href="gerenciar_imc.php"><i class="fas fa-calculator"></i></a>
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
                <div class="main-content-title">
                    <h2>Gerenciar Alimentos</h2>
                </div>
                <div class="panel-row">
                    <button class="panel panel-50" a-script="alimentos" a-view="cadastrarAlimentos" onclick="fetchContent(this)"
                        a-folder="alimentos"> <i class="fas fa-plus"></i> Cadastrar Alimentos</button>
                    <button class="panel panel-50" a-script="alimentos" a-view="visualizarAlimentos" onclick="fetchContent(this)"
                        a-folder="alimentos"> <i class="fas fa-table"></i> Visualizar Alimentos</button>
                </div>
                <?php
                    if (isset($_SESSION['status_cadastro'])):
                    ?>
                    <div class="alert alert-success" role="alert">
                        Seu registro foi realizado com sucesso!
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['status_cadastro']);
                    ?>
                    <?php
                    if (isset($_SESSION['campo_vazio'])):
                    ?>
                    <div class="alert alert-danger" role="alert">
                        Preencha todos os campos por favor.
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['campo_vazio']);
                    ?>
                    <?php
                    if (isset($_SESSION['status_alteracao'])):
                    ?>
                    <div class="alert alert-success" role="alert">
                        Sua ateraçao foi realizada com sucesso!
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['status_alteracao']);
                    ?>
                    <?php
                    if (isset($_SESSION['status_exclusao'])):
                    ?>
                    <div class="alert alert-success" role="alert">
                        Exclusao de registro realizado com sucesso!
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['status_exclusao']);
                    ?>
                <div class="content" id="ajax-content">

                </div>
            </div>

        </main>
    </div>

    <script type="text/javascript">
        function pegarDados(id, alimento){
            document.getElementById('alimento').innerHTML = alimento;
            document.getElementById('idAlimentos').value = id;
        } 
    </script>

    <script src="../plugins/jquery/jquery.min.js"></script>
    <script src="../plugins/jquery/jquery-validation-1.19.3/dist/jquery.validate.min.js"></script>
    <script src="../plugins/jquery/jquery-validation-1.19.3/dist/additional-methods.min.js"></script>
    <script src="../plugins/jquery/jquery-validation-1.19.3/dist/localization/messages_pt_BR.min.js"></script>
    <script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>
    <script src="../plugins/fontawesome/js/all.min.js"></script>
    <script src="../plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>
    <script src="../plugins/jquery/sweetalert/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../js/ajax.js"></script>
    <script src="../js/alimentos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"
        integrity="sha512-TW5s0IT/IppJtu76UbysrBH9Hy/5X41OTAbQuffZFU6lQ1rdcLHzpU5BzVvr/YFykoiMYZVWlr/PX1mDcfM9Qg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>