<?php
include("conexao.php");

$query = "select imagens from anuncios";
$result = mysqli_query($conexao, $query);
$texto = "";
if (($result) and ($result->num_rows != 0)) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['imagens'] . "|";
    }
} else {
    echo "";
}
