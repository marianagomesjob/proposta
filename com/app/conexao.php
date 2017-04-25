<?php
	/*
	//Conexão com banco de dados servidor, usuário.
	$conexao = mysql_connect('localhost','root','') or die(mysql_error());
	if($conexao){
		//Variável que conecta com o banco de dados usando o "Banco Criado"
		$bd = mysql_select_db('enfil_comercial') or die(mysql_error());
	}
	ob_start();
	*/

	$servidor= "localhost";
	$user= "root";
	$pass="";
	$db_name="enfil_comercial";



	//criar conexão
	$conn = mysqli_connect($servidor,$user,$pass,$db_name) or die(mysql_error());
?>