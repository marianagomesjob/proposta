<?php include_once "conexao.php"?>
		<?php 
			/*Cadastrar as infomações na tabela num_processo*/
			if (isset($_POST['acao']) && $_POST['acao']== 'cadastrar'){
				$num_processo = strip_tags(trim($_POST['num_processo']));
				$cliente = strip_tags(trim($_POST['cliente']));
				$respa = strip_tags(trim($_POST['respa']));
				$respb = strip_tags(trim($_POST['respb']));
				if($num_processo == ''){
					echo '<script> alert("Informe o nome da num_processo!")</script>';
				}else{
					$status ='reprovado';
					$cadastrarnum_processo = mysql_query("INSERT INTO enfil_prosposta (num_processo,cliente,status,respa,respb) VALUES ('$num_processo','$cliente','$status','$respa','$respb')");
					if ($cadastrarnum_processo){
						echo '<script> Alert ("Número de processo cadastrado!");location.href="index.php"</script>';	
					}
				}
			
			}
		?>
		<form action="" method ="post" enctype="multipart/form-data">
			<label>
				<span><strong>Cadastrar num_processo</strong></span>
				<input type="text" name="num_processo" /><br><br>
				<span><strong>Cadastar cliente</strong></span>
				<input type="text" name="cliente" />
				<input type="radio" name="respa" value="sim">Sim			
				<input type="radio" name="respa" value="nao">Não
				<input type="radio" name="respb" value="sim">Sim		<br>	
				<input type="radio" name="respb" value="nao">Não
				
			</label>
			
			<input type="hidden" name="acao" value="cadastrar" />
			<input type="submit" name="acao" value="cadastrar" /><br>
			<a href="teste_add_analise.php">voltar </a>
		</form>