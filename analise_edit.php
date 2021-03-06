<?php
//Arquivo de conexao

include_once 'conexao.php';
include_once 'dbconfig.php';

if(isset($_GET['edit_id']))
{
	$sql_query="SELECT * FROM enfil_proposta WHERE id_proposta=".$_GET['edit_id'];
	$result_set=mysql_query($sql_query);
	$fetched_row=mysql_fetch_array($result_set);
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
	//Variaveis para input
	$agenda_atividade = $_POST['agenda_atividade'];
	$agenda_titulo = $_POST['agenda_titulo'];
	$agenda_data = $_POST['agenda_data'];
	$agenda_duracao = $_POST['agenda_duracao'];
	$agenda_atribuido = $_POST['agenda_atribuido'];
	$agenda_nota = $_POST['agenda_nota'];


	//Variaveis para input
	//sql query para update inserir no BD
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
if(isset($_POST['btn-cancel']))
{
	header("Location: index2.php");
}
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
							<input type="text" class="form-control" name="num_processo"  value="<?php echo $fetched_row['num_processo']; ?>" readonly />
						</div>
					  
					  	<label class="control-label col-sm-2">Cliente:</label>
					  	<div class="col-sm-4">

							<input type="text" class="form-control" name="cliente" value="<?php echo $fetched_row['cliente']; ?>"/>
					 	 </div>
					</div>	
					<div class="form-group">
						<label class="control-label col-sm-2" for="email">Fornecimento:</label>
						<div class="col-sm-4">
							<textarea class="form-control" rows="3" id="fornecedor" name="fornecedor" required/><?php echo $fetched_row["fornecedor"]?></textarea>

						</div>
						<label class="control-label col-sm-2" for="observacao">Observação:</label>
						<div class="col-sm-4">
							<textarea class="form-control" rows="3" id="observacao" name="observacao" required/><?php echo $fetched_row["observacao"]?></textarea>
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
						
						<!--Editar select com informações vindas do banco-->
						<?php
							#seleciona as informções do banco 
							$busca=mysql_query("SELECT id_usuario, nome  FROM enfil_usuario")or die(mysql_error());
							
						?>
						<label class="control-label col-sm-2" for="resp_com">Responsável Comercial:</label>
						<div class="col-sm-4">
							<select class="form-control" id="resp_com" name="resp_com" ><?php
								while($ver=mysql_fetch_row($busca)){ ?> 
								<option value=""><?php echo "$ver[1]"; ?></option> 
							<?php } ?> 
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
								<option value="<?php echo $status ?>"<?php if($key == $fetched_row['status'] ){ echo ( "selected='selected'");} ?>>
									<?php echo $status ?>
								</option>
							<?php endforeach;?>
						</select>	
						</div>	
					</div>	
					<div class="form-group">
					  	<label class="control-label col-sm-2">Data de emissão da proposta</label>
						<div class="col-sm-3">
							<input type="date" class="form-control" name="pro_data_criacao" id="pro_data_criacao" value="<?php echo $fetched_row['pro_data_criacao']; ?>"/>
						</div>
					</div>						
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-body">
				    <table class="table table-bordered">
				    	<thead>
				    	<tr>
				    		<th colspan="2"> 
				    			<center>
				    				<p>Análise Critica - Probabilidade de Vendas?(0-100%)</p>
				    				<p>*Responda Questões abaixo para enviar análise</p>
				    			</center>S
				    		</th>
				    	</tr>

				    	</thead>
				      	<tbody>
					        <tr>
					        	<td>Cliente compra nos próximos 12 meses*</td>
					           	<td>
					           		<label class="radio-inline"><input type="radio" name="respa" value="sim">Sim</label>
									<label class="radio-inline"><input type="radio" name="respa" value="nao">Não</label>
								</td>
					        </tr>
					        <tr>
					        	<td>Valor estimado acima de R$10mm?*/td>
					           	<td>
					           		<label class="radio-inline"><input type="radio" name="respb" value="sim">Sim</label>
									<label class="radio-inline"><input type="radio" name="respb" value="nao">Não</label>
								</td>
					        </tr>
					        <tr>
					        	<td>Sabemos fazer?*</td>
					           	<td>
					           		<label class="radio-inline"><input type="radio" name="respc" value="sim">Sim</label>
									<label class="radio-inline"><input type="radio" name="respc" value="nao">Não</label>
								</td>
					        </tr>
					        <tr>
					        	<td>O cliente ou o projeto é estratégico?*</td>
					           	<td>
					           		<label class="radio-inline"><input type="radio" name="respd" value="sim">Sim</label>
									<label class="radio-inline"><input type="radio" name="respd" value="nao">Não</label>
								</td>
					        </tr>
					        <tr>
					        	<td>Os riscos para a realização do projeto são gerenciáveis?*</td>
					           	<td>
					           		<label class="radio-inline"><input type="radio" name="respe" value="sim">Sim</label>
									<label class="radio-inline"><input type="radio" name="respe" value="nao">Não</label>
								</td>
					        </tr>	
					        <tr>
					        	<td>O projeto tem Down Payment e evento de pagamento de engenharia?*</td>
					           	<td>
					           		<label class="radio-inline"><input type="radio" name="respf" value="sim">Sim</label>
									<label class="radio-inline"><input type="radio" name="respf" value="nao">Não</label>
								</td>
					        </tr>				        			        				        				        
				      	</tbody>
				    </table>
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