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
    <script type="text/javascript" src="js/pesquisa_dados.js"></script>
    <title>Trade.IT</title>
</head>

<body>
    <?php include("header.php"); ?>

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
                                <img src="img/caroussel01.jpg" class=" d-block w-100" alt="...">

                            </div>
                            <div class="carousel-item">
                                <img src="img/caroussel02.jpg" class="d-block w-100" alt="...">

                            </div>
                            <div class="carousel-item">
                                <img src="img/caroussel03.jpg" class="d-block w-100" alt="...">

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

        <div class="container">
            <div class="row divCategorias">
                <div class="col-12">
                    <h4>Categorias</h4>
                </div>
                <!-- games -->
                <div class="col-2">
                    <div class="row divImgCategoria">
                        <div class="col-12">
                            <a class="aCategoria" href="pesquisa.php" onclick="define_categoria('games')">
                                <img src="img/categorias/games.png" class="card-img-top imgCategoria" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="row divTxtCategoria">
                        <label>Games</label>
                    </div>
                </div>
                <!-- informatica -->
                <div class="col-2">
                    <div class="row divImgCategoria">
                        <div class="col-12">
                            <a class="aCategoria" href="pesquisa.php" onclick="define_categoria('informatica')">
                                <img src="img/categorias/informatica.png" class="card-img-top imgCategoria" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="row divTxtCategoria">
                        <label>Informática</label>
                    </div>
                </div>
                <!-- celulares -->
                <div class="col-2">
                    <div class="row divImgCategoria">
                        <div class="col-12">
                            <a class="aCategoria" href="pesquisa.php" onclick="define_categoria('celulares')">
                                <img src="img/categorias/celulares.png" class="card-img-top imgCategoria" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="row divTxtCategoria">
                        <label>Celulares</label>
                    </div>
                </div>
                <!-- eletronicos -->
                <div class="col-2">
                    <div class="row divImgCategoria">
                        <div class="col-12">
                            <a class="aCategoria" href="pesquisa.php" onclick="define_categoria('eletronicos')">
                                <img src="img/categorias/eletronico.png" class="card-img-top imgCategoria" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="row divTxtCategoria">
                        <label>Eletrônicos</label>
                    </div>
                </div>
                <!-- casa -->
                <div class="col-2">
                    <div class="row divImgCategoria">
                        <div class="col-12">
                            <a class="aCategoria" href="pesquisa.php" onclick="define_categoria('casa')">
                                <img src="img/categorias/casa.png" class="card-img-top imgCategoria" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="row divTxtCategoria">
                        <label>Casa</label>
                    </div>
                </div>
                <!-- eletrodomesticos -->
                <div class="col-2">
                    <div class="row divImgCategoria">
                        <div class="col-12">
                            <a class="aCategoria" href="pesquisa.php" onclick="define_categoria('eletrodomesticos')">
                                <img src="img/categorias/eletrodomesticos.png" class="card-img-top imgCategoria" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="row divTxtCategoria">
                        <label>Eletrodomésticos</label>
                    </div>
                </div>
                <!-- esportes -->
                <div class="col-2">
                    <div class="row divImgCategoria">
                        <div class="col-12">
                            <a class="aCategoria" href="pesquisa.php" onclick="define_categoria('esportes')">
                                <img src="img/categorias/esporte.png" class="card-img-top imgCategoria" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="row divTxtCategoria">
                        <label>Esportes</label>
                    </div>
                </div>
                <!-- ferramentas -->
                <div class="col-2">
                    <div class="row divImgCategoria">
                        <div class="col-12">
                            <a class="aCategoria" href="pesquisa.php" onclick="define_categoria('ferramentas')">
                                <img src="img/categorias/ferramentas.png" class="card-img-top imgCategoria" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="row divTxtCategoria">
                        <label>Ferramentas</label>
                    </div>
                </div>
                <!-- moda -->
                <div class="col-2">
                    <div class="row divImgCategoria">
                        <div class="col-12">
                            <a class="aCategoria" href="pesquisa.php" onclick="define_categoria('moda')">
                                <img src="img/categorias/moda.png" class="card-img-top imgCategoria" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="row divTxtCategoria">
                        <label>Moda</label>
                    </div>
                </div>
                <!-- brinquedos -->
                <div class="col-2">
                    <div class="row divImgCategoria">
                        <div class="col-12">
                            <a class="aCategoria" href="pesquisa.php" onclick="define_categoria('brinquedos')">
                                <img src="img/categorias/brinquedo.png" class="card-img-top imgCategoria" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="row divTxtCategoria">
                        <label>Brinquedos</label>
                    </div>
                </div>
                <!-- musica -->
                <div class="col-2">
                    <div class="row divImgCategoria">
                        <div class="col-12">
                            <a class="aCategoria" href="pesquisa.php" onclick="define_categoria('musica')">
                                <img src="img/categorias/musica.png" class="card-img-top imgCategoria" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="row divTxtCategoria">
                        <label>Música</label>
                    </div>
                </div>
                <!-- antiguidades -->
                <div class="col-2">
                    <div class="row divImgCategoria">
                        <div class="col-12">
                            <a class="aCategoria" href="pesquisa.php" onclick="define_categoria('antiguidades')">
                                <img src="img/categorias/antiguidade.png" class="card-img-top imgCategoria" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="row divTxtCategoria">
                        <label>Antiguidades</label>
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