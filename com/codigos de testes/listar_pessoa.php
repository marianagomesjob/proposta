<?php 
	//Alterar as informações 
	//Inserindo o arquivo de conexão 
	include_once ("conexao.php");



	$sql="SELECT * FROM enfil_pessoa";
	$result = mysqli_query($conn, $sql);

	while ($row_pessoa = mysqli_fetch_assoc($result)) {
		echo $row_pessoa['id_pessoa']."<br>";
		echo $row_pessoa['pessoa_nome']."<br>";
		echo $row_pessoa['pessoa_cliente']."<br>";
		echo $row_pessoa['pessoa_telefone']."<br>";
		echo $row_pessoa['pessoa_atribuido']."<br>";
		echo $row_pessoa['pessoa_atribuido']."<hr>";


	}
?>
<?php

	//Query de busca no banco
	//executa as instruções acima conexão e a busca no banco
	//ler os dados que estão executados nas váriais.

	include_once("conexao.php");
	$sql = "SELECT * FROM enfil_pessoa";
	$result = mysqli_query($conn, $sql);
	//estrutura de repetição para buscar as informações do banco de qualquer id_pessoa
	while($row_pessoa = mysqli_fetch_assoc($result)){
		echo $row_pessoa['id_pessoa']."<br>";	
		echo $row_pessoa['pessoa_nome']."<br>";
		echo $row_pessoa['pessoa_email']."<br>";	
		echo $row_pessoa['pessoa_cliente']."<br>";	
		echo $row_pessoa['pessoa_telefone']."<br>";		
		echo $row_pessoa['']."<br>"; ?>
		<a href="form_alterar_pessoa.php?id=<?php echo $row_pessoa['id_pessoa']; ?>">Editar</a>
		
		<hr>
	<?php }
?>



