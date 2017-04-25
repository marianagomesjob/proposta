<!--Conexão com o banco de dados-->
<?php include_once "conexao.php" ?>
<html lang="pt">
  	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<META NAME="LANGUAGE" CONTENT="PT" >
    	<meta name="description" content="">
   	 	<meta name="author" content="">
		<!--Links-->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
		<link rel="stylesheet" href="assets/css/estilo.css" type="text/css">
		<link href="assets/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<script src="assets/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="assets/js/jquery.js" type="text/javascript"></script>
		<script src="assets/js/jquery.maskedinput.js" type="text/javascript"></script>


  	</head>

    <body>
 		<?php 
			include_once "header.php"
		?>  
	
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading"><h3>Budget</h3></div>
					<div class="panel-body">
						<form class="form-horizontal" action="budget_salvar.php" method="POST">
							<div class="form-group">
							  <label class="control-label col-sm-2" for="">Empresa:</label>
								<div class="col-sm-4">
									<select class="form-control" id="budget_empresa" name="budget_empresa">
										<option value="">Selecione</option>
										<option value="ECA">ECA</option>
										<option value="ARG">ARG</option>
										<option value="CAL">CAL</option>
									</select>
								</div>
								<!---->
							 	<label class="control-label col-sm-1" for="email">Segmento:</label>
								<div class="col-sm-4">
									<select class="form-control" id="budget_segmento" name="budget_segmento">
										<option>Selecione</option>
										<option value="Bebidas e Sucos" >Bebidas e Sucos</option>
										<option value="Utilidade Pública (geral)">Utilidade Pública (geral)</option>
										<option value="Siderurgia/Metalurgia">Siderurgia/Metalurgia</option>
										<option value="Utilidade Pública (Saneamento)">Utilidade Pública (Saneamento)</option>
										<option value="Papel e Celulose">Papel e Celulose</option>
										<option value="Extrativa de Petróleo / Petroquímica">Extrativa de Petróleo / Petroquímica</option>
										<option value="Extrativa e Tratamento de Minerais">Extrativa e Tratamento de Minerais</option>
										<option value="Alimentos (incluindo Frigorífico e agroindústria)">Alimentos (incluindo Frigorífico e agroindústria)</option>
										<option value="Metal / Mecânica">Metal / Mecânica</option>
										<option value="Cimenteira">Cimenteira</option>
										<option value="Fertilizantes">Fertilizantes</option>
										<option value="Química / Farmacêutica">Química / Farmacêutica</option>
										<option value="Geração e distribuição de energia">Geração e distribuição de energia</option>
										<option value="Outros">Outros</option>
									</select>
								</div>								
							</div>


							<div class="form-group">
								<label class="control-label col-sm-2" for="">Nº Processo</label>
									<div class="col-sm-3">
									<input type="text" class="form-control" id="budget_num_processo" name="budget_num_processo" placeholder="">
								</div>	

							  <label class="control-label col-sm-2" for="">Cliente</label>
								<div class="col-sm-4">
									<input type="text" class="form-control" id="budget_cliente" name="budget_cliente" placeholder="">
								</div>	
							</div>
							<div class="form-group">  
							  <label class="control-label col-sm-2" for="">Assunto</label>
								<div class="col-sm-9">
									<textarea class="form-control" rows="2" id="budget_assunto" name="budget_assunto"></textarea>
								</div>
							</div><!-- /group-2 -->

   
								<div class="col-sm-offset-2 col-sm-10">
									<input type="hidden" name="acao" value="salvar" />
									<input type="submit" name="acao" class="btn btn-success" value="Salvar"> </button>
									<input type="reset" class="btn btn-danger" value="Cancelar"></button>
								</div>
							</div><!-- /groupBotões-->		
						</form>
					</div><!-- /body -->
			</div><!-- /default -->

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


