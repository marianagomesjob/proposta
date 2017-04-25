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
			<div class="panel panel-default">
				<div class="panel-heading">Adicionar Pessoas </div>
				<div class="panel-body">
					<form class="form-horizontal" action="" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-2" for="email">Nome</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="email" placeholder="">
							</div>					 

							<label class="control-label col-sm-2" for="email">Tipo de contato</label>
							<div class="col-sm-4">
								<select class="form-control" id="sel1">
									<option>Selecione</option>
									<option>Trabalho</option>
									<option>Casa</option>
									<option>Celular</option>
									<option>Outros</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="email">E-mail</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="email" placeholder="">
							</div>
							
							
							<label class="control-label col-sm-2" for="email">Cliente</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="email" placeholder="">
							</div>					  
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="email">Telefone</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="email" placeholder="">
							</div>
				  
					
						  <label class="control-label col-sm-2" for="email">Atribuído a </label>
							<div class="col-sm-4">
								<select class="form-control" id="sel1">
									<option>Selecione</option>
										<option>Allan Freitas</option>
										<option>Carlos Espinola</option>									
										<option>Mariana Gomes</option>
										<option>Rodrigo Fonseca</option>
										
								</select>
							</div>
				  

						</div>
						<div class="form-group">        
						  <div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-success"><i class="fa fa-cloud-upload"></i> Salvar </button>
							<button type="submit" class="btn btn-danger">Cancelar</button>
						  </div>
						</div>						
					</form>
				</div>
			</div>
			<div class="panel panel-default">
			  <div class="panel-heading">Histórico de Contatos</div>
				  <div class="panel-body">
					<form class="form-horizontal" action="" method="POST">
						<table class="table table-striped">
						<thead>
						  <tr>
							<th>Nome</th>
							<th>Tipo de contato</th>
							<th>E-mail</th>
							<th>Cliente</th>
							<th>Telefone</th>
							<th>Atribuído</th>
							<th>Ações</th>
						  </tr>
						</thead>
						<tbody>
							<tr>
								<td>Andressa Lima</td>
								<td>Trabalho</td>
								<td>andressa@lima.com.br</td>
								<td>Concluído/ A realizar</td>
								<td>11-96666-6666</td>
								<td>Mariana Gomes</td>
								<td><a href"#">Excluir/ativar</a></td>
								
							</tr>
							<tr>
								<td>Carla Lima</td>
								<td>Trabalho</td>
								<td>carla@lima.com.br</td>
								<td>Concluído/ A realizar</td>
								<td>11-96666-3333</td>
								<td>Mariana Gomes</td>
								<td><a href"#">Excluir/ativar</a></td>
								
							</tr>
							<tr>
								<td>Carla Lima</td>
								<td>Trabalho</td>
								<td>carla@lima.com.br</td>
								<td>Concluído/ A realizar</td>
								<td>11-96666-3333</td>
								<td>Mariana Gomes</td>
								<td><a href"#">Excluir/ativar</a></td>
								
							</tr>						
							
						</tbody>
						</table>	
					</form>
				  </div>
			</div>
	 
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
