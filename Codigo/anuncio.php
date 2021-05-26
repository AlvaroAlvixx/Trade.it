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
    <title>Trade.it - anúncio</title>
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

    <main>
        <div class="container divAnuncio">
            <div class="row ">
                <div class="col-12">
                    <h3><b>Anúncio</b></h3>
                </div>

                <div>
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
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                            </div>
                                        </div>
                                        <div class="interesse">
                                            <h6>Interesses de troca: </h6>
                                            <div id="id_interesses">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                            </div>
                                        </div>
                                        <div class="calcularCep">
                                            <h6>Calcular frete: </h6>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-8 divInputCep">
                                                        <input class="form-control mr-sm-2 inputCep" type="text">
                                                    </div>
                                                    <div class="col-3 divBtnCep">
                                                        <button type="button" class="btn btn-light btnCep" onclick="frete()">Calcular</button>
                                                        <p id="pFrete"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6 descricao">
                                <div class="row">
                                    <div class="col-12 divDescricao">
                                        <h6>Descrição: </h6>
                                        <div id="id_descricao">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 divBtnTrocar">
                                <button type="button" class="btn btn-light btnTrocar">Propor troca</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div>
                <div class="row destaques">
                    <div class="col-12">
                        <h4>Destaques</h4>
                    </div>
                    <div id="divDestaque" class="row divDestaque">

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