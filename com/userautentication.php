<?php 
	//Conexão com o banco de dados 
	$conexao = mysql_connect('localhost','root','') or die(mysql_error());
	if($conexao){
		$bd = mysql_select_db('enfil_comercial') or die(mysql_error());
			//print "Conexão e Seleção OK!"; 
	}
	ob_start();
?>
<html>
	<head>
		<script type="text/javascript">
			function loginsuccessfully(){
				setTimeout("window.location='index2.php'");
				
			}
			function loginfailed(){
				setTimeout("window.location='login.php'",4000);	
			}
		</script>
	</head>
	<body>	
<?php
//Variáveis POST contendo as informações que o usuário digitou.
	$usuario=$_POST['usuario'];
	$senha=$_POST['senha'];
//Busca no banco de dados o usuário e senha
	$sql= mysql_query("SELECT * FROM enfil_usuario WHERE usuario ='$usuario' and senha ='$senha'")or die(mysql_error()) ;
	
	//Se dentro das linhas dentro do meu banco dedados e o resultado (buscas) se resultado for maior que 0 exibi os registros 
	//caso o contrario ele nao exibi os registros.
	$row = mysql_num_rows($sql);
		if($row>0){
			session_start();
			$_SESSION['usuario']= $_POST['usuario'];
			$_SESSION['senha']= $_POST['senha'];
			
			//echo "Você foi autenticado com sucesso!";
			echo "<script> loginsuccessfully()</script>";
		}else{
			echo "<center><h1>Usuários e senha inválidos</h1></center>";
			echo "<script> loginfailed()</script>";		
		}
?>
</body>
</html>

