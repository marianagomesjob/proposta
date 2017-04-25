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
		<div id="header">
			<?php 
				include_once "header.php";
			?>	
		</div>
		<div class="container">
			<h1>$ Budget</h1>
			<hr>
			<div class="col-md-1">	
				<a href="budget_add.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Budget</a>
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
		<br>		
	
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-body">
				<!-- Example row of columns -->
			<div class="row">
				<div class="col-sm-12">
					<form class="form-horizontal" action="" method="POST">
					<table class="table table-striped">
						<thead>
							<tr>
								<th id="id_item">#</th>
								<th id="pedido">Budget</th>
								<th id="em_elaboração">Em elaboração</th>
								<th id="suspenso">Suspenso</th>
								<th id="cancelado">Cancelado</th>
								<th id="entregue">Entregue</th>
								<th id="perdidos">Perdidos</th>
								<th id="vendidos">Vendidos</th>
								<th id="declinado">Declinado</th>
								<th id="">Ações</th>
						  	</tr>
						</thead>
						<tbody>
					        <?php
					        	//$sql-> Consulta trazendo várias linhas de dados.
								//$result-> transforma o resultado do sql e guarda o retorno na variável resultado
								$sql="SELECT * FROM enfil_budget";
								$result = mysqli_query($conn, $sql);

								//cria uma variável php para ultilizar cada dado vindo do array de campos 
								//transforma o resultado (select) do sql e guarda o retorno na variável resultado
								while ($linha = mysqli_fetch_array($result)) {
									$id_budget = $linha['id_budget'];
									$budget_num_processo = $linha['budget_num_processo'];
									$budget_status = $linha['budget_status'];
	
									echo "<tr>
											<td>$id_budget</td>
											<td>$budget_num_processo</td>
											<td></td>
											<td>$budget_status</td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td>
											<a href='#' class='btn btn-default btn-sm'><span class='glyphicon glyphicon-info-sign' aria-hidden='true'></span></a>
											<a href='budget_view.php' class='btn btn-default btn-sm'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>
											</td>

										</tr>";
								}
					        ?>							
						</tbody>
					</table>

					</form>				
				</div>				
				</div>
			</div>

			</div>
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
