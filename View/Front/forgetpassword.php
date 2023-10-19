<?php
include_once '../../Controller/UserC.php';
$userC=new UserC();

if(isset ($_POST['email'])){

    $userexist=$userC->RecupererUserByEmail($_POST['email']);
    if($userexist!=false){
    $code=bin2hex(random_bytes(6));
    $email="malek.soussi@esprit.tn";
$headers = 'From: ' .$email . "\r\n". 
'Reply-To: ' . $email. "\r\n" . 
'X-Mailer: PHP/' . phpversion();
        
      $retval =mail($_POST['email'], 'Forget Password ', "Votre Code de verification est : " .$code,$headers);
         
         if( $retval == true ) {
            session_start();
            $_SESSION['code']=$code;
            $_SESSION['iduser']=$userexist['idU'];
            header("Location:verifcode.php");

         }
         

}else{
    echo "<script> alert('email incorrect ') </script>";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="forgetpassword.php" method="POST" >
                    <h2 class="text-center">Forget Password</h2>
                   
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email ">
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="envoyer" value="Envoyer">
                    </div> 
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>