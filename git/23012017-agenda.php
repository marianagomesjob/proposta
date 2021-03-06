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
		<br>
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">Agendar Atividade</div>
				<div class="panel-body">
					<form class="form-horizontal" action="salvar_agenda.php" method="POST">
						<div class="form-group">
						  <label class="control-label col-sm-2" for="Atdd">Atividade</label>
							<div class="col-sm-4">
								<select class="form-control" id="agenda_atividade" name="agenda_atividade">
									<option>Selecione</option>
									<option value="Ligar">Ligar</option>
									<option value="Reunião">Reunião</option>
									<option value="Tarefa">Tarefa</option>
									<option value="E-mail">E-mail</option>
									<option value="Almoço">Almoço</option>
									<option value="Viagem">Viagem</option>
								</select>
							</div>
						  
						  <label class="control-label col-sm-2" for="tlo">Titulo</label>
						  <div class="col-sm-4">
							<input type="text" class="form-control" id="agenda_titulo" name="agenda_titulo" placeholder="">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="dt">Data</label>
							<div class="col-sm-4">
								<input type="date" class="form-control" id="agenda_data" name="agenda_data" placeholder="">
							</div>
							
							
						  <label class="control-label col-sm-2" for="drc">Duração</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="agenda_duracao" name="agenda_duracao" placeholder="">
							</div>					  

						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="atrib">Atribuído a </label>
							<div class="col-sm-4">
								<select class="form-control" id="resp_tec" name="agenda_atribuido" >
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
									<textarea class="form-control" rows="3" id="agenda_nota" name="agenda_nota"></textarea>
								</div>
						</div>	
						<div class="form-group">        
							<div class="col-sm-offset-2 col-sm-10">
								<input type="hidden" name="acao" value="salvar" />
								<input type="submit" name="acao" class="btn btn-success" value="Salvar"> </button>
								<input type="reset" class="btn btn-danger" value="Cancelar"></button>
							</div>
						</div>						
						

				</div>
			</div>
			<div class="panel panel-default">
			  <div class="panel-heading">Históricos da Agenda</div>
				  <div class="panel-body">
					<form class="form-horizontal" action="" method="POST">
						<table class="table table-striped">
						<thead>
						  <tr>
							<th>Proposta</th>
							<th>Atividade</th>
							<th>Título</th>							
							<th>Data</th>
							<th>Duração</th>
							<th>Atribuído</th>
							<th>Atribuído</th>
						  </tr>
						</thead>
						<tbody>
					        <?php
					        	//$sql-> Consulta trazendo várias linhas de dados.
								//$result-> transforma o resultado do sql e guarda o retorno na variável resultado
								$sql="SELECT * FROM enfil_agenda";
								$result = mysqli_query($conn, $sql);

								//cria uma variável php para ultilizar cada dado vindo do array de campos 
								//transforma o resultado (select) do sql e guarda o retorno na variável resultado
								while ($linha = mysqli_fetch_array($result)) {
									$id_usuario = $linha['id_agenda'];
									$agenda_vinculo_prop = $linha['agenda_vinculo_prop'];
									$agenda_atividade = $linha['agenda_atividade'];
									$agenda_titulo = $linha['agenda_titulo'];
									$agenda_data = $linha['agenda_data'];
									$agenda_duracao = $linha['agenda_duracao'];
									$agenda_atribuido = $linha['agenda_atribuido'];



									echo "<tr>
											<td>$agenda_vinculo_prop</td>
											<td>$agenda_atividade</td>
											<td>$agenda_titulo</td>
											<td>$agenda_data</td>
											<td>$agenda_duracao</td>
											<td>$agenda_atribuido</td>
											<td><a href='#'>Detalhes|</a>
											<a href='#'>Editar</a></td>
										</tr>";
								}
					        ?>
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
