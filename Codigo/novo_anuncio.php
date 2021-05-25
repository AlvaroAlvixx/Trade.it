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

    <title>Trade.IT</title>
</head>

<body>

    <header>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-3 divLogo">
                        <a href="index.php"><img src="img/logoTrade.png" alt=""></a>
                    </div>
                    <div class="col-6 divSearch">

                        <form class="formSearch form-inline">
                            <input class="inputSearch form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                        </form>

                    </div>
                    <div class="col-3 divSlogan">
                        <h4>Aqui a catira é livre!</h4>
                    </div>
                </div>
                <div class="divNavbar row">
                    <nav class="col-12 navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Categorias
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>

                                <?php if (isset($_SESSION['email'])) : ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Meus anúncios <span class="sr-only"></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Minhas propostas <span class="sr-only"></span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Sobre <span class="sr-only"></span></a>
                                    </li>
                                <?php else : ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Sobre <span class="sr-only"></span></a>
                                    </li>
                                <?php endif; ?>

                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <?php if (isset($_SESSION['email'])) : ?>
                                    <p>
                                        <?php echo ($_SESSION['email']); ?>
                                    </p>
                                    <a class="nav-link" href="logout.php">Sair<span class="sr-only"></span></a>
                                <?php else : ?>
                                    <a class="nav-link" href="entrar.php">Entrar<span class="sr-only"></span></a>
                                    <a class="nav-link" href="cadastrar.php">Cadastrar<span class="sr-only"></span></a>
                                <?php endif; ?>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

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

                <form action="criar_anuncio.php" method="post" enctype="multipart/form-data">

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
                                            <input class="form-check-input" type="checkbox" value="games" name="games">
                                            <label class="form-check-label labelRadio" for="games">
                                                Games
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="informatica" name="informatica">
                                            <label class="form-check-label labelRadio" for="informatica">
                                                Informática
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="celulares" name="celulares">
                                            <label class="form-check-label labelRadio" for="celulares">
                                                Celulares
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="eletronicos" name="eletronicos">
                                            <label class="form-check-label labelRadio" for="eletronicos">
                                                Eletrônicos
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="casa" name="casa">
                                            <label class="form-check-label labelRadio" for="casa">
                                                Casa e Móveis
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="eletrodomesticos" name="eletrodomesticos">
                                            <label class="form-check-label labelRadio" for="eletrodomesticos">
                                                Eletrodomésticos
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="esportes" name="esportes">
                                            <label class="form-check-label labelRadio" for="esportes">
                                                Esportes e Fitness
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="ferramentas" name="ferramentas">
                                            <label class="form-check-label labelRadio" for="ferramentas">
                                                Ferramentas
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="moda" name="moda">
                                            <label class="form-check-label labelRadio" for="moda">
                                                Moda
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="brinquedos" name="brinquedos">
                                            <label class="form-check-label labelRadio" for="brinquedos">
                                                Brinquedos
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="musica" name="musica">
                                            <label class="form-check-label labelRadio" for="musica">
                                                Música
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="antiguidades" name="antiguidades">
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