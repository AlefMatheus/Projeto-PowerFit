<?php
include('conexao.php');
include('verifica_login.php');

if(empty($_POST['nome']) || empty($_POST['quantidade'])){
    $_SESSION['campo_vazio'] = true;
    header('location: gerenciar_alimentos.php');
    exit();
}

$alimento = ($_POST['nome']);
$quantidade = ($_POST['quantidade']);
$data_alimento = date('Y-m-d',time());

$sql = "INSERT INTO alimento_usuario (usuario, alimento, quantidade_alimento, data_alimento) VALUES ('$_SESSION[usuario]', '$alimento', '$quantidade', '$data_alimento');";
if($conexao->query($sql) === true){
    $_SESSION['status_cadastro'] = true;
    $_SESSION['registro_dashboard'] = true;
    $_SESSION['data_alimento'] = $data_alimento;
    $_SESSION['alimento'] = $alimento;
    $_SESSION['quantidade_alimento'] = $quantidade;
    header('location: gerenciar_alimentos.php');
    exit();
};
$conexao->close();
?>