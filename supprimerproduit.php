<?php
require 'C:\wamp64\www\adminprojet\template\pages\tables\Controller/produitC.php';
if (isset($_GET['id'])) {
    $recC = new reclamationC();
    $recC->supprimerrec($_GET['id']);
    header('Location:index.php');


}
else {
    echo 'erreur lors de la suppression';
}

require 'C:\wamp64\www\adminprojet\template\pages\tables\Controller/produitC.php';
if (isset($_GET['idt'])) {
    $recC = new type_recC();
    $recC->supprimertype_rec($_GET['idt']);
    header('Location:index.php');


}
else {
    echo 'erreur lors de la suppression';
}

require 'C:\wamp64\www\adminprojet\template\pages\tables\Controller/produitC.php';
if (isset($_GET['idk'])) {
    $typeC = new typeC();
    $typeC->supprimertype($_GET['idk']);
    header('Location:index.php');


}
else {
    echo 'erreur lors de la suppression';
}

?>