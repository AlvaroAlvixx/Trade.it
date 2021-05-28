<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pesquisastyle.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/c6addf5154.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/pesquisa.js"></script>
    <script type="text/javascript" src="js/pesquisa_dados.js"></script>
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
                        <input class="inputSearch form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="search">
                        <button class="btn btn-outline-success my-2 my-sm-0" onclick="define_pesquisa()"><i class="fas fa-search"></i></button>
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
                                    <p class="logado">
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

    <main style="padding-top: 50px;">
        <div class="container-fluid divAreaPesquisa" style="max-width: 90%;">
            <div class="row">
                <h4 id="result"></h4>
            </div>
            <div class="row">
                <div class="col-md-3 divCategorias">
                    <div class="divOpcaoCategorias">
                        <div class="divAreaCategoria">
                            <p>Categorias</p>
                            <form action="">
                                <input type="checkbox" value="games" name="games" id="games" onclick="define_categoria('games')">
                                <label for="games">Games</label>
                            </form>
                            <form action="">
                                <input type="checkbox" value="informatica" name="informatica" id="informatica" onclick="define_categoria('informatica')">
                                <label for="informatica">Informática</label>
                            </form>
                            <form action="">
                                <input type="checkbox" value="celulares" name="celulares" id="celulares" onclick="define_categoria('celulares')">
                                <label for="celulares">Celulares</label>
                            </form>
                            <form action="">
                                <input type="checkbox" value="eletronicos" name="eletronicos" id="eletronicos" onclick="define_categoria('eletronicos')">
                                <label for="eletronicos">Eletrônicos</label>
                            </form>
                            <form action="">
                                <input type="checkbox" value="casa" name="casa" id="casa" onclick="define_categoria('casa')">
                                <label for="casa">Casa e Móveis</label>
                            </form>
                            <form action="">
                                <input type="checkbox" value="eletrodomesticos" name="eletrodomesticos" id="eletrodomesticos" onclick="define_categoria('eletrodomesticos')">
                                <label for="eletrodomesticos">Eletrodomésticos</label>
                            </form>
                            <form action="">
                                <input type="checkbox" value="esportes" name="esportes" id="esportes" onclick="define_categoria('esportes')">
                                <label for="esportes">Esportes e Fitness</label>
                            </form>
                            <form action="">
                                <input type="checkbox" value="ferramentas" name="ferramentas" id="ferramentas" onclick="define_categoria('ferramentas')">
                                <label for="ferramentas">Ferramentas</label>
                            </form>
                            <form action="">
                                <input type="checkbox" value="moda" name="moda" id="moda" onclick="define_categoria('moda')">
                                <label for="moda">Moda</label>
                            </form>
                            <form action="">
                                <input type="checkbox" value="brinquedos" name="brinquedos" id="brinquedos" onclick="define_categoria('brinquedos')">
                                <label for="brinquedos">Brinquedos</label>
                            </form>
                            <form action="">
                                <input type="checkbox" value="musica" name="musica" id="musica" onclick="define_categoria('musica')">
                                <label for="musica">Música</label>
                            </form>
                            <form action="">
                                <input type="checkbox" value="antiguidades" name="antiguidades" id="antiguidades" onclick="define_categoria('antiguidades')">
                                <label for="antiguidades">Antiguidades e Coleções</label>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 divAreaProdutos">
                    <div class="row" id="divResults">

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