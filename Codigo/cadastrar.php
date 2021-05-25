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

    <main style="padding-top: 50px;">
        <div class="container">
            <?php
            if (isset($_SESSION['vazio'])) :
            ?>
                <div>
                    <h5>Necessário preencher todos os campos.</h5>
                </div>
            <?php
            endif;
            unset($_SESSION['vazio']);
            ?>

            <?php
            if (isset($_SESSION['senha_incorreta'])) :
            ?>
                <div>
                    <h5>Senhas estão divergentes.</h5>
                </div>
            <?php
            endif;
            unset($_SESSION['senha_incorreta']);
            ?>

            <?php
            if (isset($_SESSION['usuario_existe'])) :
            ?>
                <div>
                    <h5>Usuário já cadastrado.</h5>
                </div>
            <?php
            endif;
            unset($_SESSION['usuario_existe']);
            ?>

            <?php
            if (isset($_SESSION['status_cadastro'])) :
            ?>
                <div>
                    <h5>Cadastro realizado com sucesso.</h5>
                </div>
            <?php
            endif;
            unset($_SESSION['status_cadastro']);
            ?>

            <form action="register.php" method="POST">
                <div class="divCadastro">
                    <div class="form-group">
                        <label for="inputNome">Nome Completo</label>
                        <input name="nome" type="text" class="form-control" id="inputNome">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="inputCPF">CPF</label>
                            <input name="cpf" type="number" class="form-control" id="inputCPF" maxlenght="11" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputNascimento">Data Nascimento</label>
                            <input name="nascimento" type="date" class="form-control" id="inputNascimento" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input name="email" type="email" class="form-control" id="inputEmail" required>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputCEP">CEP</label>
                            <input name="cep" type="number" class="form-control" id="inputCEP" maxlenght="8" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="inputLogradouro">Logradouro</label>
                            <input name="logradouro" type="text" class="form-control" id="inputLogradouro" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputNumero">Número</label>
                            <input name="numero" type="number" class="form-control" id="inputNumero" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputBairro">Bairro</label>
                            <input name="bairro" type="text" class="form-control" id="inputBairro" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputCidade">Cidade</label>
                            <input name="cidade" type="text" class="form-control" id="inputCidade" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPais">País</label>
                            <input tname="pais" ype="text" class="form-control" id="inputPais" required>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputSenha">Senha</label>
                            <input name="senha" type="password" class="form-control" id="inputSenha" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputSenhaConfirma">Confirme a senha</label>
                            <input name="senhaConfirma" type="password" class="form-control" id="inputSenhaConfirma" required>
                        </div>
                    </div>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
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