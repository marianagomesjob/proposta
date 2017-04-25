<?php

//Arquivo de conexao
include_once 'conexao.php';
include_once 'dbconfig.php';

if(isset($_GET['edit_id']))
{
	$sql_query="SELECT * FROM enfil_agenda WHERE id_agenda=".$_GET['edit_id'];
	$result_set=mysql_query($sql_query);
	$fetched_row=mysql_fetch_array($result_set);
}

$opcoes_atividade = array(
	'Ligar'   => 'Ligar',
	'Tarefa'  => 'Tarefa',
	'E-mail'  => 'E-mail',
	'Almoço'  => 'Almoço',
	'Viagem'  => 'Viagem',
);

if(isset($_POST['btn-update']))
{
	// Variaveis para input
	$agenda_atividade = $_POST['agenda_atividade'];
	$agenda_titulo = $_POST['agenda_titulo'];
	$agenda_data = $_POST['agenda_data'];
	$agenda_duracao = $_POST['agenda_duracao'];
	$agenda_atribuido = $_POST['agenda_atribuido'];
	$agenda_nota = $_POST['agenda_nota'];


	// Variaveis para input
	
	// sql query para update inserir no BD
	$sql_query = "UPDATE enfil_agenda SET agenda_atividade='$agenda_atividade',	agenda_titulo='$agenda_titulo',	agenda_data='$agenda_data',	agenda_duracao='$agenda_duracao',agenda_atribuido='$agenda_atribuido',agenda_nota='$agenda_nota' WHERE id_agenda=".$_GET['edit_id'];
	// sql query for update data into database
	
	// sql query excuta funcao
	if(mysql_query($sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Registros modificados com sucesso');
		window.location.href='agenda.php';
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
	header("Location: agenda.php");
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
				<div class="panel-heading">Agendar Atividade</div>
				<div class="panel-body">
					<form class="form-horizontal" method="POST">
						<div class="form-group">
						  <label class="control-label col-sm-2" for="Atdd">Atividade</label>
							<div class="col-sm-4">
								<select class="form-control" id="agenda_atividade" name="agenda_atividade">
									<option>Selecione</option>
									<?php foreach( $opcoes_atividade as $key => $atividade ): ?>
										<option value="<?php echo $atividade ?>"<?php if($key == $fetched_row['agenda_atividade'] ){ echo ( "selected='selected'");} ?>>"
											<?php echo $atividade ?>
										</option>
									<?php endforeach;?>
									
								</select>
							</div>
						  
						  <label class="control-label col-sm-2" for="tlo">Titulo</label>
						  <div class="col-sm-4">
							<input type="text" class="form-control" id="agenda_titulo" name="agenda_titulo" placeholder="" value="<?php echo $fetched_row['agenda_titulo']; ?>" required />
						  </div>
						</div>

						<div class="form-group">
						  <label class="control-label col-sm-2" for="dt">Data</label>
							<div class="col-sm-4">
								<input type="date" class="form-control" id="agenda_data" name="agenda_data" placeholder="" value="<?php echo $fetched_row['agenda_data']; ?>" required />
							</div>
						
						  <label class="control-label col-sm-2" for="drc">Duração</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="agenda_duracao" name="agenda_duracao" placeholder="" value="<?php echo $fetched_row['agenda_duracao']; ?>" required />
							</div>					  

							</div>
					
						<div class="form-group">
						  <label class="control-label col-sm-2" for="atrib">Atribuído a </label>
							<div class="col-sm-4">
								<select class="form-control" id="resp_tec" name="agenda_atribuido"  />
									<option value="">Selecione</option>
					                    <?php
					                   	$result = mysqli_query($conn, 'SELECT id_usuario, nome  FROM enfil_usuario');
					                    while ($row = mysqli_fetch_assoc($result)) {
					                        echo "<option value='$row[nome]'>$row[nome]</option>";
					                    }
					                    ?>
								</select>

							</div>
						
							<label class="control-label col-sm-2" for="vprop">Vincular a Proposta</label>
							<div class="col-sm-4">
								<div id="custom-search-input">
									<div class="input-group col-sm-12">
									<input type="text" class="  search-query form-control" name="agenda_vinculo_prop" placeholder=" Buscar" />
											<span class="input-group-btn">
												<button class="btn btn-danger" type="button">
													<span class=" glyphicon glyphicon-search"></span>
												</button>
											</span>
									</div>							
								</div>
							</div>					  

						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="nt">Nota</label>
								<div class="col-sm-10">
									<textarea class="form-control" rows="3" id="agenda_nota" name="agenda_nota" required/><?php echo $fetched_row["agenda_nota"]?></textarea>
								</div>
						</div>	
						<div class="form-group">        
							<div class="col-sm-offset-2 col-sm-10">
								<input type="hidden" name="acao" value="salvar" />
  								<button type="submit" name="btn-update" class="btn btn-success">Alterar</button>
   								<button type="submit" name="btn-cancel" class="btn btn-danger">Cancelar</button>							
							</div>
						</div>						
						

				</div>
			</div>
		  	<footer>
				<p>&copy; <?php echo ( date('Y') ); ?> Company, Inc.</p>
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
