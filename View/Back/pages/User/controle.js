let lNameInput = document.getElementById("nom");
let prenomInput = document.getElementById("prenom");
let passInput = document.getElementById("passworduser");
let adresseInput = document.getElementById("adresse");
let emailInput = document.getElementById("email");
let roleInput = document.getElementById("role");


var letters = /^[A-Za-z]+$/;

function nameValidation() {
    if (lNameInput.value.length < 3) {
      lNameError = " Le nom doit compter au minimum 3 caractères.";
      document.getElementById("nomr").innerHTML = lNameError;
  
      return false;
    }
    if (!lNameInput.value.match(letters)) {
      lNameError2 = "Veuillez entrer un nom valid ! (seulement des lettres)";
      // lNameValid2 = false;
      document.getElementById("nomr").innerHTML = lNameError2;
      return false;
    }
    document.getElementById("nomr").innerHTML =
      "<p style='color:green'> Correct </p>";
  
    return true;
  }
  function prenomValidation() {
    if (prenomInput.value.length < 3) {
      prenomError = " Le prenom doit compter au minimum 3 caractères.";
      document.getElementById("prenomr").innerHTML = prenomError;
  
      return false;
    }
    if (!prenomInput.value.match(letters)) {
      prenomError2 = "Veuillez entrer un prenom valid ! (seulement des lettres)";
      // prenomValid2 = false;
      document.getElementById("prenomr").innerHTML = prenomError2;
      return false;
    }
    document.getElementById("prenomr").innerHTML =
      "<p style='color:green'> Correct </p>";
  
    return true;
  }
  function passValidation() {
    if (
        !(
          passInput.value.match(/[0-9]/g) &&
          passInput.value.match(/[A-Z]/g) &&
          passInput.value.match(/[a-z]/g) &&
          passInput.value.length >= 10
        )
      ) {
        passError = "Mot de passe faible";
        passValid = false;
        document.getElementById("passr").innerHTML = passError;
      } else {
        passValid = true;
        document.getElementById("passr").innerHTML = "<p style='color:green'> Correct </p>";
      }}
  function adresseValidation() {
   
    if (adresseInput.value.length < 5) {
        adresseError = " adresse doit compter au minimum 5 caractères.";
        document.getElementById("adresser").innerHTML = adresseError;
    
        return false;
      }
     
      
      document.getElementById("adresser").innerHTML =
        "<p style='color:green'> Correct </p>";
    
      return true;
    }
    
  function emailValidation() {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (
      !(
        emailInput.value.match(mailformat)
      )
    ) {
      emailError = "adresse icomplette ";
      emailValid = false;
      document.getElementById("emailr").innerHTML = emailError;
    } else {
      emailValid = true;
      document.getElementById("emailr").innerHTML = "<p style='color:green'> Correct </p>";
    }}

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

    