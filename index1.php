<?php

include 'Controller/produitC.php';
require_once 'Model/produit.php';

$livC = new type_rec2();
if (isset($_REQUEST['add'])) {
    $type_rec= new type_rec(0, $_POST['prix'],$_POST['nom'],0);
    $livC->ajoutertype_rec2($type_rec);

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Login Form - Pure Coding</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input  placeholder="text" name="type" value="" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="" name="idt" value="" required>
			</div>

            <div class="input-group">
                <button name="submit"  class="btn">envoyer</button>
            </div>
            <p class="login-register-text">home <a href="index.php">back her</a>.</p>
		</form>
	</div>
</body>
</html>