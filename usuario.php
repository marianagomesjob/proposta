<?php 
  //Arquivo de conexão 
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
			include_once "header.php"
		?>
	

		<div class="container">
			<h1>Usuários</h1>
			<hr>
			<form method="POST" action="usuario_pesquisa.php">
				<div class="col-sm-2">
					<a href="usuario_add.php" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Usuário</a>
				</div>
				
				<div class="col-sm-8">
					<div class="input-group">
						<input type="text"  class="form-control" name="pesquisa" placeholder="Pesquisar prosposta">
						<span class="input-group-btn">
							<input type="submit" class="btn btn-default" value="Buscar">
						</span>					
					</div>
				</div>
			</form>		
		
		</div>
		<br>
		
		
		<div class="container">
			<h2>Lista de usuários</h2>
			<hr>		
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Nome</th>
								<th>Usuário</th>
								<th>Email</th>
								<th>Ação</th>
							</tr>
						</thead>
						<tbody>	
								
								
						<?php
							//$sql-> Consulta trazendo várias linhas de dados.
							//$result-> transforma o resultado do sql e guarda o retorno na variável resultado
							$sql="SELECT * FROM enfil_usuario";
							$result = mysqli_query($conn, $sql);

							//cria uma variável php para ultilizar cada dado vindo do array de campos 
							//transforma o resultado (select) do sql e guarda o retorno na variável resultado
							while ($linha = mysqli_fetch_array($result)) {
								$id_usuario = $linha['id_usuario'];
								$nome = $linha['nome'];
								$usuario = $linha['usuario'];
								$email = $linha['email'];

								echo "<tr>
										<td>$nome</td>
										<td>$usuario</td>
										<td>$email</td>
										<td>
											<a href='usuario_detalhe.php' class='btn btn-default btn-sm'><span class='glyphicon glyphicon-info-sign' aria-hidden='true'></span></a>
											<a href='usuario_editar.php' class='btn btn-default btn-sm'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>
										</td>
									</tr>";
							}
						?>
						</tbody>
					</table>				
				</div>
			</div>
			

			<footer>
				<p>&copy; 2017 Company, Inc.</p>
			</footer>			
		</div>

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