<?php
include("conexao.php");
session_start();

$email = $_SESSION['email'];
$query = "select nome from usuarios where email = '$email'";
$result = mysqli_query($conexao, $query);
$dados = mysqli_fetch_assoc($result);
$nome = $dados['nome'];

$imagem = $_COOKIE['propostaClicada'];
$query = "select id from propostas where imagens = '$imagem'";
$result = mysqli_query($conexao, $query);
$dados = mysqli_fetch_assoc($result);
$proposta = $dados['id'];

$query = "select id from mensagens where proposta_id = '$proposta'";
$result = mysqli_query($conexao, $query);
$tudo = "";
$num = mysqli_num_rows($result);

if (($result) and ($result->num_rows != 0)) {
    $i = 0;
    for ($i; $row = mysqli_fetch_assoc($result); $i++) {
        $mensagens[$i] =  $row['id'];
    }

    $i = 0;
    for ($i; $i < $num; $i++) {

        $id = $mensagens[$i];

        $query = "select * from mensagens where id = '$id'";
        $result = mysqli_query($conexao, $query);
        $valor = mysqli_fetch_assoc($result);

        $texto = $valor['texto'];
        $cpf = $valor['usuario_cpf'];

        $query = "select nome from usuarios where cpf = '$cpf'";
        $result = mysqli_query($conexao, $query);
        $valor = mysqli_fetch_assoc($result);

        $usuario = $valor['nome'];

        $tudo = $tudo . $usuario . "|" . $texto . "|";
    }
}

echo $nome . "|" . $tudo;
exit;
