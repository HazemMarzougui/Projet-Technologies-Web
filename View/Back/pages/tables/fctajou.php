<?php 

include_once '../../../../config.php';
include '../../../../controller/eventC.php';
include '../../../../model/event.php';


if(!isset($_POST['id'])||!isset($_POST['nom'])||!isset($_POST['dat'])||!isset($_POST['id_type']))
{
	echo "erreur de ";
}

if (isset($_FILES['image']) && $_FILES['image']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['image']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $fileInfo = pathinfo($_FILES['image']['name']);
                $extension = $fileInfo['extension'];
                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png','jfif'];
                if (in_array($extension, $allowedExtensions))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . basename($_FILES['image']['name']));
                        echo "L'envoi a bien été effectué !.<br>"; 
                      //  echo  'uploads/' . basename($_FILES['screenshot']['name']);
                }
        }
} 


$evt=new event($_POST['id'],$_POST['nom'],$_POST['id_type'],$_POST['dat'],$_FILES['image']['name']);
$eventC=new eventC();
$eventC->AJoutercev($evt);
header('location:event.php');




?>