<?php
include('conexao.php');
session_start();

$id = ($_POST['id']);
$sql = "delete from alimento_usuario where idAlimentos = $id";

if($conexao->query($sql) === true){
    $_SESSION['status_exclusao'] = true;
    header('location: gerenciar_alimentos.php');
    exit();
} else {
    header('location: painel_usuario.php');
};
$conexao->close();
?>