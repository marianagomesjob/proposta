<?php
	//Conexão com banco de dados servidor, usuário.
	$conexao = mysql_connect('localhost','root','') or die(mysql_error());
	if($conexao){
		//Variável que conecta com o banco de dados usando o "Banco Criado"
		$bd = mysql_select_db('enfil_comercial') or die(mysql_error());
	}
	ob_start();
?>