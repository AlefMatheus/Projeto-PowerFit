<?php
include('conexao.php');
include('verifica_login.php');

$id = ($_POST['id']);
$sql = "delete from atividade_usuario where idAtividade = $id";

if($conexao->query($sql) === true){
    $_SESSION['status_exclusao'] = true;
    header('location: gerenciar_atividade_fisica.php');
    exit();
} else {
    header('location: painel_usuario.php');
};
$conexao->close();
?>