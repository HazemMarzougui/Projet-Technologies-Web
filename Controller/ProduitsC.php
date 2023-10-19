
<?php
	class ProduitsC {




/////..............................Afficher............................../////
		function AfficherProduit(){
			$sql="SELECT * FROM produits";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}




		


/////..............................Supprimer............................../////
		function SupprimerProduit($idProduit){
			$sql="DELETE FROM produits WHERE idProduit=:idProduit";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idProduit', $idProduit);   
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}







/////..............................Ajouter............................../////
		function AjouterProduit($produits){
			$sql="INSERT INTO produits (NomP,prix,quantite,img,descriptionn,idC) 
			VALUES (:NomP,:prix,:quantite,:img,:descriptionn,:idC)";
			
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'NomP' => $produits->getNomP(),
					'prix' => $produits->getprix(),
					'quantite' => $produits->getquantite(),
					'img' => $produits->getimg(),
					'descriptionn' => $produits->getdesc(),
					'idC' =>$produits->getNomC(),
					
			]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}







/////..............................Affichage par la cle Primaire............................../////
		function RecupererProduit($idProduit){
			$sql="SELECT * from produits where idProduit=$idProduit";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$produits=$query->fetch();
				return $produits;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		



/////..............................search............................../////
		function Recherche($nomP){
			$sql="SELECT * from produits where NomP like '".$nomP."%' ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}

		
/////..............................searchByCat............................../////
		function RechercheCat($idC){
			$sql="SELECT * from produits where idC=$idC";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}


/////..............................tri............................../////
	function TriNom(){
	$sql="SELECT * FROM produits order by NomP ASC";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch(Exception $e){
		die('Erreur:'. $e->getMessage());
	}
}

/////..............................tri Par Prix Croissant............................../////
function TriPrixAs(){
	$sql="SELECT * FROM produits order by prix ASC";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch(Exception $e){
		die('Erreur:'. $e->getMessage());
	}
}
/////..............................tri Par Prix Deroissant............................../////
function TriPrixDec(){
	$sql="SELECT * FROM produits order by prix DESC";
	$db = config::getConnexion();
	try{
		$liste = $db->query($sql);
		return $liste;
	}
	catch(Exception $e){
		die('Erreur:'. $e->getMessage());
	}
}

/////..............................Update............................../////
		function ModifierProduit($produits, $id){
			try {
				$db = config::getConnexion();
		$query = $db->prepare('UPDATE produits SET  NomP = :NomP, prix = :prix, quantite = :quantite, img = :img , descriptionn = :descriptionn , NomC = :NomC   WHERE idProduit= :id');
				$query->execute([
					'NomP' => $produits->getNomP(),
					'prix' => $produits->getprix(),
					'quantite' => $produits->getquantite(),
					'img' => $produits->getimg(),
					'descriptionn' => $produits->getdesc(),
					'NomC' => $produits->getNomC(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		

		/////.............. Recuperer Categorie par id ///////////////////////
	function RecupererCategorie($idC){
		$sql="SELECT * from categorie where idC=$idC";
		$db = config::getConnexion();
		try{
			$query=$db->prepare($sql);
			$query->execute();

			$categorie=$query->fetch();
			return $categorie;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}

	
 	////////////////////////  AFFICHAGE CATEGORIE ////////////////////////////
         
	 function AfficherCategorie(){
		$sql="SELECT * FROM categorie";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
		}
		catch(Exception $e){
			die('Erreur:'. $e->getMessage());
		}
	}
 

///////////////////////// Pagination /////////////////////////////////

function pagination($start,$nbelement){
	$sql = "SELECT * FROM produits  LIMIT :start, :nbelement";
	$db = config::getConnexion();
	try{
		$query = $db->prepare($sql);
		$query->bindValue(':start', $start, PDO::PARAM_INT);
		$query->bindValue(':nbelement', $nbelement, PDO::PARAM_INT);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		catch(Exception $e){
			die('Erreur: pagination'. $e->getMessage());
		}
}

/////////////////////// nombre des Produits //////////////////////////////
function nombredesproduit(){
	$sql="SELECT COUNT(*) AS nb_produit FROM produits";
	$db = config::getConnexion();
		try{
			$query = $db->prepare($sql);
			$query->execute();
			$result = $query->fetch();
			$nbproduit = (int) $result['nb_produit'];
			return $nbproduit;
			}
			catch(Exception $e){
			die('Erreur: nombredesproduit'. $e->getMessage());
			}
		}
		}
			?>
