<?php
  session_start();
  //Arquivo de conexão 
  include_once ("conexao.php");

  //-----*lê os dados do enfil_pessoas*------
  function lerpessoa($id_pessoa){
  
      $conn=conectar();
      $result=mysqli_query($conn,"SELECT `id_pessoa`, `pessoa_nome`, `pessoa_tipo_contato`, `pessoa_email`, `pessoa_cliente`, `pessoa_telefone`, `pessoa_atribuido`FROM enfil_pessoa WHERE id_pessoa= ".$id_pessoa);
      mysqli_close($conn);
      $rows = mysqli_fetch_assoc($result);
      foreach($rows as $column => $value) {
          //echo $column." = ".$value;
          $_SESSION['pessoa'][$column]=$value;
      }
  
  }

if (isset($_POST["linha"])){
    $conn=conectar();
    if (isset($_SESSION['id_pessoa'])){
        //Alterando o enfil_pessoa
        $linha=utf8_encode($_POST['linha']);
        $sql="UPDATE `enfil_pessoa` ";
        $sql.="SET `pessoa_nome`='$_POST[pessoa_nome]',`pessoa_tipo_contato`='$_POST[pessoa_tipo_contato]',`pessoa_email`='$_POST[pessoa_email]',`pessoa_cliente`='$_POST[pessoa_cliente]',`pessoa_telefone`='$_POST[pessoa_telefone]',`pessoa_atribuido`='$_POST[pessoa_atribuido]', ";
        $sql.="WHERE `id_pessoa`=$_SESSION[id_pessoa]";
        
        if (!mysqli_query($conn,$sql))
          {
          die('Error1: ' . mysqli_error($conn));
           }

        $mensagem="Alteração realizada com sucesso.";
    }else{
          $sql="SELECT id_pessoa from enfil_pessoa";
          $result=mysqli_query($conn,$sql);
          $fila=mysqli_fetch_array($result);
          $idnovo=$fila['id_pessoa'];            
            
            if (!mysqli_query($conn,$sql))
            {
            die('Error2: ' . mysqli_error($conn));
            }
            
            //inserindo a  no enfil_pessoa
            $sql="INSERT INTO `enfil_pessoa(`id_pessoa`, `pessoa_nome`, `pessoa_tipo_contato`, `pessoa_email`, `pessoa_cliente`, `pessoa_telefone`, `pessoa_atribuido`)" ;
            $sql.="VALUES ($idnovo,'$_POST[pessoa_nome]','$_POST[pessoa_tipo_contato]','$_POST[pessoa_email]','$_POST[pessoa_cliente]','$_POST[pessoa_telefone]','$_POST[pessoa_atribuido]')";
           
            if (!mysqli_query($conn,$sql))
            {
            die('Error3: ' . mysqli_error($conn));
            }
            $mensagem=" enfil_pessoa inserido.";
        }
    }
    mysqli_close($conn);
    echo "<script>alert('".$mensagem."');</script>";
    unset($_SESSION['pessoa']);
    echo "<script>window.location=\"pessoa.php\"</script>";
  
}


?>