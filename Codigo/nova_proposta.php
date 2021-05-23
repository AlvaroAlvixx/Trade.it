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
    <title>Nova proposta - Trade.it</title>
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

    <main>
        <div class="container divNovaProposta">
            <div class="row divConteudo">
                <div class="col-12">
                    <h3>Anúncio: </h3> <h3 id="nomeAnuncio"></h3>
                </div>

                <div>                    
                    <div class="col-12">
                        <div class="row">
                            <div class="col-10 divInformacao">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="descricao">
                                            <h6>Descrição</h6>
                                            <div id="id_descricao">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-2 divImagem">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card  cardGeral imagem">
                                            <img src="https://picsum.photos/1080" class="card-img-top" alt="...">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 divProposta">
                                        <h6>Fazer proposta:</h6>
                                        <div class="divFazerProposta">
                                            <form>                                            
                                                <div class="form-group col-12">
                                                    <label for="produto">Produto</label>
                                                    <input type="text" class="form-control" id="produto">
                                                </div>
                                                <div class="form-group col-12">
                                                    <label for="descricao">Condição do produto</label>
                                                    <input type="text" class="form-control" id="descricao">
                                                </div>
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="form-group col-8">
                                                            <label for="mensagem">Mensagem ao ofertante</label>
                                                            <textarea class="form-control" id="mensagem" rows="3"></textarea>
                                                          </div>
                                                        <div class="form-group col-4">
                                                            <label for="condicao">Condições do produto</label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="rdNovo" id="rdNovo" value="option1">
                                                                <label class="form-check-label" for="rdNovo">
                                                                  Novo
                                                                </label>
                                                              </div>
                                                              <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="rdUsadoNovo" id="rdUsadoNovo" value="option2">
                                                                <label class="form-check-label" for="rdUsadoNovo">
                                                                  Usado (como novo)
                                                                </label>
                                                              </div>
                                                              <div class="form-check disabled">
                                                                <input class="form-check-input" type="radio" name="rdUsadoAceitavel" id="rdUsadoAceitavel" value="option3">
                                                                <label class="form-check-label" for="rdUsadoAceitavel">
                                                                    Usado (aceitável)
                                                                </label>
                                                              </div>  
                                                        </div>
                                                    </div>                                                    
                                                </div>    
                                                <div>
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <button id="btnCarregar" type="submit" class="btn btn-primary btnCarregar">Carregar foto</button>
                                                            </div>
                                                            <div class="col-8">
                                                                <label for="btnCarregar" id="lblCarregar">aaaa </label>
                                                            </div>
                                                        </div>                                                        
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

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>