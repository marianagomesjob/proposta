<?php 
  //Arquivo de conexão 
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
			include_once "header.php"
		?>
		<br>
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">Adicionar Pessoas </div>
				<div class="panel-body">
					<form class="form-horizontal" action="salvar_pessoa.php" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-2" for="nom">Nome</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="pessoa_nome" name="pessoa_nome" placeholder="">
							</div>					 

							<label class="control-label col-sm-2" for="tipo_con">Tipo de contato</label>
							<div class="col-sm-4">
								<select class="form-control" id="pessoa_tipo_contato" name="pessoa_tipo_contato">
									<option >Selecione</option>
									<option value="Trabalho">Trabalho</option>
									<option value="Casa">Casa</option>
									<option value="Celular">Celular</option>
									<option value="Outros">Outros</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="email">E-mail</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="pessoa_email" name="pessoa_email" placeholder="">
							</div>
							
							
							<label class="control-label col-sm-2" for="clie">Cliente</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="pessoa_cliente" name="pessoa_cliente" placeholder="">
							</div>					  
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="tel">Telefone</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="email" id="pessoa_telefone" name="pessoa_telefone"  placeholder="">
							</div>
				  
					
						  <label class="control-label col-sm-2" for="Atrib">Atribuído a </label>
							<div class="col-sm-4">
								<select class="form-control" id="pessoa_atribuido" name="pessoa_atribuido">
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
								<input type="reset" class="btn btn-danger" value="Cancelar"></button>
						  </div>
						</div>						
					</form>
				</div>
			</div>
			<div class="panel panel-default">
			  <div class="panel-heading">Histórico de Contatos</div>
				  <div class="panel-body">
					<form class="form-horizontal" action="salvar_pessoa.php" method="POST">
						<table class="table table-striped">
						<thead>
						  <tr>
							<th>Nome</th>
							<th>Tipo de contato</th>
							<th>E-mail</th>
							<th>Cliente</th>
							<th>Telefone</th>
							<th>Atribuído</th>
							<th>Ações</th>
						  </tr>
						</thead>
						<tbody>
						        <?php
						        	//$sql-> Consulta trazendo várias linhas de dados.
									//$result-> transforma o resultado do sql e guarda o retorno na variável resultado
									$sql="SELECT * FROM enfil_pessoa";
									$result = mysqli_query($conn, $sql);

									//cria uma variável php para ultilizar cada dado vindo do array de campos 
									//transforma o resultado (select) do sql e guarda o retorno na variável resultado
									while ($linha = mysqli_fetch_array($result)) {
										$id_pessoa = $linha['id_pessoa'];
										$pessoa_nome = $linha['pessoa_nome'];
										$pessoa_tipo_contato = $linha['pessoa_tipo_contato'];
										$pessoa_email = $linha['pessoa_email'];
										$pessoa_cliente = $linha['pessoa_cliente'];
										$pessoa_telefone = $linha['pessoa_telefone'];
										$pessoa_atribuido = $linha['pessoa_atribuido'];



										echo "<tr>
											<td>$pessoa_nome</td>
											<td>$pessoa_tipo_contato</td>
											<td>$pessoa_email</td>
											<td>$pessoa_cliente</td>
											<td>$pessoa_telefone</td>
											<td>$pessoa_atribuido</td>
											<td><a href='#'>Detalhes|</a>
											<a href='editar_pessoa.php'>Editar</a></td>
											</tr>";
									}
						        ?>							
						</tbody>
						</table>	
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
