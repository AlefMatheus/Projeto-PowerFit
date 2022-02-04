<?php
include('verifica_login.php');
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
    <title>Dashboard</title>
</head>

<body>
    <div class="flex-dashboard">
        <sidebar>
            <div class="sidebar-title">
                <h2>PowerFit</h2>
            </div>
            <div class="menu">
                <ul>
                    <li class="selected">
                        <a id="dashPanel" href="dashboard.php"> <i class="fas fa-home"></i></a>
                    </li>
                    <li>
                        <a href="gerenciar_peso.php"><i class="fas fa-weight"></i></a>
                    </li>
                    <li>
                        <a href="gerenciar_pressao_arterial.php"> <i class="fas fa-heartbeat"></i></a>
                    </li>
                    <li>
                        <a href="gerenciar_atividade_fisica.php"><i class="fas fa-skating"></i></a>
                    </li>
                    <li>
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
                <a href="../php/perfil.php"> <i class="fas fa-user"></i> PERFIL</a>
                <a href="../php/painel_usuario.php"> <i class="fas fa-sign-out-alt"></i> VOLTAR</a>
            </header>
            <div class="main-content">
                <div class="main-content-title">
                    <h2 id="content-title-h2">DASHBOARD</h2>
                </div>
                <div class="dashboard-content">
                    <div class="dashboard-flex-parent">
                        <div class="dashboard-box">
                            <div class="dashboard-box-wrapper">
                                <div class="box-icon box-weight">
                                    <i class="fas fa-weight"></i>
                                </div>
                                <div class="value">
                                    <?php echo($_SESSION['peso']);?>
                                </div>
                                <div class="type">PESO</div>
                                <div class="box-value-percentual box-value-weight">
                                    <i class="fas fa-chevron-up"></i>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-box">
                            <div class="dashboard-box-wrapper">
                                <div class="box-icon box-pressure ">
                                    <i class="fas fa-heartbeat"></i>
                                </div>
                                <div class="value">
                                    <?php echo($_SESSION['pressao']);?>
                                </div>
                                <div class="type">PRESSÃO ARTERIAL</div>
                                <div class="box-value-percentual box-value-pressure">
                                    <i class="fas fa-chevron-up"></i>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-box">
                            <div class="dashboard-box-wrapper">
                                <div class="box-icon box-imc">
                                    <i class="fas fa-calculator"></i>
                                </div>
                                <div class="value">
                                    <?php echo($_SESSION['valorImc']);?>
                                </div>
                                <div class="type">IMC</div>
                                <div class="box-value-percentual box-value-imc">
                                    <span>
                                        <?php echo($_SESSION['estadoIMC']);?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-box">
                            <div class="dashboard-box-wrapper">
                                <div class="box-icon box-workout">
                                    <i class="fas fa-biking"></i>
                                </div>
                                <div class="value">
                                    <?php echo($_SESSION['atividade']);?>
                                </div>
                                <div class="type">ATIVIDADE FISICA</div>
                                <div class="box-value-percentual box-value-workout">
                                    <i class="far fa-calendar-alt"></i>
                                    <span>
                                        <?php echo($_SESSION['data_atividade']);?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script src="../js/ajax.js"></script>
    <script src="../js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"
        integrity="sha512-TW5s0IT/IppJtu76UbysrBH9Hy/5X41OTAbQuffZFU6lQ1rdcLHzpU5BzVvr/YFykoiMYZVWlr/PX1mDcfM9Qg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>