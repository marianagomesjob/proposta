<?php 
	include_once "app/conexao.php"
?>

<!DOCTYPE html>
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

   	<body>
		<?php 
			include_once "header.php"
		?>
		<br>
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

			  <a class="navbar-brand" href="index2.html"><img src="enfil.png" class="enfil" width="150px" height="60px"></a>
			  
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="index2.html"> <span class="glyphicon glyphicon-usd"></span> Propostas</a></li>
					<li><a href="agenda.html"><span class="glyphicon glyphicon-book"></span> Agenda</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Contato <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="pessoa.html"><span class="glyphicon glyphicon-user"></span> Pessoa</a></li>
							<li><a href="clientes.html"><span class="glyphicon glyphicon-briefcase"></span> Clientes</a></li>
					  </ul>
					</li>
					<li class="dropdown">
					  <a href="analisebi.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<span class="glyphicon glyphicon-piggy-bank"></span> Análise BI <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="#">Empresa</a></li>
						<li><a href="#">Pessoal</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Painel ao vivo</a></li>
					  </ul>
					</li>
					
				
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
						Olá! Mariana Gomes <b class="caret"></b>
					  </a>
					  <ul class="dropdown-menu">
						<li><a href="#">Administrativo</a></li>

						<li class="divider"></li>
						<li><a href="#">Sair</a></li>
					  </ul>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
		  </div>
		</nav>

		<div class="container">

			<form class="form-horizontal" action="" method="POST">
				<div class="row">
	    			<div class="col-sm-12">
				    	One of three columns
				    </div>
	  			</div>

	  			<div class="row">
	    			<div class="col-sm-12">
				    	One of three columns
				    </div>
	  			</div>
			</form>
	 
		  <footer>
			<p>&copy; 2016 Company, Inc.</p>
		  </footer>
		</div> <!-- /container -->


	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
