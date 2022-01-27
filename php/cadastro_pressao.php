<?php
include('conexao.php');
include('verifica_login.php');

if(empty($_POST['pressao'])){
    $_SESSION['campo_vazio'] = true;
    header('location: gerenciar_pressao_arterial.php');
    exit();
}

$pressao = ($_POST['pressao']);
$data_pressao = date('Y-m-d',time());

$sql = "INSERT INTO pressao_usuario (usuario, pressao, data_pressao) VALUES ('$_SESSION[usuario]', '$pressao', '$data_pressao');";
if($conexao->query($sql) === true){
    $_SESSION['status_cadastro'] = true;
    $_SESSION['registro_dashboard'] = true;
    $_SESSION['data_pressao'] = $data_pressao;
    $_SESSION['pressao'] = $pressao.' MMHC';
    header('location: gerenciar_pressao_arterial.php');
    exit();
};
$conexao->close();
?>