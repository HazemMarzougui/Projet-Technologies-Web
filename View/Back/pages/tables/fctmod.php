<?php 

include_once '../../../../config.php';
include '../../../../controller/eventC.php';


if(!isset($_POST['id'])||!isset($_POST['nom'])||!isset($_POST['dat']))
{
	echo "erreur de ";
}
$eventC=new eventC();
$eventC->updatevent($_POST['id'],$_POST['nom'],$_POST['dat']);
header('location:event.php');




?>