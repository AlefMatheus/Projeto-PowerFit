<?php
include('conexao.php');
include('verifica_login.php');

$id = ($_POST['id']);
$nome = ($_POST['nome']);
$quantidade = ($_POST['quantidade']);
$data_alimento = date('Y-m-d',time());

$sql = "UPDATE alimento_usuario  set alimento = '$nome', quantidade_alimento = '$quantidade', data_alimento = '$data_alimento' where idAlimentos = $id";

if($conexao->query($sql) === true){
    $_SESSION['status_alteracao'] = true;
    header('location: gerenciar_alimentos.php');
    exit();
} else {
    header('location: painel_usuario.php');
};
$conexao->close();
?>