<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('location: index_login.php');
    exit();
}
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select * from cliente where email = '{$email}' and senha = md5('{$senha}')";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);   
$dados = mysqli_fetch_array($result);

    $dados['nascimento'] = date('d/m/Y', strtotime(str_replace('-','/',$dados['nascimento'])));
$dados['data_cadastro'] = date('d/m/Y', strtotime(str_replace('-','/',$dados['data_cadastro'])));
 
if ($row == 1){
    //captura os dados do usuario na tabela clientes
    $_SESSION['nome'] = $dados['nome'];
    $_SESSION['usuario'] = $dados['usuario'];
    $_SESSION['idade'] = $dados['nascimento'];
    $_SESSION['sexo'] = $dados['sexo'];
    $_SESSION['email'] = $dados['email'];
    $_SESSION['status'] = $dados['status_atividade'];
    $_SESSION['data_cadastro'] = $dados['data_cadastro'];
    $_SESSION['foto-de-perfil'] = $dados['foto'];
    include('dados_dashboard.php');
} else {
    $_SESSION['nao_autenticado'] = true;
    header('location: index_login.php');
    exit();
}

?>