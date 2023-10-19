<?php
// Start the session

include_once '../../Controller/UserC.php';
include_once '../../Controller/RoleC.php';
include_once '../../Model/User.php';
session_start();
$userC=new UserC();
$roleC=new RoleC();

$erreur="";
$iserreur=false;
if(isset($_SESSION['idU'])&& $_SESSION['idU']!=-1){
    header("Location:index.php");

}else{
    $_SESSION['idU']=-1;
    $_SESSION['email']='';
    $_SESSION['role']='';
    if(isset($_POST['email'])&&isset($_POST['passworduser'])){
        $userexist=$userC->RecupererUserByEmail($_POST['email']);
        if($userexist==false){
            $iserreur=true;
            $erreur="Email incorrect ";

        }else{
            if(password_verify($_POST['passworduser'],$userexist['passworduser'])==false){
                $iserreur=true;
                $erreur="Mot de passe incorrect";
            }else{

                $_SESSION['idU']=$userexist['idU'];
                $_SESSION['email']=$userexist['email'];
                $role=$roleC->RecupererRole($userexist['idR']);
                $_SESSION['role']=$role['NomR'];
                if($_SESSION['role']=="Client"){

                    header("Location:index.php");

                }else if($_SESSION['role']=="Admin"){
                    header("Location:/Works/Final/SwitchiniFinal/View/Back/pages/User/AfficherUser.php");

                }
            }
        }
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
                <form action="login-user.php" method="POST" >
                    <h2 class="text-center">Login</h2>
                    <p class="text-center">Login with your email and password.</p>
                   
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email ">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="passworduser" placeholder="Password" required>
                    </div>
                    <?php if($iserreur){ ?>
                    <div class="alert alert-danger" id="erreur">
                        <?php echo $erreur; ?>
                    </div>
                    <?php } ?>
                    <div class="link forget-pass text-left"><a href="forgetpassword.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div> 
                    <a href="signup-user.php">Signup now</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>