<?php
include_once '../../../../config.php';
include '../../../../controller/eventC.php';

$eventC=new eventC();
$rec=$eventC->supprimerreevent($_POST['rec']);
header('location:event.php');

?>
