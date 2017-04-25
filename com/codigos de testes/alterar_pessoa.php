<?php 
	//Arquivo para alterar as informações 
	//Inserindo o arquivo de conexão 
	
	$servidor= "localhost";
	$user= "root";
	$pass="";
	$db_name="enfil_comercial";

	//criar conexão
	$conn = mysqli_connect($servidor,$user,$pass,$db_name) or die(mysql_error());
	

	$id_pessoa = $_POST['id_pessoa'];
	$pessoa_nome = $_POST['pessoa_nome'];
	$pessoa_email = $_POST['pessoa_email'];
	$pessoa_cliente = $_POST['pessoa_cliente'];
	$pessoa_telefone = $_POST['pessoa_telefone'];


	
	$sql = "UPDATE enfil_pessoa SET pessoa_nome = '$pessoa_nome', pessoa_email = '$pessoa_email', pessoa_cliente = '$pessoa_cliente', pessoa_telefone = '$pessoa_telefone' WHERE id_pessoa = '$id_pessoa'";
	$result = mysqli_query($conn, $sql);
	
	header("Location: pessoa.php");



?>

