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
		<div class="container">
			<div class="form-group">
				<div class="col-md-10">
				<!--<a href="add_analise.php" class="btn btn-primary btn" role="button">Adicionar Proposta</a>-->
					<div class="btn-group">
						<a href="add_budget.php" class="btn btn-primary" role="button">Detalhes</a>
					</div>						

				</div>
				<div class="col-md-1">					
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Filtros <span class="caret"></span>
						</button>
						
					<ul class="dropdown-menu">
						<li><a href="#">Négocios com mais de 3 meses</a></li>
						<li><a href="#">Todos os negócios apagados </a></li>
						<li><a href="#">Todos os negócios em aberto</a></li>
						<li><a href="#">Todos os negócios em ganhos </a></li>
						<li><a href="#">Todos os negócios em Perdidos </a></li>
						<li><a href="#">Todos os Orçamentos(Budget)</a></li>
						<li><a href="#">Todos as Propostas</a></li>

					</ul>
					</div>
				</div>					
			</div>
		</div>

		<br>

		<div class="container">
			<!-- Example row of columns -->
			<div class="row">
				<div class="col-sm-12">
				<form class="form-horizontal" action="" method="POST">
					<table class="table table-striped">
					<thead>
					  <tr>
						<th>Em elaboração</th>
						<th>Suspenso</th>
						<th>Cancelado</th>
						<th>Entregue</th>
						<th>Perdidos</th>
						<th>Vendidos</th>
						<th>Declinado</th>
						<th>Ações</th>
					  </tr>
					</thead>
					<tbody>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td>CS-16070-04-L </td>
							<td></td>
							<td></td>
							<td></td>
							<td>
							<a href="view_budget.php" class="btn btn-primary btn-xs" role="button">Detalhes</a>
							</td>
						</tr>
					</tbody>
					</table>	
				</form>				
				</div>
			

		
			</div>
			<hr>
		  <footer>
			<p>&copy; 2016 Company, Inc.</p>
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
