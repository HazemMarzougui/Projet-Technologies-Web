<?php 

include_once '../../../../config.php';
include '../../../../controller/typeC.php';
include '../../../../model/type.php';


if(!isset($_POST['id'])||!isset($_POST['nom'])||!isset($_POST['dis']))
{
	echo "erreur de ";
}
$typ=new type($_POST['id'],$_POST['nom'],$_POST['dis']);
$typeC=new typeC();
$typeC->AJouterptype($typ);
header('location:type.php');




?>