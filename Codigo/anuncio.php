<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_anuncio.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/c6addf5154.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/anuncio.js"></script>
    <script type="text/javascript" src="js/pesquisa_dados.js"></script>
    <title>Trade.it - anúncio</title>
</head>

<body>
    <?php include("header.php"); ?>

    <main>
        <div class="container divAnuncio">
            <div class="row">
                <div class="col-12">
                    <h3><b>Anúncio</b></h3>
                </div>


                <div class="col-12 ">
                    <div class="row">
                        <div class="col-4 divImagens">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card  cardGeral" id="id_imagem">
                                        <img src="https://picsum.photos/1080" class="card-img-top">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-8 divInformacoes">
                            <div class="row">
                                <div class="col-12">
                                    <div id="id_titulo">
                                        <h4>Título</h4>
                                    </div>
                                    <div class="condicoes">
                                        <h6>Condições: </h6>
                                        <div id="id_condicao">

                                        </div>
                                    </div>
                                    <div class="interesse">
                                        <h6>Interesses de troca: </h6>
                                        <div id="id_interesses">

                                        </div>
                                    </div>
                                    <div class="interesse">
                                        <h6>Ofertante: </h6>
                                        <div id="id_ofertante">

                                        </div>
                                    </div>
                                    <div class="calcularCep">
                                        <h6>Calcular frete: </h6>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-8 divInputCep">
                                                    <input class="form-control mr-sm-2 inputCep" type="text">
                                                    <p id="pFrete"></p>
                                                </div>
                                                <div class="col-3 divBtnCep">
                                                    <button type="button" class="btn btn-light btnCep" onclick="frete()">Calcular</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-12">
                    <div class="row">
                        <div class="col-8 descricao">
                            <h6>Descrição: </h6>
                            <div id="id_descricao">

                            </div>
                        </div>

                        <div class="col-4 divBtnTrocar">
                            <form action="nova_proposta.php" id="btn_troca">

                            </form>
                        </div>
                    </div>
                </div>



            </div>
        </div>

        <div class="container containerDestaque">
            <div class="col-12">
                <div class="row destaque">
                    <div class="col-12">
                        <h4>Destaques</h4>
                    </div>
                    
                    <div class="col-12">
                        <div id="divDestaque" class="row divDestaque">
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="row">
            <div class="col-12">
                <b>Trade.IT - Todos os direitos reservados - 2021</b>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>