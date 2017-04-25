<?php 
	include_once "app/conexao.php"
?>
<!DOCTYPE hmtl>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100"  type="text/css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link href="assets/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<title></title>
	</head>
	<body>
		<div class="container">
			<h1>Acesso</h1>	
			<div class="form-input">
				<form name="loginform" method="post" action="userautentication.php" >
					<input type="text" name="usuario" class="form_control" id="email" placeholder="Digite seu usuário" />
					<input type="password" name="senha" class="form_control" id="senha" placeholder="Digite seu senha" />
					<div class="form_group">
						<input type="submit" class="btn btn_acesso" value="Acessar" name="button"/>
						<!--<button class="btn btn_acesso">Acesse</button>
						<a href="index2.html">Acesse</a>-->
					</div>
					
				</form>
			</div>	
		</div>
	</body>
</html>

