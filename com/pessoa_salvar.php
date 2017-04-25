<?php 
  //arquivo de conexão 
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
            if(isset($_POST['pessoa_nome'])){
              $pessoa_nome=$_POST['pessoa_nome'];
              $pessoa_tipo_contato=$_POST['pessoa_tipo_contato'];
              $pessoa_email=$_POST['pessoa_email'];
              $pessoa_telefone=$_POST['pessoa_telefone'];
              $pessoa_atribuido=$_POST['pessoa_atribuido'];
              $pessoa_cliente=$_POST['pessoa_cliente'];
              
              $sql = "INSERT INTO enfil_pessoa(pessoa_nome,pessoa_tipo_contato,pessoa_email,pessoa_cliente,pessoa_telefone,pessoa_atribuido) VALUES ('$pessoa_nome','$pessoa_tipo_contato','$pessoa_email','$pessoa_cliente','$pessoa_telefone','$pessoa_atribuido')";
              $sql =  mysqli_query($conn, $sql);
              if(mysqli_affected_rows($conn) > 0){
                echo "Carrega modal de sucesso <a href='pessoa.php'>voltar</a>";
              }else{
                echo "Carrega modal de sucesso";
              }


             }
          } 
      ?>
          
      </div>
    </body>
</html>

