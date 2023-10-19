<?php
class typeC {
    function afficherretype(){
        $sql="SELECT * FROM typeshh";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
        function afficherretypeseule($id){
        $sql="SELECT * FROM typeshh where id=$id";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }
  

    function supprimerretype($id){
        $sql=" DELETE FROM typeshh WHERE id=:id";
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




function AJouterptype($cmd)
{
    $sqlc= "INSERT INTO `typeshh` VALUES (:id,:nom,:dis)";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
    $recipesStatement->execute(['id'=>$cmd->getid(),
            'nom'=>$cmd->getnome_type(),
            'dis'=> $cmd->getdiscount(),
    
           



    ]);
 }
 catch(Exception $e){ 
    
             die("erreur:".$e->getMessage());
}
}


    function Modifier($cmd)
{
$sqlc= "UPDATE `typeshh` SET nom_type=:nm,discount=:dis WHERE id=:id  ";
$db=config::getConnexion();
try{ $recipesStatement = $db->prepare($sqlc);
    $recipesStatement->execute([  'id'=>$cmd->getid(),
            'nm'=>$cmd->getnome_type(),
             'dis'=>$cmd->getdiscount(),
            
            
                 
                 ]);
}
 catch(Exception $e){ 
    
             die("erreur:".$e->getMessage());
}

}



}
?>


