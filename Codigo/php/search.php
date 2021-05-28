<?php
session_start();
include('conexao.php');


$pesquisa = $_COOKIE['pesquisa'];
$categoria = $_COOKIE['categoriaClicada'];
$query = "select imagens from anuncios where titulo like '%$pesquisa%' and categorias like '%$categoria%'";
$result = mysqli_query($conexao, $query);

if (($result) and ($result->num_rows != 0)) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['imagens'] . "|";
    }
} else {
    echo "";
}
