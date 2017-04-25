<html lang="en">
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
	<script src="assets/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</head>
		<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-static-top">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>

			  <a class="navbar-brand" href="index2.php"><img src="assets/img/enfil.png" class="enfil" width="150px" height="60px"></a>
			  
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-briefcase"></span> Propostas <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="analise_aprov.php">Aprovação Análise</a></li>
							<li><a href="analise_lc.php">Filtrar proposta</a></li>
					  </ul>
					</li>				
					<li><a href="budget.php"><span class="glyphicon glyphicon-usd"></span> Budget</a></li>
					<li><a href="agenda.php"><span class="glyphicon glyphicon-book"></span> Agenda</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-search"></span> Programação de Propostas</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Contato <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="pessoa.php"> Pessoa</a></li>
							<li><a href="clientes.php"> Clientes</a></li>
					  </ul>
					</li>
					<li class="dropdown">
					  <a href="analisebi.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-line-chart" aria-hidden="true"></i> Análise BI <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="analisebi_empresa.php">Empresa</a></li>
						<li><a href="#">Pessoal</a></li>
						<li><a href="analisebi_panielvivo.php">Painel ao vivo</a></li>
						<li role="separator" class="divider"></li>

						<li><a href="#">Propostas Finalizadas</a></li>
						<li><a href="#">Budget Finalizado</a></li>
					  </ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Olá! Mariana Gomes <b class="caret"></b>
					  </a>
					  <ul class="dropdown-menu">
						<li><a href="usuario.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuários</a></li>
						<li class="divider"></li>
						<li><a href="sair.php" >Sair</a></li>
					  </ul>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
		  </div>
		</nav>
</html>