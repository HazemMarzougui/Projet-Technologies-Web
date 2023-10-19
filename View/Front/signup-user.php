<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
<script>
    function verifconfirm(){
        let password=document.getElementById('passworduser').value;
        let cpassword=document.getElementById('confirmpassword').value;
        console.log(password);
        console.log(cpassword);
        console.log("enter");
        if(password===""){
            document.getElementById('erreur').style.display="block";
            document.getElementById('erreur').innerHTML="saisir votre mot de passe ";
            return false;
        }else if (!(cpassword===password)) {

            document.getElementById('erreur').innerHTML="confirmer votre password";
            document.getElementById('erreur').style.display="block";
            return false;

        }
        return true;
    }

</script>
</head>
<?php 
include_once '../../Controller/UserC.php';
include_once '../../Model/User.php';

$userC=new UserC();
$erreur="";
$iserreur=false;
if(isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['adresse'])&&isset($_POST['email'])&&isset($_POST['dob'])&&isset($_POST['passworduser'])&&isset($_POST['confirmpassword'])){
    $userexist=$userC->RecupererUserByEmail($_POST['email']);
    if($userexist==false){
        $password= password_hash($_POST['passworduser'], PASSWORD_DEFAULT);

        $user = new User(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['adresse'], 
            $_POST['email'],
            $_POST['dob'],
            $password,
            1,
        );
        $userC->AjouterUser($user);
        echo "<script>
        alert('WELCOME')
        </script>";
        header("Location:login-user.php");


    }else{
        $iserreur=true;
        $erreur="E-mail existe déja  ";
    }
}
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form method="POST"   onSubmit="return verifconfirm()">
                    <h2 class="text-center">Signup</h2>
                    <p class="text-center">It's quick and easy.</p>
                    <div class="form-group">
                        <input class="form-control" type="text" name="nom" id="nom" placeholder="nom"  value="<?php if(isset($_POST['nom'])) echo $_POST['nom'] ?>" onkeyup="nameValidation()"  >
                        <div>
                       <p style="color :red" id="nomr"></p>
                        </div>
                        </div>  
                    <div class="form-group">
                        <input class="form-control" type="text" name="prenom" id="prenom" placeholder="prenom"  onkeyup="prenomValidation()" required >
                        <div>
            <p style="color :red" id="prenomr"></p>
            </div>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="adresse" id="adresse" placeholder="adresse" onkeyup="adresseValidation()"  required>
                        <div>
            <p style="color :red" id="adresser"></p>
            </div>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" id="email" placeholder="Email" onkeyup="emailValidation()"  required>
                        <div>
            <p style="color :red" id="emailr"></p>
            </div>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="date" name="dob" placeholder="date de naissance" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="passworduser" id="passworduser" placeholder="Password" onkeyup="passValidation()"  >
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm password">
                    </div>
                    <div class="alert alert-danger" style="display:none;" id="erreur">

                    </div>
                    <?php if($iserreur){ ?>
                    <div class="alert alert-danger" id="erreur">
                        <?php echo $erreur; ?>
                    </div>
                    <?php } ?>

                    
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="login-user.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
    <script src="controle2.js"></script>  
</body>
</html>