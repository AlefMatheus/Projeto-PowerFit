<?php
include('conexao.php');
include('verifica_login.php');

$id = ($_POST['id']);

$sql = "delete from pressao_usuario where idPressao = $id";

if($conexao->query($sql) === true){
    $_SESSION['status_exclusao'] = true;
    header('location: gerenciar_pressao_arterial.php');
    exit();
} else {
   
};
$conexao->close();
?>