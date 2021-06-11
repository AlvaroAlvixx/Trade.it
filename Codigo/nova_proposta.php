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
    <link rel="stylesheet" href="css/style_novaProposta.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c6addf5154.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/pesquisa_dados.js"></script>
    <script type="text/javascript" src="js/criar_proposta.js"></script>
    <title>Nova proposta - Trade.it</title>
</head>

<body>

    <?php include("header.php"); ?>

    <main>
        <?php
            if (isset($_SESSION['imagem_errada'])) :
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 divAvisoErro">
                            <h5>Você não pode fazer upload deste tipo de arquivo.</h5>
                        </div>
                    </div>                        
                </div>
            <?php
            endif;
            unset($_SESSION['imagem_errada']);
            ?>
            <?php
            if (isset($_SESSION['status_proposta'])) :
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 divAvisoSucesso">
                            <h5>Proposta enviada com sucesso.</h5>
                        </div>
                    </div>                        
                </div>
            <?php
            endif;
            unset($_SESSION['status_proposta']);
        ?>
        <div class="container divNovaProposta">
            <div class="row divConteudo">

                <div class="col-12 titulo">
                    <h3>Propor troca </h3>

                </div>

                <div>
                    <br>
                    <div class="col-12">

                        <div class="row">
                            <div class="col-12 nomeAnuncio">
                                <h5 id="idTitulo">Anúncio: </h5>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-10 divInformacao">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="descricao">
                                            <h5>Descrição:</h5>
                                            <div id="idDescricao">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-2 divImagem">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card  cardGeral" id="idImagem">

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 divProposta">
                                        <h6><b>Fazer proposta:</b></h6>

                                        <div class="divFazerProposta">
                                            <form action="php/criar_proposta.php" method="post" enctype="multipart/form-data">
                                                <div class="form-group col-12">
                                                    <label for="produto" class="lblTitulo">Produto</label>
                                                    <input type="text" class="form-control" id="produto" name="produto" required>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="form-group col-8">
                                                            <label for="mensagem" class="lblTitulo">Mensagem ao ofertante</label>
                                                            <textarea class="form-control" id="mensagem" name="mensagem" rows="3" required></textarea>
                                                        </div>
                                                        <div class="form-group col-4">

                                                            <fieldset class="fieldsetCondicoes">
                                                                <legend><label for="condicao" class="lblTitulo">Condições do produto</label></legend>


                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="condicoes" id="rdNovo" value="1" required>
                                                                    <label class="form-check-label" for="rdNovo">
                                                                        Novo
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="condicoes" id="rdUsadoNovo" value="2">
                                                                    <label class="form-check-label" for="rdUsadoNovo">
                                                                        Usado (como novo)
                                                                    </label>
                                                                </div>
                                                                <div class="form-check disabled">
                                                                    <input class="form-check-input" type="radio" name="condicoes" id="rdUsadoAceitavel" value="3">
                                                                    <label class="form-check-label" for="rdUsadoAceitavel">
                                                                        Usado (aceitável)
                                                                    </label>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <input id="CarregarImg" type="file" name="file" required>
                                                        </div>
                                                    </div>
                                                    <div class="divBtnProposta">
                                                        <button id="btnProposta" type="submit" class="btn btn-primary btnProposta">Enviar proposta</button>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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