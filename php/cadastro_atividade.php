<?php
include('conexao.php');
session_start();

if(empty($_POST['nome']) || empty($_POST['tempo']) || empty($_POST['data'])){
    $_SESSION['campo_vazio'] = true;
    header('location: gerenciar_atividade_fisica.php');
    exit();
}

$atividade = ($_POST['nome']);
$duracao = ($_POST['tempo']);
$data_atividade = ($_POST['data']);
$data_atividade = date('Y-m-d', strtotime(str_replace('/','-',$data_atividade)));

$sql = "INSERT INTO atividade_usuario (usuario, atividade, duracao_atividade, data_atividade) VALUES ('$_SESSION[usuario]', '$atividade', '$duracao', '$data_atividade');";
if($conexao->query($sql) === true){
    $_SESSION['status_cadastro'] = true;
    $_SESSION['registro_dashboard'] = true;
    $_SESSION['data_atividade'] = $data_atividade;
    $_SESSION['atividade'] = $atividade;
    $_SESSION['duracao_atividade'] = $duracao;
    header('location: gerenciar_atividade_fisica.php');
    exit();
};
$conexao->close();
?>