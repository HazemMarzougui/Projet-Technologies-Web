<?php
$destinataire =$_POST['mail']; 
$sujet = "Evénement:".$_POST['nom'];
$message ="Evénement num =".$_POST['id']."   Date   ".$_POST['dat']."   nom".$_POST['nom']; 
mail ($destinataire, $sujet, $message);
header('location:event.php');

?>