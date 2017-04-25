<?php 
	//Inserindo o arquivo de conexão 
	include_once ("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt">
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
					<form class="form-horizontal" action="salvar_clientes.php" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-2" for="cliente_empres">Empresa</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="cliente_empresa" name="cliente_empresa" placeholder="">
							</div>					 

						
							<label class="control-label col-sm-2" for="cliente_telefon">Telefone</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="cliente_telefone" name="cliente_telefone" placeholder="">
							</div>	
						</div>
						

						<div class="form-group">
							<label class="control-label col-sm-2" for="email">E-mail</label>
							<div class="col-sm-4">
								<input type="email" class="form-control" id="cliente_email" name="cliente_email" placeholder="">
							</div>
							
							
							<label class="control-label col-sm-2" for="cliente_resp">Responsável</label>
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
								<select class="form-control" id="resp_tec" name="cliente_atribuido" >
									<option value="">Selecione</option>
					                    <?php
					                   	$result = mysqli_query($conn, 'SELECT id_usuario, nome  FROM enfil_usuario');
					                    while ($row = mysqli_fetch_assoc($result)) {
					                        echo "<option value='$row[nome]'>$row[nome]</option>";
					                    }
					                    ?>
								</select>
							</div>
						</div>
						<div class="form-group">        
						  <div class="col-sm-offset-2 col-sm-10">
								<input type="hidden" name="acao" value="salvar" />
								<input type="submit" name="acao" class="btn btn-success" value="Salvar"> </button>
								<a class="btn btn-danger" href="clientes.php" role="button">Cancelar</a>
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