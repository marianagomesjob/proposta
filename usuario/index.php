<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
	$sql_query="DELETE FROM enfil_usuario WHERE id_usuario=".$_GET['delete_id'];
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
		window.location.href='edit_data.php?edit_id='+id;
	}
}
function delete_id(id)
{
	if(confirm('Certeza que deseja Remover esse item ?'))
	{
		window.location.href='index.php?delete_id='+id;
	}
}
</script>
</head>
	<body>
	<div id="header">
		<div class="container">
			<a href="add_data.php">Adicionar Agenda</a>
		</div>
	</div>
	<div class="container">
		
		<table class="table table-striped">
			<thead>
				<tr>
				<th>Proposta</th>
				<th>Atividade</th>
				<th>Título</th>							
				<th>Data</th>
				<th>Duração</th>
				<th>Atribuído</th>
				<th>Atribuído</th>
				</tr>
			</thead>
		<?php
		$sql_query="SELECT * FROM enfil_usuario";
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
				<td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
				<td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
				</tr>
			<?php
			}
		}
		else
		{
			?>
			<tr>
			<td colspan="5">No Data Found !</td>
			</tr>
			<?php
		}
		?>
		</table>
	</div>






	</body>
</html>