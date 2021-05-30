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
	<link rel="stylesheet" href="css/style_minhasPropostas.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/c6addf5154.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/minhas_propostas.js"></script>
	<script type="text/javascript" src="js/pesquisa_dados.js"></script>
	<title>Minhas propostas - Trade.it</title>
</head>

<body>

	<?php include("header.php"); ?>

	<main>
		<div class="container containerMinhasPropostas">
			<div class="row divConteudo">

				<div class="col-12 titulo">
					<h3>Minhas propostas</h3>
					<h3 id="nomeAnuncio"></h3>
				</div>

				<div class="col-12">

					<div class="row">
						<div class="col-12 divMinhasPropostas" id="minhasPropostas">

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

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>