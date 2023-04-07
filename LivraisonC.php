<?php

    require_once '../../config.php';
    require_once '../../Model/livraison.php';


    Class LivraisonC {

        function ajouterlivraison($livraison)
        {
            $config = config::getConnexion();
            try {
                $query = $config->prepare('
                INSERT INTO commande
                (Reference,prix,Nom)
                VALUES
                (:reference,:prix,:nom)
                ');
                $query->execute([
                    'reference'=>$livraison->getref(),
                    'prix'=>$livraison->getprix(),
                    'nom'=>$livraison->getnom(),
                    //'date'=>$livraison->getdate(),
                    
                ]);
               
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function afficherliv()
        {
            $requete = "select * from commande";
            $config = config::getConnexion();
            try {
                $querry = $config->prepare($requete);
                $querry->execute();
                $result = $querry->fetchAll();
                return $result ;
            } catch (PDOException $th) {
                 $th->getMessage();
            }
        }
        function supprimerliv($ref)
        {
            $sql="DELETE FROM commande WHERE Reference= :ref";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':ref',$ref);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
        }


    }
    function modifierliv($liv)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
            UPDATE comment SET
            reference=:reference ,
            prix=:prix ,
            nom=:nom,
            where date=:date
            ');
            $querry->execute([
               
                'reference'=>$liv->getreference(),
                'prix'=>$liv->getprix(),
                'nom'=>$liv->getnomt(),
                'date'=>$liv->getdate(),
             
            ]);
        } catch (PDOException $th) {
             $th->getMessage();
        }
    }

    


    ?>
