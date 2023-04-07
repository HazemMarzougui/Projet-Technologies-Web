<?php
	include '../Config.php';
	include_once '../Model/Produits.php';
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
			$sql="INSERT INTO produits (idUser,NomP,prix,quantite,img) 
			VALUES (:idUser,:NomP,:prix,:quantite,:img)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'idUser' => $produits->getidUser(),
					'NomP' => $produits->getNomP(),
					'prix' => $produits->getprix(),
					'quantite' => $produits->getquantite(),
					'img' => $produits->getimg(),
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
		




/////..............................Update............................../////
		function ModifierProduit($produits, $id){
			try {
				$db = config::getConnexion();
		$query = $db->prepare('UPDATE produits SET idUser = :idUser, NomP = :NomP, prix = :prix, quantite = :quantite, img = :img WHERE idProduit= :id');
				$query->execute([
					'idUser' => $user->getidUser(),
					'NomP' => $user->getNomP(),
					'prix' => $user->getprix(),
					'quantite' => $user->getquantite(),
					'img' => $user->getimg(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
	}	
?>
