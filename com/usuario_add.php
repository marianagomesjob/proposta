<?php 
	include_once "conexao.php"
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
			<h1>Cadastrar Usuários</h1>
			<hr>
		</div>

		<div class="container">
			<form class="form-horizontal" action="usuario_salvar.php" method="POST">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="form-group">
							<label class="control-label col-sm-1">Nome</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="Nome" name="nome" placeholder="">
							</div>					 

							
							<label class="control-label col-sm-2">Usuario</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="usuario" name="usuario" placeholder="">
							</div>	
						</div>
						<div class="form-group">
							<label class="control-label col-sm-1">E-mail</label>
							<div class="col-sm-4">
								<input type="email" class="form-control" id="email" name="email" placeholder="">
							</div>					 

						
							<label class="control-label col-sm-2">Data de Nascimento:</label>
							<div class="col-sm-4">
								<input type="date" class="form-control" id="datanasc" name="datanasc" placeholder="">
							</div>	
						</div>	
						<hr>					
						<div class="form-group">
							<label class="control-label col-sm-1">Ramal</label>
							<div class="col-sm-1">
								<input type="text" class="form-control" id="ramal" name="ramal" placeholder="">
							</div>					 

						
							<label class="control-label col-sm-2">Telefone Comercial</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" id="tel_com" name="tel_com" placeholder="">
							</div>	

							<label class="control-label col-sm-2">Telefone Celular</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" id="tel_cel" name="tel_cel" placeholder="">
							</div>					 

						</div>						
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-body">
					<p>Cadastro Departamento e Cargo</p>
						<div class="form-group">
						
							<label class="control-label col-sm-2" for="email">Departamento </label>
								<div class="col-sm-2">
									<select class="form-control" id="departamento" name="departamento">
										<option>Selecione</option>
											<option>TI</option>
											<option>Comercial</option>									
											<option>Contratos</option>
											<option>Financeiro</option>
									</select>
								</div>
								<label class="control-label col-sm-1" for="cargo">Cargo </label>
								<div class="col-sm-2">
									<select class="form-control" id="cargo" name="cargo">
										<option>Selecione</option>
											<option>Diretoria</option>
											<option>Gerente</option>									
											<option>Supervisor</option>
											<option>Analista</option>
									</select>
								</div>						
								<label class="control-label col-sm-1" for="status">Status</label>
								<div class="col-sm-2">
									<select class="form-control"  name="status">
										<option >Selecione</option>
										<option value="Ativo">Ativo</option>
										<option value="Inativo">Inativo</option>
									</select>
								</div>	
						</div>
				
					</div>
				</div>
				
				<h4>Perfil de Acesso</h4>
				<hr>
				<div class="panel panel-default">
					<div class="panel-body">
					<p>Status do usuário</p>

						<p>Permissão de Acesso</p>
						<div class="form-group">
							<div class="checkbox">

								<label class="control-label col-sm-2"><input type="checkbox" name="perfil[]" value="Analista"> Analista</label>
								<label class="control-label col-sm-2"><input type="checkbox" name="perfil[]" value="Comercial"> Comercial</label>
								<label class="control-label col-sm-2"><input type="checkbox" name="perfil[]" value="Engenharia"> Engenharia</label>
								<label class="control-label col-sm-2"><input type="checkbox" name="perfil[]" value="Diretoria"> Diretoria</label>
							</div>
						</div>							
					</div>
					<div class="form-group">        
						<div class="col-sm-offset-5 col-sm-4">
							<input type="hidden" name="acao" value="salvar" />
							<input type="submit" name="acao" class="btn btn-primary" value="Salvar"> </button>
							<a href="usuario.php" class="btn btn-danger">Cancelar</a>
						</div>
					</div>

				</div>
			</form>

			

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
