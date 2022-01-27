<?php
include('conexao.php');
include('verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../plugins/fontawesome/css/all.min.css">
    <title>Gerenciar IMC</title>
</head>
<style>
    @media screen and (max-width: 768px) {
        .calculaImc{
            display: flex;
            flex-direction: column;
            width: 100%;
        }
        button{
            margin-top: 20px;
            margin-left: 20px;
        }
        #resultado{
            padding: 10px;
            margin-top: -50px;
            margin-left: 20px;
        }
        h2{
            font-size: 1.3rem;
        }
        h4{
            font-size: 1.2rem;
        }
    }
</style>
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
                        <a href="gerenciar_atividade_fisica.php"><i class="fas fa-skating"></i></a>
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
                <a href="../php/perfil.php"> <i class="fas fa-user"></i> PERFIL</a>
                <a href="../php/painel_usuario.php"> <i class="fas fa-sign-out-alt"></i> VOLTAR</a>
            </header>
            <div class="main-content">
            <div class="main-content-title">
                        <h2 id="content-title-h2">GERENCIAR IMC</h2>
                    </div>
                <form action="gerenciar_imc_script.php" name="formImc" method="POST">
                    <div class="imc-parent">
                        <div class="calculaImc">
                            <label for="peso" class="form-label">Peso</label>
                            <input type="text" name="peso" class="form-control" id="peso" placeholder="80">
                            <label for="altura" class="form-label">Altura</label>
                            <input type="text" name="altura" class="form-control" id="altura" placeholder="1.81">
                            <button id="btn-calcular" type="submit" class="btn">Calcular</button>
                        </div>
                        <?php
                            if (isset($_SESSION['campo_vazio'])):
                            ?>
                            <div class="alert" role="alert">
                                <h5>preencha todos os campos por favor.</h5>
                            </div>
                            <?php
                            endif;
                            unset($_SESSION['campo_vazio']);
                        ?>
                        <div class="imc" id="resultado">
                            <?php
                            if(isset($_SESSION['valorImc']) and (isset($_SESSION['situacao']))):
                            ?>
                            <h2>Seu imc é: <b id="value-imc"><?php echo($_SESSION['valorImc'])?></b></h2>
                            <h4><?php echo $_SESSION['situacao'];?></h4> 
                            <?php
                            endif;
                            //unset($_SESSION['valorImc']);
                            //unset($_SESSION['situacao']);
                            ?>
                        </div>
                    </div>
                </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js" integrity="sha512-TW5s0IT/IppJtu76UbysrBH9Hy/5X41OTAbQuffZFU6lQ1rdcLHzpU5BzVvr/YFykoiMYZVWlr/PX1mDcfM9Qg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        $(function () {
        $('#peso').mask("000.00", {reverse: true})
        $('#altura').mask("0.00", {reverse: true})
        });
    </script>
</body>

</html>