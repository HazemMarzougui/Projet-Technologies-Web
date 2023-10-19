
let roleInput = document.getElementById("NomR");


var letters = /^[A-Za-z]+$/;

    function roleValidation() {
      if (roleInput.value.length < 3) {
        roleError = " Le role doit compter au minimum 3 caractères.";
        document.getElementById("roler").innerHTML = roleError;
    
        return false;
      }
      if (!roleInput.value.match(letters)) {
        roleError2 = "Veuillez entrer un role valid ! (seulement des lettres)";
        // roleValid2 = false;
        document.getElementById("roler").innerHTML = roleError2;
        return false;
      }
      document.getElementById("roler").innerHTML =
        "<p style='color:green'> Correct </p>";
    
      return true;
    }

    