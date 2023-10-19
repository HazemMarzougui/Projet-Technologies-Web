<?php
	include '../../../../Controller/CategorieC.php';
	include '../../../../Config.php';
  	include_once '../../../../Model/Categorie.php';

	$message = "" ; 
	$categorieC=new CategorieC();
	$categorieC->SupprimerCategorie($_GET["idC"]);
	header('Location:AfficherC.php?message=Categorie Supprimé avec succés');
?>