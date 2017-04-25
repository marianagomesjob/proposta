<?php 
	//Inserindo o arquivo de conexão 
	include_once ("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt">
  	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="">
		<!--Links-->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="assets/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
		<link rel="stylesheet" href="assets/css/estilo.css" type="text/css">
		<link rel="stylesheet" href="assets/css/box.css" type="text/css">
		<script src="assets/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  	</head>

   	<body>
		<?php 
			include_once "header.php"
		?>
		<div class="container">
			<h1>Painel ao VIVO</h1>

			<hr>
		</div>
		<div class="container">
			<div class="form-group">
				<div class="col-sm-3">
					<div class="btn-group" role="group" aria-label="...">
						<button type="button" class="btn btn-default">Dia</button>
						<button type="button" class="btn btn-default">Semana</button>
						<button type="button" class="btn btn-default">Mês</button>
					</div>
				</div>
		  
				<div class="col-sm-4">
					<select class="form-control">
						<option>Todos os funis</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
			</div>		
		</div>

		<br>
		<div class="container">
 
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<br />

					<div class="card-deck-wrapper">
						<div class="card-deck">
							<div class="card" style="max-width:420px;">
								<div class="card-block text-center">
									<h4 class="card-title-prop">Novas Propostas</h4>
									<p class="card-text-prop"><b>R$27.797.356.844</b></p>
									<h4 class="card-title-prop">Mês atual</h4>
									<p class="card-text-prop"><b>7800 Propostas</b></p>
								</div>
							</div>

							<div class="card" style="max-width:106px;">
								<div class="card-block text-center">
									<h4 class="card-title">Atividades</h4>
									<p class="card-text-ativ"><b>ligações </b></p>
									<p class="card-text-prop"><b>12</b></p>

								</div>
							</div>
							<div class="card" style="max-width:106px;">
								<div class="card-block text-center">
									<h4 class="card-title">Atividades</h4>
									<p class="card-text-ativ"><b>Tarefas</b></p>
									<p class="card-text-prop"><b>12</b></p>
								</div>
							</div>
							<div class="card" style="max-width:106px;">
								<div class="card-block text-center">
									<h4 class="card-title">Atividades</h4>
									<p class="card-text-ativ"> <b>Emails </b></p>
									<p class="card-text-prop"><b>12</b></p>
								</div>
							</div>
							<div class="card" style="max-width:106px;">
								<div class="card-block text-center">
									<h4 class="card-title">Atividades</h4>
									<p class="card-text-ativ"><b> Almoço</b> </p>
									<p class="card-text-prop"><b>12</b></p>
								</div>
							</div>
							<div class="card" style="max-width:106px;">
								<div class="card-block text-center">
									<h4 class="card-title">Atividades</h4>
									<p class="card-text-ativ"><b>Viagens</b></p>
									<p class="card-text-prop"><b>12</b></p>
								</div>
							</div>							

						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<br />

					<div class="card-deck-wrapper">
						<div class="card-deck">
							<div class="card" style="max-width:420px;">
								<div class="card-block text-center">
									<h4 class="card-title-neg">Propostas</h4>
									<br>
									<p class="card-text-neg">Em Elaboração<b class="valor-neg"> R$27.0000,00</b></p>
									<hr>
									<p class="card-text-neg">Suspenso<b class="valor-neg"> R$27.0000,00</b></p>
									<hr>
									<p class="card-text-neg">Cancelado<b class="valor-neg"> R$27.0000,00</b></p>
									<hr>
									<p class="card-text-neg">Entregue<b class="valor-neg"> R$27.0000,00</b></p>
									<hr>
									<p class="card-text-neg">Perdidos<b class="valor-neg"> R$27.0000,00</b></p>	
									<hr>
									<p class="card-text-neg">Vendidos<b class="valor-neg"> R$27.0000,00</b></p>	
									<hr>
									<p class="card-text-neg">Declinados<b class="valor-neg"> R$27.0000,00</b></p>										
								</div>
							</div>
							<div class="card" style="max-width:385px;">
								<div class="card-block text-center">
									<h4 class="card-title-neg">Budget</h4>
									<br>
									<p class="card-text-neg">Em Elaboração<b class="valor-neg"> R$27.0000,00</b></p>
									<hr>
									<p class="card-text-neg">Suspenso<b class="valor-neg"> R$27.0000,00</b></p>
									<hr>
									<p class="card-text-neg">Cancelado<b class="valor-neg"> R$27.0000,00</b></p>
									<hr>
									<p class="card-text-neg">Entregue<b class="valor-neg"> R$27.0000,00</b></p>
									<hr>
									<p class="card-text-neg">Perdidos<b class="valor-neg"> R$27.0000,00</b></p>	
									<hr>
									<p class="card-text-neg">Vendidos<b class="valor-neg"> R$27.0000,00</b></p>	
									<hr>
									<p class="card-text-neg">Declinados<b class="valor-neg"> R$27.0000,00</b></p>		
								</div>
							</div>	
							<div class="card" style="max-width:235px;">
								<div class="card-block text-center">
									<h4 class="card-title-neg">Total de Propostas</h4>
									<br>
									<p class="card-text-neg">Diário <b class="valor-neg"> R$10000.000</b></p>
									<hr>
									<p class="card-text-neg">Mensal <b class="valor-neg"> R$10000.000</b></p>
									<hr>	
									<p class="card-text-neg">Anual <b class="valor-neg">R$10000.000</b></p>
									<hr>										
								</div>
							</div>									
						</div>
					</div>
				</div>
			</div>   
			<hr>
		  <footer>
			<p>&copy; 2017 Company, Inc.</p>
		  </footer>
		</div> <!-- /container -->
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>