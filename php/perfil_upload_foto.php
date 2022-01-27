<?php  
include('conexao.php');

if(isset($_FILES['imagem'])){
    $imagem = $_FILES['imagem'];

    $diretorio = "../upload/";
    $nomeDaImagem = $imagem['name'];
    $novo_nome = uniqid();
    $extensao = strtolower(pathinfo($nomeDaImagem, PATHINFO_EXTENSION));
    $deu = move_uploaded_file($imagem["tmp_name"], $diretorio . $novo_nome. "." .$extensao);

    if ($extensao != "jpg" && $extensao != "png" && $extensao != "jpeg")
    die("Tipo de arquivo invalido! ou voce ja possui uma foto de perfil.");

    if ($deu)  
        $conexao->query("update cliente set foto = '$novo_nome.$extensao' where usuario = '$_SESSION[usuario]';") or die($conexao->error);
       // $_SESSION['upload_foto'] = false;
        $_SESSION['foto-de-perfil'] = $novo_nome.".".$extensao;
        header('location: perfil.php');
}
?>