<?php
class typeC
{
    private $id;
    public $type;
    public $idt;






    function __construct($id,$type,$idt){
        $this->idt=$id;
        $this->type=$type;
        $this->idt=$idt;


    }

    public function getid()
    {
        return $this->id;
    }
    public function gettype()
    {
        return $this->type;
    } public function getidt()
{
    return $this->idt;
}

}
function supprimertype_rec2($id)
{
    $sql="DELETE FROM type_rec2 WHERE id= :id";
    $db = config::getConnexion();
    $req=$db->prepare($sql);
    $req->bindValue(':id',$id);
    try{
        $req->execute();
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
require 'C:\wamp64\www\adminprojet\template\pages\tables\Controller/produitC.php';
if (isset($_GET['id'])) {
    $typeC = new typeC();
    $typeC->supprimertype($_GET['id']);
    header('Location:index.php');


}
else {
    echo 'erreur lors de la suppression';
}
