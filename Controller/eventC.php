<?php
class eventC {
    function afficherreevent(){
        $sql="SELECT * FROM eventshh";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
         function afficherreeventseule($id){
        $sql="SELECT * FROM eventshh where id=$id";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
      
      
    function supprimerreevent($id){
        $sql=" DELETE FROM eventshh WHERE id=:id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id' , $id);
        try{
            $req->execute();
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }




function AJoutercev($cmd)
{
    $sqlc= "INSERT INTO `eventshh` VALUES (:id,:nm,:type,:dat,:img)";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
    $recipesStatement->execute(['id'=>$cmd->getid_evnt(),
            'nm'=>$cmd->getnom_event(),
            'type'=> $cmd->gettype_event(),
            'dat'=> $cmd->getdate(),
            'img'=>$cmd->getimage(),
            
           
           



    ]);
 }
 catch(Exception $e){ 
    
             die("erreur:".$e->getMessage());
}
}


    function updatevent($id,$nom,$date)
{
$sqlc= "UPDATE `eventshh` SET nomE=:nm,dateE=:dat WHERE id=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
    $recipesStatement->execute([  'id'=>$id,
            'nm'=>$nom,
            'dat'=>$date,
            

            
                 
                 ]);
}
 catch(Exception $e){ 
    
             die("erreur:".$e->getMessage());
}

}
 function Trieevent(){
        $sql="SELECT * FROM eventshh order by dateE";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
    function recherche($search_value)
    {
        $sql="SELECT * FROM eventshh where   (id like '$search_value' or nomE like '%$search_value%' or typeE like '%$search_value%' or dateE like '%$search_value%') ";

        //global $db;
        $db =Config::getConnexion();

        try{
            $result=$db->query($sql);

            return $result;

        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }




}
?>