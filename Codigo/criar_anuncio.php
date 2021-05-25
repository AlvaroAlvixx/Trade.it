<?php
session_start();
include("conexao.php");

$titulo = mysqli_real_escape_string($conexao, trim($_POST['tituloAnuncio']));
$descricao = mysqli_real_escape_string($conexao, trim($_POST['descricaoAnuncio']));
$interesses = mysqli_real_escape_string($conexao, trim($_POST['interessesAnuncio']));

$cat = array();
$cat[0] = mysqli_real_escape_string($conexao, trim($_POST['games']));
$cat[1] = mysqli_real_escape_string($conexao, trim($_POST['informatica']));
$cat[2] = mysqli_real_escape_string($conexao, trim($_POST['celulares']));
$cat[3] = mysqli_real_escape_string($conexao, trim($_POST['eletronicos']));
$cat[4] = mysqli_real_escape_string($conexao, trim($_POST['casa']));
$cat[5] = mysqli_real_escape_string($conexao, trim($_POST['eletrodomesticos']));
$cat[6] = mysqli_real_escape_string($conexao, trim($_POST['esportes']));
$cat[7] = mysqli_real_escape_string($conexao, trim($_POST['ferramentas']));
$cat[8] = mysqli_real_escape_string($conexao, trim($_POST['moda']));
$cat[9] = mysqli_real_escape_string($conexao, trim($_POST['brinquedos']));
$cat[10] = mysqli_real_escape_string($conexao, trim($_POST['musica']));
$cat[11] = mysqli_real_escape_string($conexao, trim($_POST['antiguidades']));
$status = mysqli_real_escape_string($conexao, trim($_POST['status']));
$categorias = "";
$arquivo = $_FILES['file'];
$arquivoNovo = explode('.', $arquivo['name']);

for ($i = 0; $i < 12; $i++) {
    if ($cat[$i] != "") {
        $categorias = $categorias . ($cat[$i]) . ",";
    }
}

if ($categorias == "") {
    $_SESSION['vazio'] = true;
    header('Location: novo_anuncio.php');
    exit();
}

$arquivo = $_FILES['file'];
$arquivoNovo = explode('.', $arquivo['name']);

if ($arquivoNovo[sizeof($arquivoNovo) - 1] != 'png') {
    die('Você não pode fazer upload deste tipo de arquivo');
} else {

    $email = $_SESSION['email'];
    $sql = "select cpf from usuarios where email='$email'";
    $result = mysqli_query($conexao, $sql);
    $aux = mysqli_fetch_assoc($result);
    $ofertante = $aux['cpf'];
    echo $ofertante;

    $sql = "insert into anuncios values (default, '$titulo', '$descricao', '$interesses', 
    '$categorias', 'diretorio', '$status', '$ofertante')";

    $result = mysqli_query($conexao, $sql);

    $sql = "select id from anuncios where titulo = '$titulo' and usuario_cpf = '$ofertante'";
    $result = mysqli_query($conexao, $sql);
    $aux = mysqli_fetch_assoc($result);
    $id = $aux['id'];
    echo $id;

    $diretorio = "img/anuncios/" . $id . "/";
    $imagens = "img/anuncios/" . $id . "/imgAnuncio.png";
    $sql = "update anuncios set imagens = '$imagens' where id = '$id'";
    $result = mysqli_query($conexao, $sql);
    echo $diretorio;

    mkdir($diretorio);
    echo 'Upload foi feito com sucesso!';
    move_uploaded_file($arquivo['tmp_name'], $diretorio . "imgAnuncio.png");

    $_SESSION['status_anuncio'] = true;
    header('Location: novo_anuncio.php');
    exit;
}
