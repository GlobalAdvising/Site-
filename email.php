<?php 

include_once('config.php');


$query = "SELECT email FROM usuarios";


 /*execute multi query */
 if ($conexao->multi_query($query)) {
    do {
       /* store first result set */
       if ($result = $conexao->use_result()) {
           while ($row = $result->fetch_row()) {
              $dados=$row[0];
              $para =  $dados;
              $assunto = "Convite de Evento";
              $corpo = "ola esse email e auomatico";
              $headers = "From:mm.aragao@sempreceub.com";
              if(mail($para, $assunto, $corpo, $headers)){
                  echo"email enviado com sucesso para $para";
              }else{
                  echo "email n enviado $para";
              
              }
           }
           $result->close(0);
       }
   } while ($conexao->next_result());
   header('Location: aviso.php');

}



?>