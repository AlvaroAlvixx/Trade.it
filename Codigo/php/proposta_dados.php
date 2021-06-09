<?php
include("conexao.php");
session_start();

$imagem = $_COOKIE['propostaClicada'];
$email = $_SESSION['email'];

$query = "select id, produto, status, condicao, mensagem, imagens, anuncio_id from propostas where imagens = '$imagem'";
$result = mysqli_query($conexao, $query);
$dados = mysqli_fetch_assoc($result);
$produto = $dados['produto'];
$statusProposta = $dados['status'];
$condicao = $dados['condicao'];
$mensagem = $dados['mensagem'];
$propostaImg = $dados['imagens'];
$propostaId = $dados['id'];
$anuncioId = $dados['anuncio_id'];

$query = "select titulo, descricao, status, condicao, usuario_cpf, imagens from anuncios where id = '$anuncioId'";
$result = mysqli_query($conexao, $query);
$dados = mysqli_fetch_assoc($result);
$anuncioTitulo = $dados['titulo'];
$anuncioDescricao = $dados['descricao'];
$anuncioCondicao = $dados['condicao'];
$statusAnuncio = $dados['status'];
$anuncioImagem = $dados['imagens'];
$ofertanteCpf = $dados['usuario_cpf'];

$query = "select nome, email from usuarios where cpf = '$ofertanteCpf'";
$result = mysqli_query($conexao, $query);
$dados = mysqli_fetch_assoc($result);
$ofertante = $dados['nome'];
$ofertanteEmail = $dados['email'];

if ($ofertanteEmail == $email) {
    $usuario_ofertante = true;
} else {
    $usuario_ofertante = false;
}

$query = "select usuario_cpf from criar_proposta where proposta_id = '$propostaId'";
$result = mysqli_query($conexao, $query);
$dados = mysqli_fetch_assoc($result);
$interessadoCpf = $dados['usuario_cpf'];

$query = "select nome from usuarios where cpf = '$interessadoCpf'";
$result = mysqli_query($conexao, $query);
$dados = mysqli_fetch_assoc($result);
$interessado = $dados['nome'];

$usuario_admin = "";
if (isset($_SESSION['admin'])) {
    $usuario_admin = $_SESSION['admin'];
}

$tudo = $anuncioTitulo . "|" . $ofertante . "|" . $anuncioCondicao . "|" . $anuncioDescricao . "|" . $anuncioImagem . "|"
    . $interessado . "|" . $produto . "|" . $condicao . "|" . $mensagem . "|" . $propostaImg . "|" . $usuario_ofertante . "|" . $statusAnuncio . "|" . $statusProposta
    . "|" . $usuario_admin;
echo $tudo;
