<?php 
  //Arquivo de conexão 
  include_once ("conexao.php");
?>
<html>
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
			<h1>Resultados da Busca - Proposta</h1>
			<hr>
			
			<?php
				//Realiza a busca 
				$pesquisa = $_POST['pesquisa'];
				 
				$sql="SELECT * FROM enfil_proposta WHERE num_processo LIKE '%$pesquisa%' OR cliente LIKE '$pesquisa%' OR fornecedor LIKE '$pesquisa%' OR observacao LIKE '$pesquisa%' OR status LIKE '$pesquisa%' LIMIT 5 ";
				$result= mysqli_query($conn,$sql);
				
				
				while($rows_pesquisar = mysqli_fetch_array($result)){
					echo "Proposta: ".$rows_pesquisar['num_processo']."<br>".$rows_pesquisar['cliente']."<br>
					<a href='index2.php'>Voltar</a><br>";
					echo "<br>";
				}

			?>
			<hr>
			<footer>
				<p>&copy; 2017 Company, Inc.</p>
			</footer>			
		</div>

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
