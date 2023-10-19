<?php 
$succes=false;

session_start();
if(!isset($_SESSION['code'])){
    header("Location:forgetpassword.php");
}
if(isset($_POST['password'])){
    
    include_once '../../Controller/UserC.php';
    $userC = new UserC();
    $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    $userC->ModifierPassword($_SESSION['iduser'],$hashed_password);
    $succes=true;
    session_unset();
    session_destroy();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>verifcode</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
            <?php if($succes){?>
    <div class="alert alert-success">
password Updated , <a href="index.php">go to main page</a>     
</div>
    <?php }else{ ?>
                <?php if(!isset($_POST['code'])){ ?>
                <form action="verifcode.php" method="POST" >
                    <h2 class="text-center">set code</h2>
                   
                    <div class="form-group">
                        <input class="form-control" type="text" name="code" placeholder="code">
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="envoyer" value="Envoyer">
                    </div> 
                </form>
                <?php }else if($_POST['code']==$_SESSION['code']){ ?>
                    <form action="verifcode.php" method="POST" >
                    <h2 class="text-center">Modifer votre mot de passe </h2>
                   
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="mot de passe">
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="envoyer" value="Envoyer">
                    </div> 
                </form>
                    <?php }else{ ?>
                        <div class="alert alert-danger" id="erreur">
                        Code incorrect
                        </div>
                        <?php }} ?>
            </div>
        </div>
    </div>
    
</body>
</html>