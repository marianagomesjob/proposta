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
				<div class="panel-heading">Cadastro de usuário</div>
				<div class="panel-body">
					<form class="form-horizontal" action="" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-2" for="Nome">Nome</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="Nome" placeholder="">
							</div>					 

						
							<label class="control-label col-sm-2" for="Login">Login</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="email" placeholder="">
							</div>	
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="email">E-mail</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="email" placeholder="">
							</div>					 

						
							<label class="control-label col-sm-2" for="datanasc">Data de Nascimento:</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="datanasc" placeholder="">
							</div>	
						</div>	
						<hr>					
						<div class="form-group">
							<label class="control-label col-sm-2" for="ramal">Ramal</label>
							<div class="col-sm-1">
								<input type="text" class="form-control" id="ramal" placeholder="">
							</div>					 

						
							<label class="control-label col-sm-2" for="">Telefone Comercial</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="" placeholder="">
							</div>	

							<label class="control-label col-sm-2" for="ramal">Telefone Celular</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="ramal" placeholder="">
							</div>					 

						</div>
						<hr>	
						
						<div class="form-group">
												
						  <label class="control-label col-sm-2" for="email">Departamento </label>
							<div class="col-sm-4">
								<select class="form-control" id="sel1">
									<option>Selecione</option>
										<option>TI</option>
										<option>Comercial</option>									
										<option>Contratos</option>
										<option>Financeiro</option>
								</select>
							</div>
							<label class="control-label col-sm-2" for="email">Setor </label>
							<div class="col-sm-4">
								<select class="form-control" id="sel1">
									<option>Selecione</option>
										<option>Diretoria</option>
										<option>Gerente</option>									
										<option>Supervisor</option>
										<option>Analista</option>
								</select>
							</div>						
				 

						</div>											
					</form>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">Perfil de Acesso</div>
				<div class="panel-body">
					<form class="form-horizontal" action="" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-3" for="Nome">Analista </label>
								<div class="checkbox">
									<label><input type="checkbox" value=""></label>
								</div>				 

						
							<label class="control-label col-sm-3" for="Nome">Comercial </label>
								<div class="checkbox">
									<label><input type="checkbox" value=""> </label>
								</div>				 

							<label class="control-label col-sm-3" for="Nome">Diretoria </label>
							<div class="checkbox">
							  <label><input type="checkbox" value=""> </label>
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
