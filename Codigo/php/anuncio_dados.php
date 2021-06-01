<?php
include("conexao.php");

$imagem = $_COOKIE['anuncioClicado'];

$query = "select * from anuncios where imagens = '$imagem'";
$result = mysqli_query($conexao, $query);
$dados = mysqli_fetch_assoc($result);
$tudo = $dados['titulo'] . "|" . $dados['descricao'] . "|" . $dados['interesses'] . "|" . $dados['imagens']
    . "|" . $dados['status']  . "|" . $dados['condicao'];
echo $tudo;
