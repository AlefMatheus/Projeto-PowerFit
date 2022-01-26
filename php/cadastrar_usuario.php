<?php
session_start();
include("conexao.php");

//nao permite campos vazios vindo dos inputs de formulario
if(empty($_POST['email']) || empty($_POST['nome']) || empty($_POST['usuario']) 
|| empty($_POST['senha']) || empty($_POST['idade']) || empty($_POST['confirmarSenha'])){
    $_SESSION['campo_vazio'] = true;
    header('location: index_cadastro.php');
    exit();
}

//atribuindo às variaveis os valores passados pelo formulario de cadastro atraves do methodo POST
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$sexo = mysqli_real_escape_string($conexao, trim($_POST['sexo']));
$idade = mysqli_real_escape_string($conexao, trim($_POST['idade']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));


//compara as senhas 
if(($_POST['senha']) !== ($_POST['confirmarSenha'])){
    $_SESSION['senhas-nao-coincidem'] = true;
    header('location: index_cadastro.php');
    exit();
}
//nao permite senhas menores que 8 caracteres
$tamanho = strlen(($_POST['senha']));

if($tamanho<8){
    $_SESSION['minimo-senha'] = true;
    header('location: index_cadastro.php');
    exit();
}

//validando os dados vindos do usuario e inserindo ele no banco de dados
$sql = "select count(*) as total from cliente where usuario = '$usuario' or email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('Location: index_cadastro.php');
    exit;
}

$status_atividade = is_string('ATIVO');

$idade = date('Y-m-d', strtotime(str_replace('/','-',$idade)));


$sql = "INSERT INTO cliente (nome, sexo, nascimento, usuario, email, senha, status_atividade, data_cadastro) VALUES ('$nome', '$sexo', '$idade', '$usuario','$email','$senha',$status_atividade, NOW())";
$sqlimc = "INSERT INTO imc_usuario (usuario) VALUES ('$usuario')";

if($conexao->query($sql) === TRUE and $conexao->query($sqlimc) === TRUE ) {
	$_SESSION['status_cadastro'] = true;
}
$conexao->close();

header('Location: index_cadastro.php');
exit;


?>