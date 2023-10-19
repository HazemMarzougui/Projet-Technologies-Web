<?php
$email="malek.soussi@esprit.tn";
$headers = 'From: ' .$email . "\r\n". 
'Reply-To: ' . $email. "\r\n" . 
'X-Mailer: PHP/' . phpversion();
        
      $retval =mail('hazem.marzougui@esprit.tn', 'My Subject', "sss",$headers);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
         
?>