<?php
include('conexao.php');
include('verifica_login.php');

$id = ($_POST['id']);
$nome = ($_POST['nome']);
$tempo = ($_POST['tempo']);
$data = ($_POST['data']);
$data = date('Y-m-d', strtotime(str_replace('/','-',$data)));

$sql = "UPDATE atividade_usuario  set atividade = '$nome', duracao_atividade = '$tempo', data_atividade = '$data' where idAtividade = $id";

if($conexao->query($sql) === true){
    $_SESSION['status_alteracao'] = true;
    $data = date('d/m/Y', strtotime(str_replace('-','/',$data)));
    $_SESSION['data_atividade'] = $data;
    $_SESSION['atividade'] = $nome;
    header('location: gerenciar_atividade_fisica.php');
    exit();
} else {
    header('location: painel_usuario.php');
};
$conexao->close();
?>