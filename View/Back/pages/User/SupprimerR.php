<?php
	include '../../../../Controller/RoleC.php';
	

	$message = "" ; 
	$roleC=new RoleC();
	$roleC->SupprimerRole($_GET["idR"]);
	header('Location:AfficherRole.php?message=Role Supprimé avec succés');
?>