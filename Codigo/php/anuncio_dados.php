<?php
include("conexao.php");
session_start();

$imagem = $_COOKIE['anuncioClicado'];

if (isset($_SESSION['email'])) {
    $logado = $_SESSION['email'];
} else {
    $logado = "";
}

$query = "select * from anuncios where imagens = '$imagem'";
$result = mysqli_query($conexao, $query);
$dados = mysqli_fetch_assoc($result);

$cpf = $dados['usuario_cpf'];

$query = "select nome, email from usuarios where cpf = '$cpf'";
$result = mysqli_query($conexao, $query);
$dadosOfertante = mysqli_fetch_assoc($result);

$tudo = $dados['titulo'] . "|" . $dados['descricao'] . "|" . $dados['interesses'] . "|" . $dados['imagens']
    . "|" . $dados['status']  . "|" . $dados['condicao'] . "|" . $dadosOfertante['nome'] . "|" . $dadosOfertante['email'] . "|" . $logado;
echo $tudo;
