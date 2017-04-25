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
		<div class="container">
			<h1>Detalhes Análise Critíca</h1>
			<hr>
		</div>
	
		<div class="container">

			<div class="panel panel-default">
				<div class="panel-body">
					<form class="form-horizontal" action="" method="POST">
					
						<div class="form-group">
						  <label class="control-label col-sm-2" >Nº Processo</label>
						  
							<div class="col-sm-4">
								<input type="email" class="form-control" id="num_processo" placeholder="" readonly>
							</div>
						  
						  <label class="control-label col-sm-2" >Cliente:</label>
						  <div class="col-sm-4">
							<input type="email" class="form-control" id="cliente" placeholder="" readonly>
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" >Fornecimento:</label>
							<div class="col-sm-4">
								
								<textarea class="form-control" rows="5" id="Fornecimento" readonly ></textarea>
							</div>
						  <label class="control-label col-sm-2" >Observação:</label>
							<div class="col-sm-4">

								<textarea class="form-control" rows="5" id="observacao" readonly></textarea>
							</div>					  

						</div>
						<div class="form-group">
						  <label class="control-label col-sm-2" >Responsável Técnico:</label>
							<div class="col-sm-4">
								<select class="form-control" id="resp_tec" readonly>
									<option>Selecione</option>
									<option>Mariana Gomes</option>
									<option>Andrea Alves</option>
								</select>
							</div>
						  
						  <label class="control-label col-sm-2" >Responsável Comercial:</label>
							<div class="col-sm-4">
								<select class="form-control" id="resp_com" readonly>
									<option>Selecione</option>
									<option>Mariana Gomes</option>
									<option>Andrea Alves</option>
								</select>
							</div>
						</div>					
					</form>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">Análise Critica - Probabilidade de Vendas?(0-100%)</div>
				<div class="panel-body">
				<h5>*Responda Questões abaixo para enviar análise</h5>
					<form class="form-horizontal" action="" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-4" >Cliente compra nos próximos 12 meses*</label>
							<div class="col-sm-4">
								<label class="radio-inline"><input type="radio" name="optradio">Sim</label>
								<label class="radio-inline"><input type="radio" name="optradio">Não</label>
							</div>
							
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >Valor estimado acima de R$10mm?*</label>
							<div class="col-sm-4">
								<label class="radio-inline"><input type="radio" name="optradio">Sim</label>
								<label class="radio-inline"><input type="radio" name="optradio">Não</label>
							</div>
							
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >Sabemos fazer?*</label>
							<div class="col-sm-4">
								<label class="radio-inline"><input type="radio" name="optradio">Sim</label>
								<label class="radio-inline"><input type="radio" name="optradio">Não</label>
							</div>
							
						</div>
						<div class="form-group">
							<label class="control-label col-sm-4" >O cliente ou o projeto é estratégico?*</label>
							<div class="col-sm-4">
								<label class="radio-inline"><input type="radio" name="optradio">Sim</label>
								<label class="radio-inline"><input type="radio" name="optradio">Não</label>
							</div>
							
						</div>	
						
						<div class="form-group">
							<label class="control-label col-sm-4" >Os riscos para a realização do projeto são gerenciáveis?*</label>
							<div class="col-sm-4">
								<label class="radio-inline"><input type="radio" name="optradio">Sim</label>
								<label class="radio-inline"><input type="radio" name="optradio">Não</label>
							</div>
						</div>						
						<div class="form-group">
							<label class="control-label col-sm-4" >O projeto tem Down Payment e evento de pagamento de engenharia?*</label>
							<div class="col-sm-4">
								<label class="radio-inline"><input type="radio" name="optradio">Sim</label>
								<label class="radio-inline"><input type="radio" name="optradio">Não</label>
							</div>
						</div>
						<div class="form-group">        
						  <label class="control-label col-sm-3" >Último registro inserido </label>
							<div class="col-sm-4">
								<label class="control-label col-sm-5" >	CS-16070-04-L</label>
							</div>	
						</div>	
						<div class="form-group">
						  <label class="control-label col-sm-2" >Status</label>
							<div class="col-sm-4">
								<select class="form-control" id="" readonly>
									<option>Selecione</option>
									<option>Em elaboração</option>
									<option>Suspenso</option>
									<option>Cancelado</option>
									<option>Perdido</option>
									<option>Vendido</option>
									<option>Declinado</option>
								</select>
							</div>
						</div>
						<div class="form-group">        
							<div class="col-sm-offset-2 col-sm-10">
								<a href="index2.php" class="btn btn-primary">Voltar</a>
							</div>
						</div>						
					</form>
				</div>
			</div>
		 
	  
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
