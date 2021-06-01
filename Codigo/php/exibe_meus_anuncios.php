<?php
include("conexao.php");
session_start();


$email = $_SESSION['email'];
$query = "select cpf from usuarios where email = '$email'";
$result = mysqli_query($conexao, $query);
$cpf = mysqli_fetch_assoc($result);
$valor = $cpf['cpf'];

$query = "select titulo, descricao, condicao, status, imagens from anuncios where usuario_cpf = '$valor'";
$result = mysqli_query($conexao, $query);

if (($result) and ($result->num_rows != 0)) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['titulo'] . "|" . $row['descricao'] . "|" . $row['condicao'] . "|" . $row['imagens'] . "|" . $row['status'] . "|";
    }
} else {
    echo "";
}
