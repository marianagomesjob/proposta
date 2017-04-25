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
   	<div class="container">
      	<div class="page-header">
        	<h1>Listagem de usuários</h1>
      	</div>
      	<div class="row">
	        <div class="col-md-12">
	          	<table class="table table-hover">
		            <thead>
		            	<tr>
		                	<th>#</th>
		                	<th>First Name</th>
		                	<th>Last Name</th>
		                	<th>Last Name</th>
		             	</tr>
		            </thead>
		            <tbody>	
		                    
			        <?php
			        	//$sql-> Consulta trazendo várias linhas de dados.
						//$result-> transforma o resultado do sql e guarda o retorno na variável resultado
						$sql="SELECT * FROM enfil_usuario";
						$result = mysqli_query($conn, $sql);

						//cria uma variável php para ultilizar cada dado vindo do array de campos 
						//transforma o resultado (select) do sql e guarda o retorno na variável resultado
						while ($linha = mysqli_fetch_array($result)) {
							$id_usuario = $linha['id_usuario'];
							$nome = $linha['nome'];
							$usuario = $linha['usuario'];
							$email = $linha['email'];

							echo "<tr>
									<td>$nome</td>
									<td>$usuario</td>
									<td>$email</td>
									<td><a href='#'>Detalhes|</a>
									<a href='#'>Editar</a></td>
								</tr>";
						}
			        ?>
		            </tbody>
	          	</table>
	        </div>
		</div>   	
   	</div>


   	</body>
</html>