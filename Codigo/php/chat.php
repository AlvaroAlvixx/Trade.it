<?php
include("conexao.php");
session_start();

$imagem = $_COOKIE['propostaClicada'];
$query = "select id from propostas where imagens = '$imagem'";
$result = mysqli_query($conexao, $query);
$dados = mysqli_fetch_assoc($result);
$proposta = $dados['id'];

$email = $_SESSION['email'];
$query = "select cpf from usuarios where email = '$email'";
$result = mysqli_query($conexao, $query);
$dados = mysqli_fetch_assoc($result);
$cpf = $dados['cpf'];

$mensagem = mysqli_real_escape_string($conexao, trim($_POST['mensagem']));

$sql = "insert into mensagens values (default, '$mensagem', '$cpf', '$proposta')";
$result = mysqli_query($conexao, $sql);

header('Location: ../proposta.php');
exit;
