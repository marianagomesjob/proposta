<?php 
	include_once "conexao.php"
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
  	<div class="container" role="main">
		<?php

			
			if(isset($_POST['acao'])){
				if(isset($_POST['nome'])){
					$nome=$_POST['nome'];
					$usuario=$_POST['usuario'];
					$email=$_POST['email'];
					$datanasc=$_POST['datanasc'];
					$ramal=$_POST['ramal'];
					$tel_com=$_POST['tel_com'];
					$tel_cel=$_POST['tel_cel'];
					$departamento=$_POST['departamento'];
					$cargo=$_POST['cargo'];
					$perfil=$_POST['perfil'];
					//$ativo=$_POST['ativo'];
					$status=$_POST['status'];

					$sql = "INSERT INTO enfil_usuario (nome,usuario,email,datanasc,ramal,tel_com,tel_cel,cargo,perfil,departamento,status) VALUES ('$nome','$usuario','$email','$datanasc','$ramal','$tel_com','$tel_cel','$cargo','$perfil','$departamento','$status')";
					$sql =  mysqli_query($conn, $sql);
					if(mysqli_affected_rows($conn) > 0){
						echo "Carrega modal de sucesso <a href='usuario.php'>voltar</a>";
					}else{
						echo "Não foi salvo";
					}
				}
			} 
      ?>
       		
    </div>		
	</body>
</html>

