

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="style.css">

  <title>Register Form - Pure Coding</title>
</head>
<body>
<div class="container">
  <form action="reclamation/index.php" method="get" class="login-email">
    <p class="login-text" style="font-size: 2rem; font-weight: 800;">Reclamation</p>

    <label for="report">Choose le type de report:</label><br>
    <select name="report" id="report">
      <option value="">Choose</option>
      <option value="1"> livraison</option>
      <option value="2">reporter persone</option>
      <option value="3">account</option>
      <option value="4">bug</option>
    </select>
    <br><br>
    <div class="input-group">
      <button name="submit"  class="btn">Reclamer</button>
    </div>
    <p class="login-register-text">annule la reclamation  <a href="index.php">back home </a>.</p>
  </form>
</div>
</body>
</html>
