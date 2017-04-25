<?php 
	//Inserindo o arquivo de conexão 
	include_once ("conexao.php");
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
			include_once "header.php";
		?>

		<div class="container">

			<h2>Aprovação de Proposta</h2>
			<hr>

			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-12">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Código</th>
										<th>Cliente</th>
										<th>Fornecimento</th>
										<th>Resp.Com</th>
										<th>Resp.Téc</th>
										<th>Status</th>
										<th></th>

										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>teste</td>
										<td>teste</td>
										<td>teste</td>
										<td>teste</td>
										<td>teste</td>
										<td>teste</td>
										<td>aprovar</td>
										<td>cancelar</td>


									</tr>	
								</tbody>
							</table>
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
