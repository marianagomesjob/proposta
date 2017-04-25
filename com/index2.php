<?php 
	//Inserindo o arquivo de conexão 
	include_once ("conexao.php");
	
	//Inserindo a conexão 
	error_reporting(0);
	$host = "localhost";
	$user = "root";
	$password = "";
	$datbase = "enfil_comercial";
	mysql_connect($host,$user,$password);
	mysql_select_db($datbase);
	/*
	if(isset($_GET['delete_id']))
	{
		$sql_query="DELETE FROM enfil_pessoa WHERE id_pessoa=".$_GET['delete_id'];
		mysql_query($sql_query);
		header("Location: $_SERVER[PHP_SELF]");
	}	
	*/
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
	
	<script type="text/javascript">
		function edt_id(id)
		{
			if(confirm('Deseja alterar esse registro ?'))
			{
				window.location.href='analise_edit.php?edit_id='+id;
			}
		}
	</script>  

  </head>

   	<body>
		<?php include_once "header.php" ?>
		<div class="container">
			<h1>Propostas</h1>
			<hr>
			<form method="POST" action="analise_pesquisar.php">
				<div class="col-sm-2">
					<a href="analise_add.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Proposta</a>
				</div>
					
				
				<div class="col-sm-8">
					<div class="input-group">
						<input type="text"  class="form-control" name="pesquisa" placeholder="Pesquisar prosposta">
						<span class="input-group-btn">
							<input type="submit" class="btn btn-default" value="Buscar">
						
						</span>					
					</div>
				</div>
			</form>		

		</div>
		<br>

		<div class="container">
			<div class="panel panel-default">
				<div class="panel-body">
			<!-- Example row of columns -->
			<div class="row">
				<div class="col-sm-12">
					<form class="form-horizontal" action="" method="POST">
						<table class="table table-striped">
							<thead>
								<tr>
									<th id="id_item">#</th>
									<th id="data">Data</th>
									<th id="pedido">Proposta</th>
									<th id="pedido">Cliente</th>
									<th id="em_elaboração">Em elaboração</th>
									<th id="suspenso">Suspenso</th>
									<th id="cancelado">Cancelado</th>
									<th id="entregue">Entregue</th>
									<th id="perdidos">Perdidos</th>
									<th id="vendidos">Vendidos</th>
									<th id="declinado">Declinado</th>
									<th id=""></th>
								</tr>
							</thead>
							<tbody>
								<?php
									//$sql-> Consulta trazendo várias linhas de dados.
									//$result-> transforma o resultado do sql e guarda o retorno na variável resultado.
									$sql_query="SELECT * FROM enfil_proposta ORDER BY id_proposta desc";
									$result_set=mysql_query($sql_query);
									if(mysql_num_rows($result_set)>0)

									//cria uma variável php para ultilizar cada dado vindo do array de campos 
									//transforma o resultado (select) do sql e guarda o retorno na variável resultado
									if(mysql_num_rows($result_set)>0)
									{
										while($row=mysql_fetch_row($result_set))
										{
										?>
											<tr>
												<td><?php echo $row[0]; ?></td>
												<td><?php echo $row[15]; ?></td>	
												<td><?php echo $row[2]; ?></td>
												<td><?php echo $row[4]; ?></td>		
												<td><?php echo $row[5]; ?></td>	
												<td><?php echo $row[8]; ?></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>		
										
												<td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
												<a href="javascript:delete_id('<?php echo $row[0]; ?>')" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a></td>
											</tr>
										<?php
										}
									}
									else
									{
										?>
										<tr>
										<td colspan="5"> Sem registros</td>
										</tr>
										<?php
									}								
								?>							
							</tbody>
						</table>
					</form>				
				</div>				
				</div>
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
