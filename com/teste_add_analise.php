<html>
	<?php include_once "conexao.php"?>

	<head>
		<title>Gerenciamento de num_processo </title>
	</head>
	<body>
		<?php 
			/*Cadastrar as infomações na tabela num_processo*/
			if (isset($_POST['acao']) && $_POST['acao']== 'cadastrar'){
				$num_processo = strip_tags(trim($_POST['num_processo']));
				
				if($num_processo == ''){
					echo '<script> alert("Informe o nome da num_processo!")</script>';
				}else{
					$status ='reprovado';
					$cadastrarnum_processo = mysql_query("INSERT INTO enfil_prosposta (num_processo,status) VALUES ('$num_processo','$status')");
					if ($cadastrarnum_processo){
						echo '<script> Alert ("num_processo cadastrada!");location.href="index.php"</script>';	
					}
				}
			
			}
		?>
		<form action="" method ="post" enctype="multipart/form-data">
			<label>
				<span><strong>Cadastrar num_processo</strong></span>
				<a href="add.php">Adicionar </a>
				<!--<input type="text" name="num_processo" />--><br>

			</label>

		</form>

		<table border="0" width="700" cellpadding="4" cellspacing="4">
			<tr>
				<td>num_processo</td>
				<td>cliente</td>
				<td>Adicionar Resposta</td>
				<td>Status</td>
				<td>Deletar</td>
			</tr>
			
			<?php
			$peganum_processo = mysql_query("SELECT * FROM enfil_prosposta ORDER BY id_prosposta DESC");
			if(@mysql_num_rows($peganum_processo == '0')){
				echo '<tr colspan="5">Não ha enquestas para moderar</tr>';
			}else{
				while($linha = mysql_fetch_array($peganum_processo)){
					
			?>
			
			<tr>
				<td><?php echo $linha['num_processo'];?></td>
				<td><a href="num_processo.php?num_processo =<?php echo $linha['id'];?>">Visualizar</a></td>
				<td><a href="cliente.php?num_processo =<?php echo $linha['id'];?>">Adicionar </a></td>
				<td><a href="?mudar=sim&num_processo =<?php echo $linha['id'];?>"> <?php echo $linha['status']?></a></td>
				<td><a href="?deletar=sim&num_processo=<?php echo $linha['id'];?>">Deletar</a></td>
			</tr>
			<?php }}?>	
		</table>
		
		<?php
			if(isset($_GET['mudar']) && $_GET['mudar'] == 'sim'){
				$idnum_processo  = (int)$_GET['num_processo'];
				$selnum_processo = mysql_query("SELECT status FROM enfil_prosposta WHERE id = '$id_prosposta'");
				$qrnum_processo  = mysql_fetch_array($selnum_processo);
				
				if($qrnum_processo['status']== 'aprovado'){
					$setStatus =  mysql_query("UPDATE enfil_prosposta SET status = 'aprovado' WHERE id='$id_prosposta'");
				}elseif($qrnum_processo['status']== 'reprovado'){
					$setStatus =  mysql_query("UPDATE enfil_prosposta SET status ='reprovado' WHERE id='$id_prosposta'");
				}
				if ($setStatus){
					echo '<script> location.href="index.php"</script>';
				}
			}
		?>
	</body>
</html>