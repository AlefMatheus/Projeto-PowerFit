<?php
include('verifica_login.php');
if (isset($_SESSION['usuario'])){

    //captura os dados do usuario na tabela peso
    $query = "select idPeso, peso, altura, data_peso from peso_usuario where usuario = '$_SESSION[usuario]' ORDER BY idPeso desc limit 1;";
    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);   
    $dados = mysqli_fetch_array($result);
    
    if (isset($dados['data_peso'])){ 
        $dados['data_peso'] =  date('d/m/Y', strtotime(str_replace('-','/',$dados['data_peso'])));
    }

    if ($row >= 1){
        $_SESSION['peso'] = $dados['peso']." kg"; 
        $_SESSION['altura'] = $dados['altura'];
        $_SESSION['data_peso'] = $dados['data_peso']; 

    } else {
        $_SESSION['peso'] = ('');
        $_SESSION['altura'] = ('');
        $_SESSION['data_peso'] = ('');
    }

    //captura os dados do usuario na tabela pressao
    $query = "select pressao, data_pressao from pressao_usuario where usuario = '$_SESSION[usuario]';";
    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);   
    $dados = mysqli_fetch_array($result);
    
    if(isset($dados['data_pressao'])){
        $dados['data_pressao'] = date('d/m/Y', strtotime(str_replace('-','/',$dados['data_pressao'])));
    }
    
    if ($row >= 1){
        $_SESSION['pressao'] = $dados['pressao']." MMHC";
        $_SESSION['data_pressao'] = $dados['data_pressao'];

    } else {
        $_SESSION['pressao'] = ('');
        $_SESSION['data_pressao'] = ('');
    }

    //captura os dados do imc 
    $query = "select * from imc_usuario where usuario = '$_SESSION[usuario]';";
    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);   
    $dados = mysqli_fetch_array($result);

    if ($row >= 1){
        $_SESSION['valorImc'] = $dados['valor'];
        $_SESSION['estadoIMC'] = $dados['estado_imc'];
        $_SESSION['situacao'] =  $dados['situacao'];

    } else {
        $_SESSION['valorImc'] = ('');
        $_SESSION['estadoIMC'] = ('');
        $_SESSION['situacao'] = ('');
    }

    //captura os dados do usuario na tabela atividade
    $query = "select atividade, duracao_atividade, data_atividade from atividade_usuario where usuario = '$_SESSION[usuario]';";
    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);   
    $dados = mysqli_fetch_array($result);
    
    if(isset($dados['data_atividade'])){
        $dados['data_atividade'] = date('d/m/Y', strtotime(str_replace('-','/',$dados['data_atividade'])));
    }

    if ($row >= 1){
        $_SESSION['atividade'] = $dados['atividade'];
        $_SESSION['data_atividade'] = $dados['data_atividade'];
        $_SESSION['duracao_atividade'] = $dados['duracao_atividade'];

    }else {
        $_SESSION['atividade'] = ('');
        $_SESSION['data_atividade'] = ('');
        $_SESSION['duracao_atividade'] = ('');
    }
    //captura os dados do usuario na tabela alimento
    $query = "select alimento, quantidade_alimento, data_alimento from alimento_usuario where usuario = '$_SESSION[usuario]';";
    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);   
    $dados = mysqli_fetch_array($result);
     
    if(isset($dados['data_alimento'])){
        $dados['data_alimento'] = date('d/m/Y', strtotime(str_replace('-','/',$dados['data_alimento'])));
    }

    if ($row >= 1){
        $_SESSION['alimento'] = $dados['alimento'];
        $_SESSION['data_alimento'] = $dados['data_alimento'];
        $_SESSION['quantidade_alimento'] = $dados['quantidade_alimento'];
 
    } else {
        $_SESSION['alimento'] = ('');
        $_SESSION['data_alimento'] = ('');
        $_SESSION['quantidade_alimento'] = ('');
    }
    header('location: painel_usuario.php');
    exit();

} else {
    header('location: painel_usuario.php');
    exit();
}
?>

