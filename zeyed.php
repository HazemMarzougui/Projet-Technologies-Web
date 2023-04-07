<?php
require 'C:\wamp64\www\adminprojet\template\pages\tables\Controller/produitC.php';
if (isset($_GET['id'])) {
    $recC = new reclamationC();
    $recC->updaterec($_GET['id']);
    header('Location:index.php');



}
else {
    echo 'erreur lors de la suppression';
}

?>