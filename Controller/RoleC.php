<?php
	
	include_once dirname(__FILE__).'/../Config.php';
	include_once dirname(__FILE__).'/../Model/Role.php';
	
	class RoleC {




/////..............................Afficher............................../////
		function AfficherRole(){
			$sql="SELECT * FROM rolee";
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
		function SupprimerRole($idR){
			$sql="DELETE FROM rolee WHERE idR=:idR";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idR', $idR);   
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}







/////..............................Ajouter............................../////
		function AjouterRole($role){
			$sql="INSERT INTO rolee (NomR) 
			VALUES (:NomR)";
			
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'NomR' => $role->getNomR(),
			]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}







/////..............................Affichage par la cle Primaire............................../////
		function RecupererRole($idR){
			$sql="SELECT * from rolee where idR=$idR";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$role=$query->fetch();
				return $role;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		




/////..............................Update............................../////
		function ModifierRole($role, $id){
			try {
				$db = config::getConnexion();
		$query = $db->prepare('UPDATE rolee SET  NomR = :NomR WHERE idR= :id');
				$query->execute([
					'NomR' => $role->getNomR(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
	}	
?>
