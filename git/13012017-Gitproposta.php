
		<?php 
          /*Cadastrar as infomações na tabela num_processo*/
          if (isset($_POST['acao']) && $_POST['acao']== 'salvar'){
            $num_processo = strip_tags(trim($_POST['num_processo']));
            $cliente = strip_tags(trim($_POST['cliente']));
            $fornecedor = strip_tags(trim($_POST['fornecedor']));
            $observacao = strip_tags(trim($_POST['observacao']));
            $status = strip_tags(trim($_POST['status']));
            $resp_tec = strip_tags(trim($_POST['resp_tec']));
            $resp_com = strip_tags(trim($_POST['resp_com']));
            $respa = strip_tags(trim($_POST['respa']));
            $respb = strip_tags(trim($_POST['respb']));
            $respc = strip_tags(trim($_POST['respc']));
            $respd = strip_tags(trim($_POST['respd']));
            $respe = strip_tags(trim($_POST['respe']));
            $respf = strip_tags(trim($_POST['respf']));

            if($num_processo == ''){
              echo '<script> alert("Informe o nome da num_processo!")</script>';
            }else{
              $result_usuario_acesso = "INSERT INTO enfil_proposta (num_processo,cliente,fornecedor, observacao,status,resp_tec,resp_com,respa,respb,respc,respd,respe,respf) VALUES ('$num_processo','$cliente','$fornecedor','$observacao','$status','$resp_tec','$resp_com','$respa','$respb','$respc','$respd','$respe','$respf')";
              if ($result_usuario_acesso){
                echo '<script> Alert ("Número de processo cadastrado!");location.href="index.php"</script>';  
              }
            }
          
          }
        ?>
		
		
		<?php 
		/*
		
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
              
          }
        } 
		
		*/
		
		
		?>