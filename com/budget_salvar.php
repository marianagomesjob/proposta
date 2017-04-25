<?php
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
          if(isset($_POST['budget_empresa'])){
            $budget_empresa=$_POST['budget_empresa'];
            $budget_segmento=$_POST['budget_segmento'];
            $budget_num_processo=$_POST['budget_num_processo'];
            $budget_cliente=$_POST['budget_cliente'];
            $budget_assunto=$_POST['budget_assunto'];
            $budget_respt=$_POST['budget_respt'];
            $budget_respc=$_POST['budget_respc'];
            $budget_respcoord=$_POST['budget_respcoord'];
            $budget_prop_com=$_POST['budget_prop_com'];
            $budget_prop_tec=$_POST['budget_prop_tec'];
            $budget_estima_valor=$_POST['budget_estima_valor'];
            $budget_valor=$_POST['budget_valor'];
            $budget_chance=$_POST['budget_chance'];
            $budget_prioridade=$_POST['budget_prioridade'];
            //$budget_datacompa=$_POST['budget_datacompa'];
            //$budget_datacompb=$_POST['budget_datacompb'];  
            $budget_interacao=$_POST['budget_interacao'];            
            $budget_status=$_POST['budget_status'];
            $budget_observacao=$_POST['budget_observacao'];
            $budget_vira_prop=$_POST['budget_vira_prop'];
            $budget_existe_pro=$_POST['budget_existe_pro'];

            $sql = "INSERT INTO enfil_budget(budget_empresa, budget_segmento, budget_num_processo,budget_cliente,budget_assunto,budget_respt, budget_respc, budget_respcoord, budget_prop_tec, budget_prop_com, budget_estima_valor, budget_valor, budget_chance, budget_prioridade,budget_interacao, budget_status, budget_observacao, budget_vira_prop,budget_existe_pro) VALUES ('$budget_empresa','$budget_segmento',$budget_num_processo','$budget_cliente','$budget_assunto','$budget_respt','$budget_respc','$budget_respcoord','$budget_prop_tec','$budget_prop_com','$budget_estima_valor','$budget_valor','$budget_chance','$budget_prioridade','$budget_interacao','$budget_status','$budget_observacao','$budget_vira_prop','$budget_existe_pro')";
            $sql =  mysqli_query($conn, $sql);
            if(mysqli_affected_rows($conn) > 0){
              echo "Carrega modal de sucesso <a href='index2.php'>voltar</a>";
            }else{
              echo "As informações não foram armazendas corretamente";
            }


           }
        } 
      ?>
          
      </div>
    </body>
</html>

