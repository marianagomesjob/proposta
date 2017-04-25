<?php include_once "conexao.php" ?>

<?php 

/*Cadastrar as infomações na tabela enquete*/
if (isset($_POST['acao']) && $_POST['acao']== 'salvar'){
	$num_processo = strip_tags(trim($_POST['num_processo']));
	
	if($num_processo == ''){
		echo '<script> alert("Informe o nome da Proposta!")</script>';
	}else{
		$num_processo = mysql_query("INSERT INTO enfil_proposta (num_processo) VALUES ('$num_processo')");
		if ($num_processo){
			echo '<script> Alert ("Proposta cadastrada!");location.href="index2.php"</script>';
		}
	}
}

?>
