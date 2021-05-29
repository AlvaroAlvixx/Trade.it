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
    <script type="text/javascript" src="js/pesquisa_dados.js"></script>
    <title>Trade.IT</title>
</head>

<body>
    <?php include("header.php"); ?>

    <main style="padding-top: 50px;">
        <div class="container">
            <form action="php/login.php" method="POST">
                <div class="divCadastro">
                    <div class="form-row">
                        <div class="col-md-3"></div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail">Email</label>
                            <input name="email" type="text" class="form-control" id="inputEmail" required>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-3"></div>
                        <div class="form-group col-md-6">
                            <label for="inputSenha">Senha</label>
                            <input name="senha" type="password" class="form-control" id="inputSenha" required>
                        </div>
                        <div class="col-md-3"> </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-row">
                        <div class="col-md-5"></div>
                        <div class="form-group col-md-2 btnLogin">
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </div>
                        <div class="col-md-5"></div>
                    </div>

                    <?php
                    if (isset($_SESSION['nao_autenticado'])) :
                    ?>
                        <div>
                            <h5>Email ou senha inválidos.</h5>
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>

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

                </div>
            </form>
        </div>
    </main>

    <footer style="position: absolute !important; bottom: 0 !important; width: 100% !important;">
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