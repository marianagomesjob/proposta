<!--Arquivo de conexao-->
<?php 
include_once 'conexao.php';
include_once 'dbconfig.php';

if(isset($_GET['edit_id']))
{
	$sql_query="SELECT * FROM enfil_proposta WHERE id_proposta=".$_GET['edit_id'];
	$result_set=mysql_query($sql_query);
	$pro_row=mysql_fetch_array($result_set);
}


$opçoes_status= array(
	'Em Elaboração' => 'Em Elaboração',
	'Suspenso'  => 'Suspenso',
	'Cancelado'  => 'Cancelado',
	'Vendido'  => 'Vendido',
	'Perdido'  => 'Perdido',
	'Declinado'  => 'Declinado',
);



if(isset($_POST['btn-update']))
{
	// Variaveis para input
	
	$cliente= $_POST['cliente'];
	$fornecedor= $_POST['fornecedor'];
	$observacao= $_POST['observacao'];
	$resp_tec = $_POST['resp_tec'];
	$resp_com = $_POST['resp_com'];
	$status= $_POST['status'];
	$pro_data_criacao = $_POST['pro_data_criacao'];
	/*
	$respa = $_POST['respa'];
	$respb = $_POST['respb'];
	$respc = $_POST['respc'];
	$respd = $_POST['respd'];
	$respe = $_POST['respe'];
	$respf= $_POST['respf'];
	
	*/
	

	// Variaveis para input
	
	// sql query para update inserir no BD
	$sql_query = "UPDATE enfil_agenda SET cliente='$cliente', fornecedor='$fornecedor',observacao='$observacao',resp_tec='$resp_tec',
	resp_com='$resp_com',status='$status',respa='$respa',respb='$respb',respc='$respc',respd='$respd',respe='$respe',respf='$respf',pro_data_criacao='$pro_data_criacao' WHERE id_proposta=".$_GET['edit_id'];
	// sql query for update data into database
	
	// sql query excuta funcao
	if(mysql_query($sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Registros modificados com sucesso');
		window.location.href='index2.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('erro ao realizar a atualização');
		</script>
		<?php
	}
	// sql query excuta funcao
}
/*
$busca=mysql_query("SELECT * FROM salgados ORDER BY id ASC");
    if(!mysql_num_rows($busca)){ 
        echo 'Nenhum dado cadastrado na base de dados';
    }else{
        while($ver=mysql_fetch_row($busca)){
        $id=$ver[0];
		$nome=$ver[1];
		}
	}	
*/

?>

<!DOCTYPE html>
<html lang="en">
 	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="marianagomes" content="">
		
		<!--Links-->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
		<link rel="stylesheet" href="assets/css/estilo.css" type="text/css">
		<script src="assets/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  	</head>

   	<body>
		<?php include "header.php" ?>

		<div class="container">
			<h1>Editar Análise</h1>
			<hr>
		</div>
		
		<div class="container">
			<form class="form-horizontal" action="analise_salvar.php" method="POST">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="form-group">
				  	<label class="control-label col-sm-2">Nº Processo</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="num_processo"  value="<?php echo $pro_row['num_processo']; ?>" readonly />
						</div>
					  
					  	<label class="control-label col-sm-2">Cliente:</label>
					  	<div class="col-sm-4">

							<input type="text" class="form-control" name="cliente" value="<?php echo $pro_row['cliente']; ?>"/>
					 	 </div>
					</div>	
					<div class="form-group">
						<label class="control-label col-sm-2" for="email">Fornecimento:</label>
						<div class="col-sm-4">
							<textarea class="form-control" rows="3" id="fornecedor" name="fornecedor" required/><?php echo $pro_row["fornecedor"]?></textarea>

						</div>
						<label class="control-label col-sm-2" for="observacao">Observação:</label>
						<div class="col-sm-4">
							<textarea class="form-control" rows="3" id="observacao" name="observacao" required/><?php echo $pro_row["observacao"]?></textarea>
						</div>					  

					</div>						
					<div class="form-group">
						<label class="control-label col-sm-2" for="resp_tec">Responsável Técnico:</label>
						<div class="col-sm-4">
							<select class="form-control" id="resp_tec" name="resp_tec" >
								<option value="">Selecione</option>
					                <?php
					                  	$result = mysqli_query($conn, 'SELECT id_usuario, nome  FROM enfil_usuario');
					                    while ($row = mysqli_fetch_assoc($result)) {
					                        echo "<option value='$row[nome]'>$row[nome]</option>";
					                    }
					                ?>
							</select>
						</div>
						  
						<label class="control-label col-sm-2" for="resp_com">Responsável Comercial:</label>
						<div class="col-sm-4">
							<select class="form-control" id="resp_tec" name="resp_com" >
								<option value="">Selecione</option>
					                <?php
					                   	$result = mysqli_query($conn, 'SELECT id_usuario, nome  FROM enfil_usuario');
					                    while ($row = mysqli_fetch_assoc($result)) {
					                        echo "<option value='$row[nome]'>$row[nome]</option>";
					                    }
					                ?>
							</select>
    					</div>
					</div>
					
					<div class="form-group">        
						<label class="control-label col-sm-2" for="data_registro">Último registro inserido </label>
						<div class="col-sm-4">
							<label class="control-label col-sm-5" for="">PR-16070-04-L</label>
						</div>	

						<label class="control-label col-sm-2" for="data_registro">Status </label>
						<div class="col-sm-4">

						<select class="form-control" id="status" name="status">
							<option>Selecione</option>
							<?php foreach( $opçoes_status as $key => $status ): ?>
								<option value="<?php echo $status ?>"<?php if($key == $pro_row['status'] ){ echo ( "selected='selected'");} ?>>
									<?php echo $status ?>
								</option>
							<?php endforeach;?>
						</select>	
						</div>	
					</div>	
					<div class="form-group">
					  	<label class="control-label col-sm-2">Data de emissão da proposta</label>
						<div class="col-sm-3">
							<input type="date" class="form-control" name="pro_data_criacao" id="pro_data_criacao" value="<?php echo $pro_row['pro_data_criacao']; ?>"/>
						</div>
					</div>						
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading"><center>Análise Critica - Probabilidade de Vendas?(0-100%)</center></div>
				<div class="panel-body">
				<h5><center>*Responda Questões abaixo para enviar análise</center></h5>
					<div class="form-group">
					<label class="control-label col-sm-6" for="ra">Cliente compra nos próximos 12 meses*</label>
						<div class="col-sm-5">
							<label class="radio-inline"><input type="radio" name="respa">Sim</label>
							<label class="radio-inline"><input type="radio" name="respa">Não</label>
						</div>
					</div>	
					<div class="form-group">
					<label class="control-label col-sm-6" for="rb">Valor estimado acima de R$10mm?*</label>
						<div class="col-sm-5">
							<label class="radio-inline"><input type="radio" name="respb" >Sim</label>
							<label class="radio-inline"><input type="radio" name="respb" >Não</label>
						</div>
					</div>
					
					
					<div class="form-group">
					<label class="control-label col-sm-6" for="rc">Sabemos fazer?*</label>
						<div class="col-sm-5">
							<label class="radio-inline"><input type="radio" name="respc" value="sim" >Sim</label>
							<label class="radio-inline"><input type="radio" name="respc" value="nao" >Não</label>
						</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-6" for="rd">O cliente ou o projeto é estratégico?*</label>
						<div class="col-sm-5">
							<label class="radio-inline"><input type="radio" name="respd" value="sim">Sim</label>
							<label class="radio-inline"><input type="radio" name="respd" value="nao">Não</label>
						</div>
					</div>	
					<div class="form-group">
					<label class="control-label col-sm-6" for="re">Os riscos para a realização do projeto são gerenciáveis?*</label>
						<div class="col-sm-5">
							<label class="radio-inline"><input type="radio" name="respe" value="sim">Sim</label>
							<label class="radio-inline"><input type="radio" name="respe" value="nao">Não</label>
						</div>
					</div>
			
					<div class="form-group">
					<label class="control-label col-sm-6" for="rf">O projeto tem Down Payment e evento de pagamento de engenharia?*</label>
						<div class="col-sm-5">
							<label class="radio-inline"><input type="radio" name="respf" value="sim">Sim</label>
							<label class="radio-inline"><input type="radio" name="respf" value="nao">Não</label>
						</div>
					</div>

					<div class="form-group">
						<center>
							<div class="col-sm-offset-2 col-sm-7">
								<input type="hidden" name="acao" value="salvar" />
								<input type="submit" name="acao" class="btn btn-success" value="salvar"> </button>
								<input type="reset" class="btn btn-danger" value="Cancelar"></button>
							</div>
						</center>
					</div>
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