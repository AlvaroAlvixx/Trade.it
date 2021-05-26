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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/c6addf5154.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/index.js"></script>
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
                                    <a class="nav-link" href="php/logout.php">Sair<span class="sr-only"></span></a>
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

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 divCarousel">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://picsum.photos/2560/1080" class=" d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/2560/1080" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/2560/1080" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <h4>Destaques</h4>
            </div>

            <div id="divDestaque" class="row divDestaque">

            </div>

            <div class="row divCategorias">
                <div class="col-12">
                    <h4>Categorias</h4>
                </div>

                <div class="col-2">
                    <a class="aCategoria" href="pesquisa.php" onclick="define_categoria('games')">
                        <img src="img/Categorias/cat1.png" class="card-img-top" alt="...">
                    </a>
                </div>
                <div class="col-2">
                    <a class="aCategoria" href="pesquisa.php" onclick="define_categoria('informatica')">
                        <img src="img/Categorias/cat2.png" class="card-img-top" alt="...">
                    </a>
                </div>
                <div class="col-2">
                    <a class="aCategoria" href="pesquisa.php" onclick="define_categoria('celulares')">
                        <img src="img/Categorias/cat3.png" class="card-img-top" alt="...">
                    </a>
                </div>
                <div class="col-2">
                    <a class="aCategoria" href="pesquisa.php" onclick="define_categoria('eletronicos')">
                        <img src="img/Categorias/cat4.png" class="card-img-top" alt="...">
                    </a>
                </div>
                <div class="col-2">
                    <a class="aCategoria" href="pesquisa.php" onclick="define_categoria('casa')">
                        <img src="img/Categorias/cat5.png" class="card-img-top" alt="...">
                    </a>
                </div>
                <div class="col-2">
                    <a class="aCategoria" href="pesquisa.php" onclick="define_categoria('eletrodomesticos')">
                        <img src="img/Categorias/cat6.png" class="card-img-top" alt="...">
                    </a>
                </div>
                <div class="col-2">
                    <a class="aCategoria" href="pesquisa.php" onclick="define_categoria('esportes')">
                        <img src="img/Categorias/cat7.png" class="card-img-top" alt="...">
                    </a>
                </div>
                <div class="col-2">
                    <a class="aCategoria" href="pesquisa.php" onclick="define_categoria('ferramentas')">
                        <img src="img/Categorias/cat8.png" class="card-img-top" alt="...">
                    </a>
                </div>
                <div class="col-2">
                    <a class="aCategoria" href="pesquisa.php" onclick="define_categoria('moda')">
                        <img src="img/Categorias/cat10.png" class="card-img-top" alt="...">
                    </a>
                </div>
                <div class="col-2">
                    <a class="aCategoria" href="pesquisa.php" onclick="define_categoria('brinquedos')">
                        <img src="img/Categorias/cat11.png" class="card-img-top" alt="...">
                    </a>
                </div>
                <div class="col-2">
                    <a class="aCategoria" href="pesquisa.php" onclick="define_categoria('musica')">
                        <img src="img/Categorias/cat12.png" class="card-img-top" alt="...">
                    </a>
                </div>
                <div class="col-2">
                    <a class="aCategoria" href="pesquisa.php" onclick="define_categoria('antiguidades')">
                        <img src="img/Categorias/cat13.png" class="card-img-top" alt="...">
                    </a>
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