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
    <link rel="stylesheet" href="css/style_popostaTroca.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c6addf5154.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/pesquisa_dados.js"></script>
    <script type="text/javascript" src="js/proposta.js"></script>
    <title>Proposta de troca</title>
</head>

<body>

    <?php include("header.php"); ?>

    <main>

        <div class="container divPropostaTroca">
            <div class="row divConteudo">

                <div class="col-12 titulo">
                    <h3>Proposta de troca </h3>
                </div>

                <div>
                    <div class="col-12">
                        <br>
                        <div class="row">
                            <div class="col-12 nomeAnuncio">
                                <h5><b> Anúncio: </b></h5>
                                <h5 id="anuncioTitulo"> </h5>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-10 divInformacaoAnuncio ">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="descricao">
                                            <div class="row">
                                                <p class="topicosProposta"> Ofertante: </p>
                                                <p id="ofertanteAnuncio"></p>
                                            </div>
                                            <div class="row">
                                                <p class="topicosProposta"> Condição do Produto: </p>
                                                <p id="condicaoAnuncio"></p>
                                            </div>
                                            <div class="row">
                                                <p class="topicosProposta"> Descrição: </p>
                                                <p id="descricaoAnuncio"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-2 divImagem">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card cardGeral" id="imgAnuncio">

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-12">
                            <br> <br>
                            <fieldset class="fieldsetProposta">
                                <legend>
                                    <h6> Proposta</h6>
                                </legend>

                                <div class="row">
                                    <div class="col-10 divInformacaoPrposta" id="informacoesProposta">
                                        <div class="row">
                                            <p class="topicosProposta"> Status:</p>
                                            <p id="statusProposta">&nbsp****</p>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <p class="topicosProposta">Interessado: </p>
                                            <p id="interessado"></p>
                                        </div>
                                        <div class="row">
                                            <p class="topicosProposta">Produto oferecido: </p>
                                            <p id="produtoProposta"></p>
                                        </div>
                                        <div class="row">
                                            <p class="topicosProposta">Condição do produto: </p>
                                            <p id="condicaoProposta"></p>
                                        </div>
                                        <div class="row">
                                            <p class="topicosProposta">Mensagem: </p>
                                            <p id="mensagemProposta"></p>
                                        </div>
                                    </div>
                                    <div class="col-2 divImagem">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card cardGeral" id="imgProposta">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <div class="divBotoesResponderProposta" id="divOfertante">

                                        </div>
                                    </div>
                                </div>

                            </fieldset>

                        </div>
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