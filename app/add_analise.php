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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
		<link rel="stylesheet" href="assets/css/estilo.css" type="text/css">
		<script src="assets/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  	</head>

   	<body>
		<?php include "header.php" ?>
		<div class="container">
			<form class="form-horizontal" action="salvar_registro.php" method="POST">
			<div class="panel panel-default">
				<div class="panel-heading">Análise Critica</div>
				<div class="panel-body">
					<!--1-->
						<div class="form-group">
					  	<label class="control-label col-sm-2">Nº Processo</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="num_processo" id="num_processo"/>
							</div>
						  
						  	<label class="control-label col-sm-2">Cliente:</label>
						  	<div class="col-sm-4">
								<input type="text" class="form-control" name="cliente" id="cliente"/>
						 	 </div>
						</div>	
						<!--2-->
						<div class="form-group">
						  <label class="control-label col-sm-2" for="email">Fornecimento:</label>
							<div class="col-sm-4">
								<textarea class="form-control" rows="5" id="fornecedor" name="fornecedor"></textarea>
							</div>
						  <label class="control-label col-sm-2" for="observacao">Observação:</label>
							<div class="col-sm-4">
								<textarea class="form-control" rows="5" name="observacao" id="observacao"></textarea>
							</div>					  

						</div>						
						<div class="form-group">
						  <label class="control-label col-sm-2" for="resp_tec">Responsável Técnico:</label>
							<div class="col-sm-4">
								<select class="form-control" id="resp_tec" name="resp_tec" >
									<option value="">Selecione</option>
					                    <?php
					                   	$result = mysqli_query($conn, 'SELECT id_usuario, nome  FROM enfil_usuario');
					                    while ($row = mysqli_fetch_assoc($result)) {
					                        echo "<option value='$row[id_usuario]'>$row[nome]</option>";
					                    }
					                    ?>
								</select>
							</div>
						  
						  <label class="control-label col-sm-2" for="resp_com">Responsável Comercial:</label>
							<div class="col-sm-4">
								<select class="form-control" id="resp_tec" name="resp_com" >
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
							<label class="control-label col-sm-2" for="data_registro">Último registro inserido </label>
							<div class="col-sm-4">
								<label class="control-label col-sm-5" for="">CS-16070-04-L</label>
							</div>	

						  <label class="control-label col-sm-2" for="email">Status</label>
							<div class="col-sm-4">
								<select class="form-control" id="status" name="status">
									<option value="">Selecione</option>
									<option value="em_elaboracao">Em elaboração</option>
									<option value="suspenso">Suspenso</option>
									<option value="cancelado">Cancelado</option>
									<option value="perdido">Perdido</option>
									<option value="vendido">Vendido</option>
									<option value="declinado">Declinado</option>
								</select>
							</div>

						</div>	
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading"><center>Análise Critica - Probabilidade de Vendas?(0-100%)</center></div>
				<div class="panel-body">
					<h5><center>*Responda Questões abaixo para enviar análise</center></h5>
						
						<div class="form-group">
							<label class="control-label col-sm-6" for="ra">Cliente compra nos próximos 12 meses*</label>
							<div class="col-sm-5">
								<label class="radio-inline"><input type="radio" name="respa" value="sim">Sim</label>
								<label class="radio-inline"><input type="radio" name="respa" value="nao">Não</label>
							</div>
							
						</div>	
						<div class="form-group">
							<label class="control-label col-sm-6" for="rb">Valor estimado acima de R$10mm?*</label>
							<div class="col-sm-5">
								<label class="radio-inline"><input type="radio" name="respb" value="sim">Sim</label>
								<label class="radio-inline"><input type="radio" name="respb" value="nao">Não</label>
							</div>
							
						</div>
						<div class="form-group">
							<label class="control-label col-sm-6" for="rc">Sabemos fazer?*</label>
							<div class="col-sm-5">
								<label class="radio-inline"><input type="radio" name="respc" value="sim">Sim</label>
								<label class="radio-inline"><input type="radio" name="respc" value="nao">Não</label>
							</div>
							
						</div>
						<div class="form-group">
							<label class="control-label col-sm-6" for="rd">O cliente ou o projeto é estratégico?*</label>
							<div class="col-sm-5">
								<label class="radio-inline"><input type="radio" name="respd" value="sim">Sim</label>
								<label class="radio-inline"><input type="radio" name="respd" value="nao">Não</label>
							</div>
							
						</div>	
						

						<div class="form-group">
							<label class="control-label col-sm-6" for="re">Os riscos para a realização do projeto são gerenciáveis?*</label>
							<div class="col-sm-5">
								<label class="radio-inline"><input type="radio" name="respe" value="sim">Sim</label>
								<label class="radio-inline"><input type="radio" name="respe" value="nao">Não</label>
							</div>
						</div>
			
						<div class="form-group">
							<label class="control-label col-sm-6" for="rf">O projeto tem Down Payment e evento de pagamento de engenharia?*</label>
							<div class="col-sm-5">
								<label class="radio-inline"><input type="radio" name="respf" value="sim">Sim</label>
								<label class="radio-inline"><input type="radio" name="respf" value="nao">Não</label>
							</div>
						</div>
						<div class="form-group">
						<center>
						  <div class="col-sm-offset-2 col-sm-7">
							<input type="hidden" name="acao" value="salvar" />
							<input type="submit" name="acao" class="btn btn-success" value="salvar"> </button>
							<input type="reset" class="btn btn-danger" value="Cancelar"></button>
						  </div>
						</div>
						</center>
				</div>
			</div>

		</div>
			<hr>
		  <footer>
			<p>&copy; 2016 Company, Inc.</p>
		  </footer>
		</div> <!-- /container -->


	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery.min.js"></script>')</script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
