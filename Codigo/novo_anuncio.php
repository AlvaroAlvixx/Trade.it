<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_novoAnuncio.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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
                            <input class="inputSearch form-control mr-sm-2" type="search" placeholder="Search"
                                aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i
                                    class="fas fa-search"></i></button>
                        </form>

                    </div>
                    <div class="col-3 divSlogan">
                        <h4>Aqui a catira é livre!</h4>
                    </div>
                </div>
                <div class="divNavbar row">
                    <nav class="col-12 navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Categorias
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Meus anúncios <span class="sr-only"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Minhas propostas <span class="sr-only"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Sobre <span class="sr-only"></span></a>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <a class="nav-link" href="entrar.php">Entrar<span class="sr-only"></span></a>
                                <a class="nav-link" href="cadastrar.php">Cadastrar<span class="sr-only"></span></a>
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
                <form>


                    <div class="form-group">
                        <label for="tituloAnuncio">Título</label>
                        <input type="text" class="form-control" id="tituloAnuncio" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="descricaoAnuncio">Descrição</label>
                        <textarea class="form-control" id="descricaoAnuncio" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="interessesAnuncio">Interesses de troca</label>
                        <input type="text" class="form-control" id="interessesAnuncio" placeholder="">
                    </div>


                    <div class="row">


                        <div class="col-md-5">
                            <fieldset class="fieldsetAnuncio fieldsetCondicoes">
                                <legend class="fieldsetAnuncio">Condições do produto</legend>
                                <div class="form-check divRadioCondicoes">
                                    <input class="form-check-input" type="radio" name="condicaoNovo" id="condicaoNovo"
                                        value="Novo">
                                    <label class="form-check-label labelRadio" for="condicaoNovo">
                                        Novo
                                    </label>
                                </div>
                                <div class="form-check divRadioCondicoes">
                                    <input class="form-check-input" type="radio" name="condicaoUsado01"
                                        id="condicaoUsado01" value="usadoNovo">
                                    <label class="form-check-label labelRadio" for="condicaoUsado01">
                                        Usado (Como Novo)
                                    </label>
                                </div>
                                <div class="form-check divRadioCondicoes">
                                    <input class="form-check-input" type="radio" name="condicaoUsado02"
                                        id="condicaoUsado02" value="usadoAceitavel">
                                    <label class="form-check-label labelRadio" for="condicaoUsado02">
                                        Usando (Aceitável)
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
                                            <input class="form-check-input" type="checkbox" value="" id="cat01">
                                            <label class="form-check-label labelRadio" for="cat01">
                                                Categoria
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="" id="cat02">
                                            <label class="form-check-label labelRadio" for="cat02">
                                                Categoria
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="" id="cat03">
                                            <label class="form-check-label labelRadio" for="cat03">
                                                Categoria
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="" id="cat04">
                                            <label class="form-check-label labelRadio" for="cat04">
                                                Categoria
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="" id="cat05">
                                            <label class="form-check-label labelRadio" for="cat05">
                                                Categoria
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="" id="cat06">
                                            <label class="form-check-label labelRadio" for="cat06">
                                                Categoria
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="" id="cat07">
                                            <label class="form-check-label labelRadio" for="cat07">
                                                Categoria
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="" id="cat08">
                                            <label class="form-check-label labelRadio" for="cat08">
                                                Categoria
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="" id="cat09">
                                            <label class="form-check-label labelRadio" for="cat09">
                                                Categoria
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="" id="cat10">
                                            <label class="form-check-label labelRadio" for="cat10">
                                                Categoria
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="" id="cat11">
                                            <label class="form-check-label labelRadio" for="cat11">
                                                Categoria
                                            </label>
                                        </div>
                                        <div class="form-check divRadioCondicoes">
                                            <input class="form-check-input" type="checkbox" value="" id="cat12">
                                            <label class="form-check-label labelRadio" for="cat12">
                                                Categoria
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <button id="btnCarregar" type="submit" class="btn btn-primary btnCarregar">Carregar
                                foto</button>
                        </div>
                        <div class="col-8">
                            <label for="btnCarregar" id="lblCarregar">aaaa </label>
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

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

</body>

</html>