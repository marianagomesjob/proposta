<?php

//Arquivo de conexao
include_once 'conexao.php';
include_once 'dbconfig.php';

if(isset($_GET['edit_id']))
{
	$sql_query="SELECT * FROM enfil_cliente WHERE id_cliente=".$_GET['edit_id'];
	$result_set=mysql_query($sql_query);
	$cliente_row=mysql_fetch_array($result_set);
}

if(isset($_POST['btn-update']))
{
	// Variaveis para input
	$cliente_empresa=$_POST['cliente_empresa'];
	$cliente_telefone=$_POST['cliente_telefone'];
	$cliente_email=$_POST['cliente_email'];
	$cliente_responsa=$_POST['cliente_responsa'];
	$cliente_endereco=$_POST['cliente_endereco'];
	$cliente_atribuido=$_POST['cliente_atribuido'];

	// Variaveis para input
	
	// sql query para update inserir no BD
	$sql_query = "UPDATE enfil_cliente  SET  cliente_empresa='$cliente_empresa',cliente_telefone='$cliente_telefone',cliente_email='$cliente_email',cliente_responsa='$cliente_responsa',cliente_endereco='$cliente_endereco',cliente_atribuido='$cliente_atribuido' WHERE id_cliente=".$_GET['edit_id'];
	// sql query for update data into database
	
	// sql query excuta funcao
	if(mysql_query($sql_query))
	{
	?>
		<script type="text/javascript">
		alert('Registros modificados com sucesso');
		window.location.href='clientes.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('erro ao realizar a atualização');
		</script>
		<?php
	}
	// sql query excuta funcao
}
if(isset($_POST['btn-cancel']))
{
	header("Location: clientes.php");
}
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
					<form class="form-horizontal" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-2" for="cliente_empres">Empresa</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="cliente_empresa" name="cliente_empresa" placeholder="" value="<?php echo $cliente_row['cliente_empresa']; ?>" required />
							</div>					 

						
							<label class="control-label col-sm-2" for="cliente_telefon">Telefone</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="cliente_telefone" name="cliente_telefone" placeholder="" value="<?php echo $cliente_row['cliente_telefone']; ?>" required />
							</div>	
						</div>
						

						<div class="form-group">
							<label class="control-label col-sm-2" for="email">E-mail</label>
							<div class="col-sm-4">
								<input type="email" class="form-control" id="cliente_email" name="cliente_email" placeholder="" value="<?php echo $cliente_row['cliente_email']; ?>" required />
							</div>
							
							
							<label class="control-label col-sm-2" for="cliente_resp">Responsável</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="cliente_responsa" name="cliente_responsa" placeholder="" value="<?php echo $cliente_row['cliente_responsa']; ?>" required />
							</div>					  
						</div>

						
						<div class="form-group">
							<label class="control-label col-sm-2" for="end">Endereço</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="cliente_endereco" name="cliente_endereco" placeholder="" value="<?php echo $cliente_row['cliente_endereco']; ?>" required />
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
								<div class="form-group">        
									<div class="col-sm-offset-2 col-sm-10">
										<input type="hidden" name="acao" value="salvar" />
										<button type="submit" name="btn-update" class="btn btn-success">Alterar</button>
										<button type="submit" name="btn-cancel" class="btn btn-danger">Cancelar</button>							
									</div>
								</div>	
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