<?php
include('conexao.php');
include('verifica_login.php');

if(empty($_POST['peso']) || empty($_POST['altura'])){
    $_SESSION['campo_vazio'] = true;
    header('location: gerenciar_peso.php');
    exit();
}

$peso = ($_POST['peso']);
$altura = ($_POST['altura']);
$data_peso = date('Y-m-d',time());

$sql = "INSERT INTO peso_usuario (usuario, peso, altura, data_peso) VALUES ('$_SESSION[usuario]', '$peso', '$altura', '$data_peso');";
if($conexao->query($sql) === true){
    $_SESSION['status_cadastro'] = true;
    $_SESSION['registro_dashboard'] = true;
    $_SESSION['data_peso'] = $data_peso;
    $_SESSION['peso'] = $peso.' kg';
    $_SESSION['altura'] = $altura;
    header('location: gerenciar_peso.php');
    exit();
};
$conexao->close();
?>