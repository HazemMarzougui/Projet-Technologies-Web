<?php
include_once '../../../../config.php';
include '../../../../controller/typeC.php';

$typeC=new typeC();
$rec=$typeC->supprimerretype($_POST['rec']);
header('location:type.php');

?>
