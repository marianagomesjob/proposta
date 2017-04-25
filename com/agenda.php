<!--
	***Arquivos***
*******************************
	pagina - pag de index de toda ação(listagem e delete)
	add_ e salvar    - pag com os inputs (Adicionar )
	edit   - edição de cada arquivo 
	- arquivo com script para salvar
********************************
-->
<?php 
	//Inserindo a conexão 
	error_reporting(0);
	$host = "localhost";
	$user = "root";
	$password = "";
	$datbase = "enfil_comercial";
	mysql_connect($host,$user,$password);
	mysql_select_db($datbase);
	
// delete condition
if(isset($_GET['delete_id']))
{
	$sql_query="DELETE FROM enfil_agenda WHERE id_agenda=".$_GET['delete_id'];
	mysql_query($sql_query);
	header("Location: $_SERVER[PHP_SELF]");
}
// delete condition

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema de Cadastro</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="assets/css/estilo.css" type="text/css">
	<script type="text/javascript">
		function edt_id(id)
		{
			if(confirm('Deseja alterar esse registro ?'))
			{
				window.location.href='agenda_edit.php?edit_id='+id;
			}
		}
		function delete_id(id)
		{
			if(confirm('Certeza que deseja Remover esse item ?'))
			{
				window.location.href='agenda.php?delete_id='+id;
			}
		}
	</script>
</head>
	<body>
		<div id="header">
			<?php 
				include_once "header.php";
			?>	
		</div>
		<div class="container">
			<h1>Agenda</h1>
			<hr>
			<a href="agenda_add.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Agenda</a>
		</div>
		<br>
		
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Vinculo Proposta</th>
								<th>Vinculo Budget</th>
								<th>Atividade</th>
								<th>Título</th>							
								<th>Data</th>
								<th>Duração</th>
								<th>Atribuído</th>
								<th></th>
							</tr>
						</thead>
					<?php
					$sql_query="SELECT *,date_format(agenda_data,'%d,%m,%y') as agenda_data FROM enfil_agenda";
					$result_set=mysql_query($sql_query);
					if(mysql_num_rows($result_set)>0)
					{
						while($row=mysql_fetch_row($result_set))
						{
						?>
							<tr>

							<td><?php echo $row[1]; ?></td>
							<td><?php echo $row[2]; ?></td>	
							<td><?php echo $row[3]; ?></td>
							<td><?php echo $row[4]; ?></td>		
							<td><?php echo $row[5]; ?></td>	
							<td><?php echo $row[6]; ?></td>	
							<td><?php echo $row[7]; ?></td>				
						
							<td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
							<a href="javascript:delete_id('<?php echo $row[0]; ?>')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
							</tr>
						<?php
						}
					}
					else
					{
						?>
						<tr>
						<td colspan="5"> Sem registros</td>
						</tr>
						<?php
					}
					?>
					</table>				
				</div>
			</div>
		  	<footer>
				<p>&copy; 2016 Company, Inc.</p>
		  	</footer>			
		</div>
		
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/jquery.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>