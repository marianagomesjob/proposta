<?php 
	//Inserindo o arquivo de conexão 
	include_once ("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt">
  	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="">
		<!--Links-->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="assets/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
		<link rel="stylesheet" href="assets/css/estilo.css" type="text/css">
		<script src="assets/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="assets/js/chart.min.js"></script>
		<style type="text/css">

		*{
			font-family: calibri;        
		}

		.box {
			margin: 0px auto;
			width: 70%;
		}

		.box-chart {
			width: 100%;
			margin: 0 auto;
			padding: 10px;
		}

		</style>  	
		<script type="text/javascript">
			var randomnb = function(){ return Math.round(Math.random()*300)};
		</script>  
		
  	</head>

   	<body>
		<?php 
			include_once "header.php"
		?>
		<div class="container">
			<h1>Analise Bi- Empresa</h1>
			
			<div class="box">
				<div class="box-chart">
					<canvas id="GraficoBarra" style="width:100%;"></canvas>
					<script type="text/javascript">                                        

						var options = {
							responsive:true
						};

						var data = {
							labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
							datasets: [
								{
									label: "Dados primários",
									fillColor: "rgba(220,220,220,0.5)",
									strokeColor: "rgba(220,220,220,0.8)",
									highlightFill: "rgba(220,220,220,0.75)",
									highlightStroke: "rgba(220,220,220,1)",
									data: [randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb(), randomnb()]
								},
								{
									label: "Dados secundários",
									fillColor: "rgba(151,187,205,0.5)",
									strokeColor: "rgba(151,187,205,0.8)",
									highlightFill: "rgba(151,187,205,0.75)",
									highlightStroke: "rgba(151,187,205,1)",
									data: [28, 48, 40, 19, 86, 27, 90, randomnb(), randomnb(), randomnb(), randomnb(), randomnb()]
								}
							]
						};                

						window.onload = function(){
							var ctx = document.getElementById("GraficoBarra").getContext("2d");
							var BarChart = new Chart(ctx).Bar(data, options);
						}           
					</script>			  
				</div>
			
			</div> 
	
		  <footer>
			<p>&copy; 2016 Company, Inc.</p>
		  </footer>
		</div> <!-- /container -->
	
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