<?php
include("conexao.php");
session_start();

$imagem = $_COOKIE['propostaClicada'];
$email = $_SESSION['email'];

$query = "select id, produto, status, mensagem, imagens, anuncio_id from propostas where imagens = '$imagem'";
$result = mysqli_query($conexao, $query);
$dados = mysqli_fetch_assoc($result);
$produto = $dados['produto'];
$condicao = $dados['status'];
$mensagem = $dados['mensagem'];
$propostaImg = $dados['imagens'];
$propostaId = $dados['id'];
$anuncioId = $dados['anuncio_id'];

$query = "select titulo, descricao, status, usuario_cpf, imagens from anuncios where id = '$anuncioId'";
$result = mysqli_query($conexao, $query);
$dados = mysqli_fetch_assoc($result);
$anuncioTitulo = $dados['titulo'];
$anuncioDescricao = $dados['descricao'];
$anuncioCondicao = $dados['status'];
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

$tudo = $anuncioTitulo . "|" . $ofertante . "|" . $anuncioCondicao . "|" . $anuncioDescricao . "|" . $anuncioImagem . "|"
    . $interessado . "|" . $produto . "|" . $condicao . "|" . $mensagem . "|" . $propostaImg . "|" . $usuario_ofertante;
echo $tudo;
