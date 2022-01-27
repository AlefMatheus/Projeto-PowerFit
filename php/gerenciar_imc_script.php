<?php
include('verifica_login.php');
include ('conexao.php');

$peso = $_POST['peso'];
$altura = $_POST['altura'];

if(empty($_POST['peso']) || empty($_POST['altura'])) 
{
    $_SESSION['campo_vazio'] = true;
    header('location: gerenciar_imc.php');
    exit();
}

function imc($altura, $peso){
    $altura = str_replace(',', '.', $altura);
    $valorImc = $peso/pow($altura, 2);
    return $valorImc;
}
$valorImc = imc($altura, $peso);
$_SESSION['valorImc'] = number_format((float)$valorImc, 2, '.','');
if ($valorImc < 18.5) {
    $_SESSION['situacao'] = 'Abaixo do peso';
    $_SESSION['estadoIMC'] = 'Abaixo do peso';
} else if ($valorImc < 25) {
    $_SESSION['situacao'] = 'No peso ideal. Parabéns!';
    $_SESSION['estadoIMC'] = 'Peso ideal';
} else if ($valorImc < 30) {
    $_SESSION['situacao'] = 'Um pouco acima do peso.';
    $_SESSION['estadoIMC'] = 'Acima do peso';
} else if ($valorImc < 35) {
    $_SESSION['situacao'] = 'Com obesidade grau I.';
    $_SESSION['estadoIMC'] = 'Obesidade I';
} else if ($valorImc < 40) {
    $_SESSION['situacao'] = 'Com obesidade grau II.';
    $_SESSION['estadoIMC'] = 'Obesidade II';
} else {
    $_SESSION['situacao'] = 'Com obesidade mórbida: grau III. Procure um profissional da área de saúde o quanto antes!';
    $_SESSION['estadoIMC'] = 'Obesidade III';
}
$sql = "UPDATE imc_usuario set valor = '$_SESSION[valorImc]', estado_imc = '$_SESSION[estadoIMC]', situacao = '$_SESSION[situacao]',  data_imc = NOW()";
if($conexao->query($sql) === true){
    header('location: gerenciar_imc.php');
exit();
};

?>