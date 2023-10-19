<?php 

include_once '../../../../config.php';
include '../../../../controller/typeC.php';
include '../../../../model/type.php';


if(!isset($_POST['id'])||!isset($_POST['type'])||!isset($_POST['dis']))
{
	echo "erreur de ";
}
$typ=new type($_POST['id'],$_POST['type'],$_POST['dis']);
$typeC=new typeC();
$typeC->Modifier($typ);
header('location:type.php');




?>