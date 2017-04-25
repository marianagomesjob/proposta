<?php
  //Arquivo de conexão com BD
	include_once("conexao.php");
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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
		<link rel="stylesheet" href="assets/css/estilo.css" type="text/css">
		<script src="assets/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
  	</head>
  	<body>
  		<div class="container theme-showcase" role="main">
       


        <?php

        if(isset($_POST['acao'])){
          if(isset($_POST['num_processo'])){
            $num_processo=$_POST['num_processo'];
            $cliente=$_POST['cliente'];
            $fornecedor=$_POST['fornecedor'];
            $observacao=$_POST['observacao'];
            $status=$_POST['status'];
            $resp_tec=$_POST['resp_tec'];
            $resp_com=$_POST['resp_com'];
            $respa=$_POST['respa'];
            $respb=$_POST['respb'];
            $respc=$_POST['respc'];
            $respd=$_POST['respd'];
            $respe=$_POST['respe'];
            $respf=$_POST['respf'];


            $sql = "INSERT INTO enfil_proposta (num_processo,cliente,fornecedor, observacao,status,resp_tec,resp_com,respa,respb,respc,respd,respe,respf) VALUES ('$num_processo','$cliente','$fornecedor','$observacao','$status','$resp_tec','$resp_com','$respa','$respb','$respc','$respd','$respe','$respf')";
            $sql =  mysqli_query($conn, $sql);

            if(mysqli_affected_rows($conn) > 0){
              echo "Carrega modal de sucesso<br>";
			  echo "<a href='index2.php'>voltar</a>";

            }else{
              echo "nao DEU CERTO NÃO";
            }


           }
        } 
      ?>
       		
      </div>
   	</body>
</html>

