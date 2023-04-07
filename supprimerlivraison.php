<?php
require '../../Controller/LivraisonC.php';
if (isset($_GET['ref'])) {
    $LivC = new LivraisonC();
    $LivC->supprimerliv($_GET['ref']);
    header('Location:index.php');


}
else {
    echo 'erreur lors de la suppression';
}


?>