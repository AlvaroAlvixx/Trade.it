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
                                    <a class="nav-link" href="meus_anuncios.php">Meus anúncios <span class="sr-only"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="minhas_propostas.php">Minhas propostas <span class="sr-only"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="sobre.php">Sobre <span class="sr-only"></span></a>
                                </li>
                            <?php else : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="sobre.php">Sobre <span class="sr-only"></span></a>
                                </li>
                            <?php endif; ?>

                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <?php if (isset($_SESSION['email'])) : ?>
                                <p class="logado">
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