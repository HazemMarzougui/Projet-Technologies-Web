<?php
	include '../../../../Controller/ProduitsC.php';
	include '../../../../Config.php';
  
	$message = "" ; 
	$produitC=new ProduitsC();
	$produitC->SupprimerProduit($_GET["idProduit"]);
	header('Location:AfficherProduit.php?message=Produit Supprimé avec succés');
?>