<?php
include("conexao.php");
session_start();



$imagem = $_COOKIE['propostaClicada'];
$query = "select id from propostas where imagens = '$imagem'";
$result = mysqli_query($conexao, $query);
$dados = mysqli_fetch_assoc($result);
$id = $dados['id'];



$status = $_COOKIE['statusClicado'];
$query = "update propostas set status = '$status' where id = '$id'";
$result = mysqli_query($conexao, $query);

echo $id;
