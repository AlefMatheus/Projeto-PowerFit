<?php
include('conexao.php');
include('verifica_login.php');

$id = ($_POST['id']);
$sql = "delete from peso_usuario where idPeso = $id";

if($conexao->query($sql) === true){
    $_SESSION['status_exclusao'] = true;
    header('location: gerenciar_peso.php');
    exit();
} else {
    header('location: painel_usuario.php');
};
$conexao->close();
?>