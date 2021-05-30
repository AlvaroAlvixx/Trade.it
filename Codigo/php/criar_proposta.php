<?php
session_start();
include("conexao.php");
$produto = mysqli_real_escape_string($conexao, trim($_POST['produto']));
$mensagem = mysqli_real_escape_string($conexao, trim($_POST['mensagem']));
$condicoes = mysqli_real_escape_string($conexao, trim($_POST['condicoes']));


$arquivo = $_FILES['file'];
$arquivoNovo = explode('.', $arquivo['name']);


if ($arquivoNovo[sizeof($arquivoNovo) - 1] != 'png') {
    $_SESSION['imagem_errada'] = true;
    header('Location: ../nova_proposta.php');
    exit;
} else {

    $email = $_SESSION['email'];
    $sql = "select cpf from usuarios where email='$email'";
    $result = mysqli_query($conexao, $sql);
    $aux = mysqli_fetch_assoc($result);
    $interessado = $aux['cpf'];

    $imagem = $_COOKIE['anuncioClicado'];

    $sql = "select id, usuario_cpf from anuncios where imagens='$imagem'";
    $result = mysqli_query($conexao, $sql);
    $aux = mysqli_fetch_assoc($result);
    $ofertante = $aux['usuario_cpf'];
    $anuncio = $aux['id'];

    $sql = "insert into propostas values (default, '$produto', '$mensagem', 'diretorio', 
    '$condicoes', '$ofertante', '1', '$anuncio')";
    $result = mysqli_query($conexao, $sql);

    $sql = "select id from propostas where produto = '$produto' and usuario_cpf = '$ofertante'";
    $result = mysqli_query($conexao, $sql);
    $aux = mysqli_fetch_assoc($result);
    $id = $aux['id'];
    echo $id;

    $sql = "insert into criar_proposta values ('$interessado', '$id')";
    $result = mysqli_query($conexao, $sql);

    $diretorio = "../img/propostas/" . $id . "/";
    $imagens = "img/propostas/" . $id . "/imgProposta.png";
    $sql = "update propostas set imagens = '$imagens' where id = '$id'";
    $result = mysqli_query($conexao, $sql);
    echo $diretorio;

    mkdir($diretorio);
    echo 'Upload foi feito com sucesso!';
    move_uploaded_file($arquivo['tmp_name'], $diretorio . "imgProposta.png");

    $_SESSION['status_proposta'] = true;
    header('Location: ../nova_proposta.php');
    exit;
}
