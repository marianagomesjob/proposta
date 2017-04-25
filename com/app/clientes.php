<?php include_once "conexao.php" ?>

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
				<div class="panel-heading">Adicionar Clientes </div>
				<div class="panel-body">
					<form class="form-horizontal" action="salvar_cliente.php" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-2" for="empre">Empresa</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="empresa" name="cliente_empresa" placeholder="">
							</div>					 

						
							<label class="control-label col-sm-2" for="tl">Telefone</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="cliente_telefone" name="cliente_telefone"  placeholder="">
							</div>	
						</div>
						

						<div class="form-group">
							<label class="control-label col-sm-2" for="em">E-mail</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="cliente_email" name="cliente_email" placeholder="">
							</div>
							
							
							<label class="control-label col-sm-2" for="resp">Responsável</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="cliente_responsa" name="cliente_responsa" placeholder="">
							</div>					  
						</div>

						
						<div class="form-group">
							<label class="control-label col-sm-2" for="end">Endereço</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="cliente_endereco" name="cliente_endereco" placeholder="">
							</div>
				  
					
						  <label class="control-label col-sm-2" for="atrib">Atribuído a </label>
							<div class="col-sm-4">
								<select class="form-control" id="atrib" name="cliente_atribuido" >
									<option value="">Selecione</option>
					                    <?php
					                   	$result = mysqli_query($conn, 'SELECT id_usuario, nome  FROM enfil_usuario');
					                    while ($row = mysqli_fetch_assoc($result)) {
					                        echo "<option value='$row[id_usuario]'>$row[nome]</option>";
					                    }
					                    ?>
								</select>
							</div>
						</div>
						<div class="form-group">        
						  <div class="col-sm-offset-2 col-sm-10">
								<input type="hidden" name="acao" value="salvar" />
								<input type="submit" name="acao" class="btn btn-success" value="Salvar"> </button>
								<input type="reset" class="btn btn-danger" value="Cancelar"></button>						  
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
								<th>Empresa</th>
								<th>Telefone</th>
								<th>E-mail</th>
								<th>Responsável</th>
								<th>Endereço</th>
								<th>Atribuído</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Andressa Lima</td>
								<td>(11)4444-4444</td>
								<td>andressa@lima.com.br</td>
								<td>Camila Lian</td>
								<td>Rua vegas,127 vila olimpia</td>
								<td>Mariana Gomes</td>
								<td><a href"#">Excluir/ativar</a></td>
								
							</tr>
							<tr>
								<td>Carla Lima</td>
								<td>(11)4444-4444</td>
								<td>carla@lima.com.br</td>
								<td>Camila Lian</td>
								<td>Rua vegas,127 vila olimpia</td>
								<td>Mariana Gomes</td>
								<td><a href"#">Excluir/ativar</a></td>
							</tr>
							<tr>
								<td>Carla Lima</td>
								<td>(11)4444-4444</td>
								<td>carla@lima.com.br</td>
								<td>Camila Lian</td>
								<td>Rua vegas,127 vila olimpia</td>
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