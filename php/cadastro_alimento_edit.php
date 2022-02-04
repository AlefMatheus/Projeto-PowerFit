<?php
include('conexao.php');
include('verifica_login.php');

$id = $_GET['id'] ?? ''; 
$sql = "select * from alimento_usuario where idAlimentos = $id";

$dados = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_assoc($dados);

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
    <link rel="stylesheet" href="../plugins/jquery/sweetalert/dist/sweetalert2.min.css">
    <title>Edit Alimentos</title>
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
                    <h2>Editar Alimentos</h2>
                </div>
                <div class="content" id="ajax-content">

                    <div class="dynamic-content">
                        <form id="form-food" action="cadastro_alimento_edit_script.php" method="POST">
                            <div class="mb-3">
                                <label for="food" class="form-label">Nome do Alimento</label>
                                <input type="text" name="nome" class="form-control" id="name-food"
                                    placeholder="Altere o nome do alimento">
                            </div>
                            <div class="mb-3">
                                <label for="quantity" class="form-label">Quantidade</label>
                                <input type="text" name="quantidade" class="form-control" id="quantity-food"
                                    placeholder="Altere a quantidade ">
                            </div>
                            <button type="submit" class="btn">Salvar Alteracoes</button>
                            <input type="hidden" name="id" value="<?php echo $linha['idAlimentos']?>">
                        </form>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../js/ajax.js"></script>
    <script src="../js/alimentos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"
        integrity="sha512-TW5s0IT/IppJtu76UbysrBH9Hy/5X41OTAbQuffZFU6lQ1rdcLHzpU5BzVvr/YFykoiMYZVWlr/PX1mDcfM9Qg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>

</html>