<?php
  include_once("conexao.php");
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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
		<link rel="stylesheet" href="assets/css/estilo.css" type="text/css">
		<script src="assets/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
  	</head>
  	<body>
  		<div class="container theme-showcase" role="main">
 
			<?php
				if(isset($_POST['acao'])){
					if(isset($_POST['cliente_empresa'])){
						$cliente_empresa=$_POST['cliente_empresa'];
						$cliente_telefone=$_POST['cliente_telefone'];
						$cliente_email=$_POST['cliente_email'];
						$cliente_responsa=$_POST['cliente_responsa'];
						$cliente_endereco=$_POST['cliente_endereco'];
						$cliente_atribuido=$_POST['cliente_atribuido'];
				   

						$sql = "INSERT INTO enfil_cliente(cliente_empresa, cliente_telefone, cliente_email, cliente_responsa, cliente_endereco, cliente_atribuido) VALUES ('$cliente_empresa','$cliente_telefone','$cliente_email','$cliente_responsa','$cliente_endereco','$cliente_atribuido')";
						$sql =  mysqli_query($conn, $sql);
						if(mysqli_affected_rows($conn) > 0){
							echo "Carrega modal de sucesso <a href='clientes.php'>voltar</a>";
						}else{
							echo "Carrega modal de sucesso";
						}


					}
				} 
			?>
       		
      </div>
   	</body>
</html>

