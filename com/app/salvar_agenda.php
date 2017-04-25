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
          if(isset($_POST['agenda_atividade'])){
            $agenda_atividade=$_POST['agenda_atividade'];
            $agenda_data=$_POST['agenda_data'];
            $agenda_titulo=$_POST['agenda_titulo'];
            $agenda_titulo=$_POST['agenda_titulo'];
            $agenda_duracao=$_POST['agenda_duracao'];
            $agenda_atribuido=$_POST['agenda_atribuido'];
            $agenda_vinculo_prop=$_POST['agenda_vinculo_prop'];
            $agenda_nota=$_POST['agenda_nota'];

            $sql = "INSERT INTO enfil_agenda (agenda_atividade,agenda_titulo,agenda_data,agenda_duracao,agenda_atribuido,agenda_vinculo_prop,agenda_nota) VALUES ('$agenda_atividade','$agenda_titulo','$agenda_data','$agenda_duracao','$agenda_atribuido','$agenda_vinculo_prop','$agenda_nota')";
            $sql =  mysqli_query($conn, $sql);
            if(mysqli_affected_rows($conn) > 0){
              echo "Carrega modal de sucesso <a href='index2.php'>voltar</a>";
            }else{
              echo "Opa problema com o modal de sucesso";
            }


           }
        } 
      ?>
       		
      </div>
   	</body>
</html>

