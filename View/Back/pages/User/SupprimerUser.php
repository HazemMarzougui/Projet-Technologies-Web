<?php
	include '../../../../Controller/UserC.php';

	$message = "" ; 
	$userC=new UserC();
	$userC->SupprimerUser($_GET["idU"]);
	header('Location:AfficherUser.php?message=User Supprimé avec succés');
?>