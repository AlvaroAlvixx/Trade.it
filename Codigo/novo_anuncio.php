<?php
session_start();
?>
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
    <link rel="stylesheet" href="css/style_novoAnuncio.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/c6addf5154.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/pesquisa_dados.js"></script>
    <title>Trade.IT</title>
</head>

<body>

    <?php include("header.php"); ?>

    <main class="container" style="padding-top: 50px;">

        <div class="row">
            <div class="col-md-12">
                <h4>Novo Anúncio</h4>
            </div>
        </div>

        <div class="areaGeral row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <?php
                if (isset($_SESSION['imagem_errada'])) :
                ?>
                    <div>
                        <h5>Você não pode fazer upload deste tipo de arquivo.</h5>
                    </div>
                <?php
                endif;
                unset($_SESSION['imagem_errada']);
                ?>
                <?php
                if (isset($_SESSION['vazio'])) :
                ?>
                    <div>
                        <h5>Escolha pelo menos uma categoria.</h5>
                    </div>
                <?php
                endif;
                unset($_SESSION['vazio']);
                ?>

                <?php
                if (isset($_SESSION['status_anuncio'])) :
                ?>
                    <div>
                        <h5>Anúncio criado com sucesso.</h5>
                    </div>
                <?php
                endif;
                unset($_SESSION['status_anuncio']);
                ?>

                <form action="php/criar_anuncio.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="tituloAnuncio">Título</label>
                        <input type="text" class="form-control" name="tituloAnuncio" required>
                    </div>
                    <div class="form-group">
                        <label for="descricaoAnuncio">Descrição</label>
                        <textarea class="form-control" name="descricaoAnuncio" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="interessesAnuncio">Interesses de troca</label>
                        <input type="text" class="form-control" name="interessesAnuncio" required>
                    </div>

                    <div class="row">
                        <div class="col-md-5">
                            <fieldset class="fieldsetAnuncio fieldsetCondicoes">
                                <legend class="fieldsetAnuncio">Condições do produto</legend>


                                <div class="form-check divRadioCondicoes">
                                    <input class="form-check-input" type="radio" name="status" id="radioNovo" value="1" required>
                                    <label class="form-check-label labelRadio" for="radioNovo">
                                        Novo
                                    </label>
                                </div>
                                <div class="form-check divRadioCondicoes">
                                    <input class="form-check-input" type="radio" name="status" id="radioUsadoNovo" value="2">
                                    <label class="form-check-label labelRadio" for="radioUsadoNovo">
                                        Usado (Como Novo)
                                    </label>
                                </div>
                                <div class="form-check divRadioCondicoes">
                                    <input class="form-check-input" type="radio" name="status" id="radioUsadoAceita" value="3">
                                    <label class="form-check-label labelRadio" for="radioUsadoAceita">
                                        Usado (Aceitável)
                                    </label>
                                </div>


                            </fieldset>
                        </div>


                        <div class="col-md-7">
                            <fieldset class="fieldsetAnuncio">
                                <legend class="fieldsetAnuncio">Categorias</legend>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="games" name="games" id="games">
                                            <label class="form-check-label labelRadio" for="games">
                                                Games
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="informatica" name="informatica" id="informatica">
                                            <label class="form-check-label labelRadio" for="informatica">
                                                Informática
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="celulares" name="celulares" id="celulares">
                                            <label class="form-check-label labelRadio" for="celulares">
                                                Celulares
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="eletronicos" name="eletronicos" id="eletronicos">
                                            <label class="form-check-label labelRadio" for="eletronicos">
                                                Eletrônicos
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="casa" name="casa" id="casa">
                                            <label class="form-check-label labelRadio" for="casa">
                                                Casa e Móveis
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="eletrodomesticos" name="eletrodomesticos" id="eletrodomesticos">
                                            <label class="form-check-label labelRadio" for="eletrodomesticos">
                                                Eletrodomésticos
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="esportes" name="esportes" id="esportes">
                                            <label class="form-check-label labelRadio" for="esportes">
                                                Esportes e Fitness
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="ferramentas" name="ferramentas" id="ferramentas">
                                            <label class="form-check-label labelRadio" for="ferramentas">
                                                Ferramentas
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="moda" name="moda" id="moda">
                                            <label class="form-check-label labelRadio" for="moda">
                                                Moda
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="brinquedos" name="brinquedos" id="brinquedos">
                                            <label class="form-check-label labelRadio" for="brinquedos">
                                                Brinquedos
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="musica" name="musica" id="musica">
                                            <label class="form-check-label labelRadio" for="musica">
                                                Música
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="antiguidades" name="antiguidades" id="antiguidades">
                                            <label class="form-check-label labelRadio" for="antiguidades">
                                                Antiguidades e Coleções
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <input id="CarregarImg" type="file" name="file" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 divBtnCriar">
                            <button type="submit" class="btn btn-primary">Adicionar Anúncio</button>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-md-1"></div>
        </div>

    </main>

    <footer>
        <div class="row">
            <div class="col-12">
                <b>Trade.IT - Todos os direitos reservados - 2021</b>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>