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
                <a href="perfil.html"> <i class="fas fa-user"></i></a>
                <a href="PagSocio.html"> <i class="fas fa-sign-out-alt"></i></a>
            </header>
            <div class="main-content">
                <form action="gerenciarIMC.html" name="formImc" method="post">
                    <div class="imc-parent">
                        <div class="calculaImc">
                            <label for="peso" class="form-label">Peso</label>
                            <input type="text" name="peso" class="form-control" id="peso" placeholder="80">
                            <label for="altura" class="form-label">Altura</label>
                            <input type="text" name="altura" class="form-control" id="altura" placeholder="1.81">
                            <input type="button" onclick="imc();" value="Calcular" id="calcular">
                        </div>
                        <div class="imc" id="resultado">
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

    <script type="text/javascript">
        //Entre 17 e 18,49    Abaixo do peso
        //Entre 18,5 e 24,99  Peso normal
        //Entre 25 e 29,99    Acima do peso
        //Entre 30 e 34,99    Obesidade I
        //Entre 35 e 39,99    Obesidade II
        //Acima de 40         Obesidade III

        const calcular = document.getElementById("calcular");

        function imc() {
            const peso = document.getElementById("peso").value;
            const altura = document.getElementById("altura").value;
            const resultado = document.getElementById("resultado");

            if (peso !== '' && altura != '') {
                const valorImc = (peso / (altura * altura)).toFixed(2);

                let situacao = "";
                if (valorImc < 18.5) {
                    situacao = 'abaixo do peso.'
                } else if (valorImc < 25) {
                    situacao = 'no peso ideal. Parabéns'
                } else if (valorImc < 30) {
                    situacao = 'um pouco acima do peso.'
                } else if (valorImc < 35) {
                    situacao = 'com obesidade grau I.'
                } else if (valorImc < 40) {
                    situacao = 'com obesidade grau II.'
                } else {
                    situacao = 'com obesidade mórbida: grau III. Procure um profissional da área de saúde o quanto antes!'
                }

                resultado.textContent = `Seu IMC é: ${valorImc} e você está ${situacao}`;
            } else {
                alert('preenche essa porra ai maluco')
            }
        }

        calcular.addEventListener('click', imc);
    </script>
</body>

</html>