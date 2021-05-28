<?php
include("conexao.php");

$pesquisa = $_COOKIE['pesquisa'];
if ($pesquisa == "%%") {
    $pesquisa = $_COOKIE['categoriaClicada'];
    if ($pesquisa == "%%") {
        $pesquisa = "tudo";
        echo $pesquisa;
    } else {
        echo $pesquisa;
    }
} else {
    echo $pesquisa;
}
