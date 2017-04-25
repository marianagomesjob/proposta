<?php
	$conecta = mysql_connect('localhost','root','') or die(mysql_error());
	if($conecta){
		$bd = mysql_select_db('enquete') or die(mysql_error());
	}
	ob_start();
?>

