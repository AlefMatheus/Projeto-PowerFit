<?php
include('conexao.php');
session_start();

$id = ($_POST['id']);
$pressao = ($_POST['pressao']);
$data_pressao = date('Y-m-d',time());

$sql = "UPDATE pressao_usuario  set pressao = '$pressao', data_pressao = '$data_pressao' where idPressao = $id";

if($conexao->query($sql) === true){
    $_SESSION['status_alteracao'] = true;
    header('location: gerenciar_pressao_arterial.php');
    exit();
} else {
    header('location: painel_usuario.php');
};
$conexao->close();
?>