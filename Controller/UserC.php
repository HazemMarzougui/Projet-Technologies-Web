<?php
	include_once dirname(__FILE__).'/../Config.php';
	include_once dirname(__FILE__).'/../Model/User.php';

	class UserC {




/////..............................Afficher............................../////
		function AfficherUser(){
			$sql="SELECT * FROM user";
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
		function SupprimerUser($idU){
			$sql="DELETE FROM user WHERE idU=:idU";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idU', $idU);   
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}







/////..............................Ajouter............................../////
		function AjouterUser($user){
			$sql="INSERT INTO user (nom,prenom,adresse,email,dob,passworduser,idR) 
			VALUES (:nom,:prenom,:adresse,:email,:dob,:passworduser,:idR)";
			
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom' => $user->getnom(),
					'prenom' => $user->getprenom(),
					'adresse' => $user->getadresse(),
					'email' => $user->getemail(),
					'dob' => $user->getdob(),
					'passworduser' => $user->getpassworduser(),
					'idR' =>$user->getNomR(),
					
			]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}







/////..............................Affichage par la cle Primaire............................../////
		function RecupererUser($idU){
			$sql="SELECT * from user where idU=$idU";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
	///////////////////////////////Email////////////////////////////////
		function RecupererUserByEmail($email){
			$sql="SELECT * from user where email='".$email."'";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		



/////..............................search............................../////
		function Recherche($nomP){
			$sql="SELECT * from user where nom like '".$nomP."%' ";
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
function triUser(){
	$sql="SELECT * FROM user order by nom ASC";
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
		function ModifierUser($user, $id){
			try {
				$db = config::getConnexion();
		$query = $db->prepare('UPDATE user SET  nom = :nom ,prenom = :prenom, adresse = :adresse, email = :email, dob = :dob , passworduser = :passworduser , idR = :idR   WHERE idU =:id');
				$query->execute([
					'nom' => $user->getnom(),
					'prenom' => $user->getprenom(),
					'adresse' => $user->getadresse(),
					'email' => $user->getemail(),
					'dob' => $user->getdob(),
					'passworduser' => $user->getpassworduser(),
					'idR' => $user->getNomR(),
					'id' => $id,
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				die($e->getMessage());
			}
		}

		////////////////////////////////////////////
		
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

//////////////////////////////////////////////////////////////////
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

////////////////////////////modifier pass////////////////////////////////////////
function ModifierPassword($id,$password){
	try {
		$db = config::getConnexion();
$query = $db->prepare('UPDATE user SET  passworduser = :passworduser    WHERE idU =:id');
		$query->execute([
			
			'passworduser' => $password,
			'id' => $id,
	
		]);
	} catch (PDOException $e) {
		die($e->getMessage());
	}
}
}



?>
