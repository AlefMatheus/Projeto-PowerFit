<?php
include('conexao.php');
include('verifica_login.php');

$id = ($_POST['id']);
$peso = ($_POST['peso']);
$altura = ($_POST['altura']);
$data_peso = date('Y-m-d',time());

$sql = "UPDATE peso_usuario  set peso = '$peso', altura = '$altura', data_peso = '$data_peso' where idPeso = $id";

if($conexao->query($sql) === true){
    $_SESSION['status_alteracao'] = true;
    $_SESSION['data_peso'] = $data_peso;
    $_SESSION['peso'] = $peso.' kg';
    $_SESSION['altura'] = $altura;
    header('location: gerenciar_peso.php');
    exit();
} else {
    header('location: painel_usuario.php');
};
$conexao->close();
?>