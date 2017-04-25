<html>
	<?php include_once "config.php"?>

	<head>
		<title>Gerenciamento de enquete </title>
	</head>
	<body>
		<?php 
			/*Cadastrar as infomações na tabela enquete*/
			if (isset($_POST['acao']) && $_POST['acao']== 'cadastrar'){
				$nomeEnquete = strip_tags(trim($_POST['nomeEnquete']));
				if($nomeEnquete == ''){
					echo '<script> alert("Informe o nome da enquete!")</script>';
				}else{
					$status ='inativo';
					$cadastrarEnquete = mysql_query("INSERT INTO enquetes (enquete,status) VALUES ('$nomeEnquete','$status')");
					if ($cadastrarEnquete){
						echo '<script> Alert ("Enquete cadastrada!");location.href="index.php"</script>';	
					}
				}
			
			}
		?>	
	
		<form action="" method ="post" enctype="multipart/form-data">
			<label>
				<span><strong>Cadastrar enquete</strong></span>
				<input type="text" name="nomeEnquete" />
			</label>
			<input type="hidden" name="acao" value="cadastrar" />
			<input type="submit" name="acao" value="cadastrar Enquete" />
		</form>
		
	</body>
</html>