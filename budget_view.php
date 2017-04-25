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
				<div class="panel-heading">Detalhes - Budget</div>
				<div class="panel-body">
					<form class="form-horizontal" action="" method="POST">
						<div class="form-group">
						  <label class="control-label col-sm-2" for="email">Empresa:</label>
							<div class="col-sm-4">
								<select class="form-control" id="sel1">
									<option>Selecione</option>
									<option>ECA</option>
									<option>ARG</option>
									<option>CAL</option>
								</select>
							</div>
						  <label class="control-label col-sm-2" for="email">Segmento:</label>
							<div class="col-sm-4">
								<select class="form-control" id="sel1">
									<option>Selecione</option>
									<option value="02" >Selecione</option>
									<option value="02" >Bebidas e Sucos</option>
									<option value="02">Utilidade Pública (geral)</option>
									<option value="03">Siderurgia/Metalurgia</option>
									<option value="04">Utilidade Pública (Saneamento)</option>
									<option value="05">Papel e Celulose</option>
									<option value="06">Extrativa de Petróleo / Petroquímica</option>
									<option value="07">Extrativa e Tratamento de Minerais</option>
									<option value="08">Alimentos (incluindo Frigorífico e agroindústria)</option>
									<option value="09">Metal / Mecânica</option>
									<option value="10">Cimenteira</option>
									<option value="11">Fertilizantes</option>
									<option value="12">Química / Farmacêutica</option>
									<option value="13">Geração e distribuição de energia</option>
									<option value="30">Outros</option>
								</select>
							</div>					  

						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="email">Área de Atuação:</label>
							<div class="col-sm-4">
								<select class="form-control" id="sel1">
								<option>Selecione</option>
								<option value="G">GASES</option>
								<option value="L">LÍQUIDOS</option>
								<option value="S">SÓLIDOS</option>
								<option value="C">COGERAÇÃO</option>
								<option value="R">REMEDIAÇÃO</option>
								<option value="X">EPC</option>
								<option value="E">EVAPORADORES</option>
								<option value="M">MONTAGEM</option>
								<option value="P">PARTES E PEÇAS</option>
								<option value="H">REFORMA/MANUTENÇÃO</option>
								<option value="Q">EQUIPAMENTOS</option>
								</select>
							</div>
						  <label class="control-label col-sm-2" for="email" >Nº Processo</label>
							<div class="col-sm-4">
								<input type="email" class="form-control" id="email" placeholder="" readonly>
							</div>				  

						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" for="email">Cliente</label>
							<div class="col-sm-4">
								<input type="email" class="form-control" id="email" placeholder="">
							</div>	
						  
						  <label class="control-label col-sm-2" for="email">Assunto </label>
							<div class="col-sm-4">
								<textarea class="form-control" rows="2" id="comment"></textarea>
							</div>
						</div>	
						<div class="form-group">
						  <label class="control-label col-sm-2" for="email">Responsável Técnico </label>
							<div class="col-sm-4">
								<select class="form-control" id="sel1">
									<option>Selecione</option>
									<option>Mariana Gomes</option>
									<option>Andrea Alves</option>
								</select>
							</div>
						  
						  <label class="control-label col-sm-2" for="email">Responsável Comercial:</label>
							<div class="col-sm-4">
								<select class="form-control" id="sel1">
									<option>Selecione</option>
									<option>Mariana Gomes</option>
									<option>Andrea Alves</option>
								</select>
							</div>
						</div>	
						<div class="form-group">
						  <label class="control-label col-sm-2" for="email">Estimativa Data</label>
							<div class="col-sm-4">
								<input type="email" class="form-control" id="email" placeholder="Escolha a data">
							</div>		
				
						  
						  <label class="control-label col-sm-2" for="email">Valor R$</label>
							<div class="col-sm-4">
								<input type="email" class="form-control" id="email" placeholder="">
							</div>	
							
						</div>
						
						<div class="form-group">
						  <label class="control-label col-sm-2" for="email">Chances:</label>
							<div class="col-sm-4">
								<select class="form-control" id="sel1">
									<option>Selecione</option>
									<option>P1</option>
									<option>P2</option>
									<option>P3</option>
									<option>PI</option>
								</select>
							</div>		
				
						  
						  <label class="control-label col-sm-2" for="email">Data da Compra</label>
							<div class="col-sm-2">
								<select class="form-control" id="sel1">
									<option>Selecione</option>
									<option>Q1</option>
									<option>Q2</option>
									<option>Q3</option>
									<option>Q4</option>
								</select>
							</div>	
							<div class="col-sm-2">
								<select class="form-control" id="sel1">
									<option>Selecione</option>
									<option>2011</option>
									<option>2012</option>
		
									<option>2021</option>
								</select>
							</div>	
							
						</div>	
						<div class="form-group">        
						  <label class="control-label col-sm-3" for="email">Último registro inserido </label>
							<div class="col-sm-4">
								<label class="control-label col-sm-5" for="email">	CS-16070-04-L</label>
							</div>	
						</div>					
						<div class="form-group">        
							<div class="col-sm-offset-2 col-sm-10">
								<!--Quando o usuário realizar o check-in o budget passa a ser prospota(analise critica)-->
							<button type="submit" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i> Check-in </button>
							</div>
						</div>						
					</form>
				</div>
			</div>
			
			<div class="panel panel-default">
			  <div class="panel-heading">Histórico de Atividades </div>
				  <div class="panel-body">
					
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
					<span class="glyphicon glyphicon-plus-sign"></span> Atividades
					</button>

					<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title" id="myModalLabel">Agendar Atividades</h4>
						  </div>
							<div class="modal-body">
								<form>
									<div class="form-group">
									  <label for="recipient-name" class="form-control-label">Selecione atividade</label>
										<select class="form-control" id="sel1">
											<option>Selecione</option>
											<option>Ligar</option>
											<option>Reunião</option>
											<option>Tarefa</option>
											<option>E-mail</option>
											<option>Almoço</option>
										</select>
									</div>
									<div class="form-group">
									  <label for="message-text" class="form-control-label">Título </label>
										<input type="text" class="form-control" id="email" placeholder="">
									</div>
									<div class="form-group">
									  <label for="message-text" class="form-control-label">Data</label>
									  <input type="text" class="form-control" id="email" placeholder="">
									  
									</div>
									<div class="form-group">
									  <label for="message-text" class="form-control-label">Duração</label>
									  <input type="text" class="form-control" id="email" placeholder="">
									</div>	
									<div class="form-group">
										<label for="message-text" class="form-control-label">Atribuído a</label>
										<select class="form-control" id="sel1">
											<option>Selecione</option>
											<option>Allan Freitas</option>
											<option>Carlos Espinola</option>									
											<option>Mariana Gomes</option>
											<option>Rodrigo Fonseca</option>
										
										</select>
									</div>	
									<div class="form-group">
										<label for="message-text" class="form-control-label">Vincular a Proposta</label>
										<div id="custom-search-input">
											<div class="input-group col-sm-12">
												<input type="text" class="  search-query form-control" placeholder=" Buscar" />
													<span class="input-group-btn">
														<button class="btn btn-danger" type="button">
															<span class=" glyphicon glyphicon-search"></span>
														</button>
													</span>
											</div>							
										</div>
									</div>
									<div class="form-group">
										<label for="message-text" class="form-control-label">Nota</label>
											<textarea class="form-control" rows="3" id="comment"></textarea>
									</div>
								</form>
							</div>
						<div class="form-group">        
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i> Check-in</button>
								<button type="submit" class="btn btn-danger">Cancelar</button>
							</div>
						</div>	
						</div>
					  </div>
					</div>
					
					<form class="form-horizontal" action="" method="POST">
						<table class="table table-striped">
						<thead>
						  <tr>
							<th>Proposta</th>
							<th>Atividade</th>
							<th>Atribuído</th>
							<th>Ação</th>
						  </tr>
						</thead>
						<tbody>
							<tr>
								<td>CS-16070-04-L</td>
								<td>Ligação, 12/12/2016 ás 14h duração de 2hs, para ajustar propostas</td>
								<td>Mariana Gomes</td>
								<td><a href="#">Concluído/ A realizar</a></td>
							</tr>
							<tr>
								<td>PR-16070-04-L</td>
								<td>Reunião, 12/12/2016 ás 14h duração de 2hs, para ajustar propostas</td>
								<td>Marta Rocha</td>
								<td><a href="#">Concluído/ A realizar</a></td>
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
