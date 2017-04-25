<?php

//Arquivo de conexao
include_once 'conexao.php';
include_once 'dbconfig.php';

if(isset($_GET['edit_id']))
{
	$sql_query="SELECT * FROM enfil_pessoa WHERE id_pessoa=".$_GET['edit_id'];
	$result_set=mysql_query($sql_query);
	$pessoa_row=mysql_fetch_array($result_set);
}
	$opcoes_contato = array(
		'Trabalho'   => 'Trabalho',
		'Casa'  => 'Casa',
		'Celular'  => 'Celular',
		'E-mail'  => 'E-mail',
		'Skype'  => 'Skype',
		'Outros'  => 'Outros',
	);
if(isset($_POST['btn-update']))
{
	// Variaveis para input
    $pessoa_nome=$_POST['pessoa_nome'];
    $pessoa_tipo_contato=$_POST['pessoa_tipo_contato'];
    $pessoa_email=$_POST['pessoa_email'];
    $pessoa_telefone=$_POST['pessoa_telefone'];
    $pessoa_atribuido=$_POST['pessoa_atribuido'];
    $pessoa_cliente=$_POST['pessoa_cliente'];

	// Variaveis para input
	
	// sql query para update inserir no BD
	$sql_query = "UPDATE enfil_pessoa  SET pessoa_nome='$pessoa_nome',pessoa_tipo_contato='$pessoa_tipo_contato',pessoa_email='$pessoa_email',pessoa_cliente='$pessoa_cliente',pessoa_telefone='$pessoa_telefone',pessoa_atribuido='$pessoa_atribuido' WHERE id_pessoa=".$_GET['edit_id'];
	// sql query for update data into database
	
	// sql query excuta funcao
	if(mysql_query($sql_query))
	{
	?>
		<script type="text/javascript">
		alert('Registros modificados com sucesso');
		window.location.href='pessoa.php';
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
	header("Location: pessoa.php");
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
			include_once "header.php";
		?>
		<br>	
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">Editar Pessoa</div>
				<div class="panel-body">
				
					<form class="form-horizontal" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-2" for="nom">Nome</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="pessoa_nome" name="pessoa_nome" placeholder="" value="<?php echo $pessoa_row['pessoa_nome']; ?>" />
							</div>					 

							<label class="control-label col-sm-2" for="tipo_con">Tipo de contato</label>
							<div class="col-sm-4">
								<select class="form-control" id="pessoa_tipo_contato" name="pessoa_tipo_contato">
									<option>Selecione</option>
									<?php foreach( $opcoes_contato as $key => $contato ): ?>
										<option value="<?php echo $contato ?><?php if($key == $pessoa_row['pessoa_tipo_contato'] ){ echo ( "selected='selected'");} ?>">
											<?php echo $contato ?>
										</option>
									<?php endforeach;?>
								</select>
							</div>
						</div>	
						<div class="form-group">
							<label class="control-label col-sm-2" for="email">Contato</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="pessoa_email" name="pessoa_email" placeholder="" value="<?php echo $pessoa_row['pessoa_email']; ?>" required />
							</div>
							
							
							<label class="control-label col-sm-2" for="clie">Cliente</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="pessoa_cliente" name="pessoa_cliente" placeholder="" value="<?php echo $pessoa_row['pessoa_cliente']; ?>" required />
							</div>					  
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="tel">Telefone</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="email" id="pessoa_telefone" name="pessoa_telefone"  placeholder="" value="<?php echo $pessoa_row['pessoa_telefone']; ?>" required />
							</div>
				  
					
						  <label class="control-label col-sm-2" for="Atrib">Atribuído a </label>
							<div class="col-sm-4">
								<select class="form-control" id="pessoa_atribuido" name="pessoa_atribuido" required/>
									<option value="">Selecione</option>
					                    <?php
					                    //ATENÇÃO- VERIFICAR COMO ALTERA OS REGISTOS QUANDO TEM SELECT OPTION
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
  								<button type="submit" name="btn-update" class="btn btn-success">Alterar</button>
   								<button type="submit" name="btn-cancel" class="btn btn-danger">Cancelar</button>							
							</div>
						</div>		
						
					</form>
				</div>
			</div>
		  	<footer>
				<p>&copy; 2016 Company, Inc.</p>
		  	</footer>		
		</div><!-- /container -->
	
	
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